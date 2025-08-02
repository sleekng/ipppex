<?php

namespace App\Http\Controllers;

use App\Models\PdfFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfFileController extends Controller
{

    public function index()
    {
        $pdfFiles = PdfFile::all();

        return view('conference', compact('pdfFiles'));
    }



    public function create()
    {
        $pdfFiles = PdfFile::all();

        return view('brochure', compact('pdfFiles'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required', // Adjust max file size as needed
        ]);


        $file = $request->file('pdf_file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('storage/pdfs', $filename);

        PdfFile::create([
            'filename' => $request->filename,
            'path' => $filename,
        ]);

        return redirect()->back()->with('success', 'PDF file uploaded successfully.');
    }


    public function destroy($id)
    {
        $pdfFile = PdfFile::findOrFail($id);
        Storage::disk('public')->delete($pdfFile->path);
        $pdfFile->delete();

        return redirect()->back()->with('success', 'PDF file deleted successfully.');
    }
}
