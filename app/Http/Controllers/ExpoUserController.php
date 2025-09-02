<?php

namespace App\Http\Controllers;

use App\Mail\Registered;
use App\Models\Contact;
use App\Models\ExpoUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
// use PragmaRX\Countries\Package\Countries;

class ExpoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    public function exportToExcel()
    {
        $visitors = ExpoUser::all();
        
        $filename = 'visitors_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($visitors) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, [
                'Name',
                'Email',
                'Phone Number',
                'Organization/Company',
                'Role',
                'First Time',
                'Attend Year',
                'Reference',
                'Tag Number',
                'Registration Date'
            ]);
            
            // Add data rows
            foreach ($visitors as $visitor) {
                fputcsv($file, [
                    $visitor->name,
                    $visitor->email,
                    $visitor->phone_number,
                    $visitor->organization_company,
                    $visitor->role,
                    $visitor->first_time,
                    $visitor->attend_year,
                    $visitor->ref,
                    $visitor->tagnumber,
                    $visitor->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.register');
    }

    public function visitor()
    {
        return view('registration.register-visitor');
    }
    public function exibitor()
    {
        // Static list of countries instead of using external package
        $countries = [
            (object)['name' => (object)['common' => 'Nigeria']],
            (object)['name' => (object)['common' => 'Ghana']],
            (object)['name' => (object)['common' => 'Kenya']],
            (object)['name' => (object)['common' => 'South Africa']],
            (object)['name' => (object)['common' => 'Egypt']],
            (object)['name' => (object)['common' => 'Morocco']],
            (object)['name' => (object)['common' => 'Tunisia']],
            (object)['name' => (object)['common' => 'Algeria']],
            (object)['name' => (object)['common' => 'Ethiopia']],
            (object)['name' => (object)['common' => 'Uganda']],
            (object)['name' => (object)['common' => 'Tanzania']],
            (object)['name' => (object)['common' => 'Rwanda']],
            (object)['name' => (object)['common' => 'Cameroon']],
            (object)['name' => (object)['common' => 'Senegal']],
            (object)['name' => (object)['common' => 'Ivory Coast']],
            (object)['name' => (object)['common' => 'Burkina Faso']],
            (object)['name' => (object)['common' => 'Mali']],
            (object)['name' => (object)['common' => 'Niger']],
            (object)['name' => (object)['common' => 'Chad']],
            (object)['name' => (object)['common' => 'Sudan']],
            (object)['name' => (object)['common' => 'Libya']],
            (object)['name' => (object)['common' => 'Angola']],
            (object)['name' => (object)['common' => 'Zambia']],
            (object)['name' => (object)['common' => 'Zimbabwe']],
            (object)['name' => (object)['common' => 'Botswana']],
            (object)['name' => (object)['common' => 'Namibia']],
            (object)['name' => (object)['common' => 'Mozambique']],
            (object)['name' => (object)['common' => 'Malawi']],
            (object)['name' => (object)['common' => 'Zambia']],
            (object)['name' => (object)['common' => 'United States']],
            (object)['name' => (object)['common' => 'United Kingdom']],
            (object)['name' => (object)['common' => 'Germany']],
            (object)['name' => (object)['common' => 'France']],
            (object)['name' => (object)['common' => 'Italy']],
            (object)['name' => (object)['common' => 'Spain']],
            (object)['name' => (object)['common' => 'Netherlands']],
            (object)['name' => (object)['common' => 'Belgium']],
            (object)['name' => (object)['common' => 'Switzerland']],
            (object)['name' => (object)['common' => 'Austria']],
            (object)['name' => (object)['common' => 'Sweden']],
            (object)['name' => (object)['common' => 'Norway']],
            (object)['name' => (object)['common' => 'Denmark']],
            (object)['name' => (object)['common' => 'Finland']],
            (object)['name' => (object)['common' => 'Poland']],
            (object)['name' => (object)['common' => 'Czech Republic']],
            (object)['name' => (object)['common' => 'Hungary']],
            (object)['name' => (object)['common' => 'Romania']],
            (object)['name' => (object)['common' => 'Bulgaria']],
            (object)['name' => (object)['common' => 'Greece']],
            (object)['name' => (object)['common' => 'Portugal']],
            (object)['name' => (object)['common' => 'Ireland']],
            (object)['name' => (object)['common' => 'Canada']],
            (object)['name' => (object)['common' => 'Australia']],
            (object)['name' => (object)['common' => 'New Zealand']],
            (object)['name' => (object)['common' => 'Japan']],
            (object)['name' => (object)['common' => 'South Korea']],
            (object)['name' => (object)['common' => 'China']],
            (object)['name' => (object)['common' => 'India']],
            (object)['name' => (object)['common' => 'Brazil']],
            (object)['name' => (object)['common' => 'Argentina']],
            (object)['name' => (object)['common' => 'Chile']],
            (object)['name' => (object)['common' => 'Mexico']],
            (object)['name' => (object)['common' => 'Colombia']],
            (object)['name' => (object)['common' => 'Peru']],
            (object)['name' => (object)['common' => 'Venezuela']],
            (object)['name' => (object)['common' => 'Uruguay']],
            (object)['name' => (object)['common' => 'Paraguay']],
            (object)['name' => (object)['common' => 'Bolivia']],
            (object)['name' => (object)['common' => 'Ecuador']],
            (object)['name' => (object)['common' => 'Guyana']],
            (object)['name' => (object)['common' => 'Suriname']],
            (object)['name' => (object)['common' => 'French Guiana']],
            (object)['name' => (object)['common' => 'Falkland Islands']],
            (object)['name' => (object)['common' => 'Greenland']],
            (object)['name' => (object)['common' => 'Iceland']],
            (object)['name' => (object)['common' => 'Luxembourg']],
            (object)['name' => (object)['common' => 'Liechtenstein']],
            (object)['name' => (object)['common' => 'Monaco']],
            (object)['name' => (object)['common' => 'Andorra']],
            (object)['name' => (object)['common' => 'San Marino']],
            (object)['name' => (object)['common' => 'Vatican City']],
            (object)['name' => (object)['common' => 'Malta']],
            (object)['name' => (object)['common' => 'Cyprus']],
            (object)['name' => (object)['common' => 'Estonia']],
            (object)['name' => (object)['common' => 'Latvia']],
            (object)['name' => (object)['common' => 'Lithuania']],
            (object)['name' => (object)['common' => 'Slovakia']],
            (object)['name' => (object)['common' => 'Slovenia']],
            (object)['name' => (object)['common' => 'Croatia']],
            (object)['name' => (object)['common' => 'Serbia']],
            (object)['name' => (object)['common' => 'Bosnia and Herzegovina']],
            (object)['name' => (object)['common' => 'Montenegro']],
            (object)['name' => (object)['common' => 'North Macedonia']],
            (object)['name' => (object)['common' => 'Albania']],
            (object)['name' => (object)['common' => 'Kosovo']],
            (object)['name' => (object)['common' => 'Moldova']],
            (object)['name' => (object)['common' => 'Ukraine']],
            (object)['name' => (object)['common' => 'Belarus']],
            (object)['name' => (object)['common' => 'Russia']],
            (object)['name' => (object)['common' => 'Kazakhstan']],
            (object)['name' => (object)['common' => 'Uzbekistan']],
            (object)['name' => (object)['common' => 'Turkmenistan']],
            (object)['name' => (object)['common' => 'Kyrgyzstan']],
            (object)['name' => (object)['common' => 'Tajikistan']],
            (object)['name' => (object)['common' => 'Afghanistan']],
            (object)['name' => (object)['common' => 'Pakistan']],
            (object)['name' => (object)['common' => 'Bangladesh']],
            (object)['name' => (object)['common' => 'Sri Lanka']],
            (object)['name' => (object)['common' => 'Nepal']],
            (object)['name' => (object)['common' => 'Bhutan']],
            (object)['name' => (object)['common' => 'Myanmar']],
            (object)['name' => (object)['common' => 'Thailand']],
            (object)['name' => (object)['common' => 'Vietnam']],
            (object)['name' => (object)['common' => 'Laos']],
            (object)['name' => (object)['common' => 'Cambodia']],
            (object)['name' => (object)['common' => 'Malaysia']],
            (object)['name' => (object)['common' => 'Singapore']],
            (object)['name' => (object)['common' => 'Indonesia']],
            (object)['name' => (object)['common' => 'Philippines']],
            (object)['name' => (object)['common' => 'Taiwan']],
            (object)['name' => (object)['common' => 'Hong Kong']],
            (object)['name' => (object)['common' => 'Macau']],
            (object)['name' => (object)['common' => 'Mongolia']],
            (object)['name' => (object)['common' => 'North Korea']],
            (object)['name' => (object)['common' => 'Iran']],
            (object)['name' => (object)['common' => 'Iraq']],
            (object)['name' => (object)['common' => 'Syria']],
            (object)['name' => (object)['common' => 'Lebanon']],
            (object)['name' => (object)['common' => 'Jordan']],
            (object)['name' => (object)['common' => 'Israel']],
            (object)['name' => (object)['common' => 'Palestine']],
            (object)['name' => (object)['common' => 'Saudi Arabia']],
            (object)['name' => (object)['common' => 'Yemen']],
            (object)['name' => (object)['common' => 'Oman']],
            (object)['name' => (object)['common' => 'United Arab Emirates']],
            (object)['name' => (object)['common' => 'Qatar']],
            (object)['name' => (object)['common' => 'Kuwait']],
            (object)['name' => (object)['common' => 'Bahrain']],
            (object)['name' => (object)['common' => 'Turkey']],
            (object)['name' => (object)['common' => 'Georgia']],
            (object)['name' => (object)['common' => 'Armenia']],
            (object)['name' => (object)['common' => 'Azerbaijan']],
            (object)['name' => (object)['common' => 'Other']]
        ];

        return view('registration.register-exibitor', ['countries' => $countries]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:expo_users'],
            'phone_number' => ['required', 'string', 'max:255'],
            'ref' => ['required', 'string', 'max:255'],
            'first_time' => ['required', 'string', 'max:255'],
        ],[
            'ref.required' => 'Please select how you heard about us',
        ]);


        $selectedAttendyear = $request->input('attend_year', []);
  
        // Generate unique tag number
        do {
            $tagnumber = Str::random(6);
        } while(ExpoUser::where('tagnumber', $tagnumber)->exists());

        // Create visitor record
        ExpoUser::create([
            'name' => $request->name,
            'first_time' => $request->first_time,
            'attend_year' => json_encode($selectedAttendyear),
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'organization_company' => $request->organization_company,
            'role' => $request->role,
            'exhibitor' => $request->exhibitor,
            'ref' => $request->ref,
            'tagnumber' => $tagnumber
        ]);

        // Prepare registration data for email
        $regData = [
            'email' => $request->email,
            'name' => $request->name,
            'tagnumber' => $tagnumber
        ];

        // Send confirmation email with error handling
        try {
            Mail::to($request->email)->send(new Registered($regData));
        } catch (\Exception $e) {
            // Log the error but don't fail the registration
            Log::error('Failed to send visitor confirmation email: ' . $e->getMessage());
            // You can also send to admin or handle differently
        }

      
        return back()->with('alert-success','Thank you for your registration. Kindly, check your email');
    }


    public function searchExpoUsers(Request $request)
    {
        $query = $request->input('query'); 
        
        $expousers = ExpoUser::where('tagnumber', 'like', "%$query%")
        ->orWhere('name', 'like', "%$query%")
        ->get();

        $applicantslength = ExpoUser::all();
        $length = $applicantslength->count();


        return view('search', compact('expousers','length'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpoUser  $expoUser
     * @return \Illuminate\Http\Response
     */
    public function show(ExpoUser $expoUser)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpoUser  $expoUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpoUser $expoUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpoUser  $expoUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpoUser $expoUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpoUser  $expoUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
      $expoUser = ExpoUser:: findorFail($id);
      $expoUser->delete();

      return back()->with('alert-success', 'User deleted successfully');
    }



    public function delete(Request $request)
    {
        $selectedItems = $request->input('selectedItems', []);

        ExpoUser::whereIn('id', $selectedItems)->delete();
        return back()->with('alert-success', 'Selected Users deleted successfully');
    }
}
