<?php

namespace App\Http\Controllers;

use App\Exports\ExhibitorsExport;
use App\Mail\ExhibitorsMail;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

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
        return Excel::download(new ExhibitorsExport(), 'Exhibitors.xlsx');
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

        $tagnumber = Str::random(6);

   
        if(Contact::where('tagnumber', $tagnumber)->get()){

            $tagnumber = Str::random(6);

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
    
            
            $regData = [
                'email' => $request->email,
                'company_name' => $request->company_name,
                'tagnumber' => $tagnumber
            ];
    
            Mail::to($request->email)->send(new ExhibitorsMail($regData));

        }else{
           

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
    
            
            $regData = [
                'email' => $request->email,
                'company_name' => $request->company_name,
                'tagnumber' => $tagnumber
            ];
    
            Mail::to($request->email)->send(new ExhibitorsMail($regData));
            
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
