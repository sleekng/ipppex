<?php

namespace App\Http\Controllers;

use App\Mail\ExhibitorsMail;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $applicants = Contact::orderBy('created_at', 'desc')->get();
        $applicantslength = Contact::all();
    
        $length = $applicantslength->count();
    
        return view('exibitors',compact('applicants','length'));
    }

    public function exportToExcel()
    {
        $exhibitors = Contact::all();
        
        $filename = 'exhibitors_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($exhibitors) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, [
                'Company Name',
                'Country/Region',
                'State',
                'Booking Status',
                'Stand Number',
                'Question About',
                'Question',
                'Phone Number',
                'Email',
                'Tag Number',
                'Registration Date'
            ]);
            
            // Add data rows
            foreach ($exhibitors as $exhibitor) {
                fputcsv($file, [
                    $exhibitor->company_name,
                    $exhibitor->country_region,
                    $exhibitor->state,
                    $exhibitor->booking,
                    $exhibitor->stand,
                    $exhibitor->q_about,
                    $exhibitor->question,
                    $exhibitor->phone_number,
                    $exhibitor->email,
                    $exhibitor->tagnumber,
                    $exhibitor->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }


    public function searchexhibitors(Request $request)
    {
        $query = $request->input('query'); 
        
        $applicants = Contact::where('company_name', 'like', "%$query%")
        ->orWhere('email', 'like', "%$query%")
        ->get();

        $applicantslength = Contact::all();
        $length = $applicantslength->count();


        return view('search-exibitor', compact('applicants','length'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   


   
        $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'country_region' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'booking' => ['required', 'string', 'max:255'],
            'q_about' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'question' => ['required', 'string'],
        ],[
            "q_about.required" =>"Kindly select one of the following option",
        ]);

        if($request->booking=='no'){
            $stand = $request->stand;
        }else{
            $stand = null;
        }

        // Generate unique tag number
        do {
            $tagnumber = Str::random(6);
        } while(Contact::where('tagnumber', $tagnumber)->exists());

        // Create contact record
        Contact::create([
            'company_name' => $request->company_name,
            'q_about' => $request->q_about,
            'country_region' => $request->country_region,
            'state' => $request->state,
            'booking' => $request->booking,
            'stand' => $stand,
            'tagnumber' => $tagnumber,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'question' => $request->question
        ]);

        // Prepare registration data for email
        $regData = [
            'email' => $request->email,
            'company_name' => $request->company_name,
            'tagnumber' => $tagnumber
        ];

        // Send confirmation email with error handling
        try {
            Mail::to($request->email)->send(new ExhibitorsMail($regData));
        } catch (\Exception $e) {
            // Log the error but don't fail the registration
            Log::error('Failed to send exhibitor confirmation email: ' . $e->getMessage());
            // You can also send to admin or handle differently
        }




        return back()->with('alert-success','Your request has been sent, Thank you');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
      $expoUser = Contact:: findorFail($id);
      $expoUser->delete();

      return back()->with('alert-success', 'User deleted successfully');
    }



    public function delete(Request $request)
    {
        $selectedItems = $request->input('selectedItems', []);

        Contact::whereIn('id', $selectedItems)->delete();
        return back()->with('alert-success', 'Selected Users deleted successfully');
    }
}
