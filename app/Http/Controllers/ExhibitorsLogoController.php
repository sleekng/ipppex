<?php

namespace App\Http\Controllers;

use App\Models\ExhibitorsLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExhibitorsLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $exhibitorsList = ExhibitorsLogo::all();

        return view('ExhibitorList', compact('exhibitorsList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exhibitorsList = ExhibitorsLogo::all();

        return view('exhibitorslogo-create', compact('exhibitorsList'));
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
            'logo' => 'required', // Adjust max file size as needed
        ]);


        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('storage/exhibitorsLogo', $filename);

        ExhibitorsLogo::create([
            'name' => $request->name,
            'logo' => $filename,
        ]);

        return redirect()->back()->with('success', 'Logo uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExhibitorsLogo  $exhibitorsLogo
     * @return \Illuminate\Http\Response
     */
    public function show(ExhibitorsLogo $exhibitorsLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExhibitorsLogo  $exhibitorsLogo
     * @return \Illuminate\Http\Response
     */
    public function edit(ExhibitorsLogo $exhibitorsLogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExhibitorsLogo  $exhibitorsLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExhibitorsLogo $exhibitorsLogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExhibitorsLogo  $exhibitorsLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exhibitorsList = ExhibitorsLogo::findOrFail($id);
       
        if($exhibitorsList){
        unlink(public_path('storage/exhibitorsLogo/' . $exhibitorsList->logo));
        }
                    $exhibitorsList->delete();

        return redirect()->back()->with('alert-success', 'Logo deleted successfully.');
    }
}
