<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsletterSubscriptionController extends Controller
{


    public function index()
    {


        $newsletters = NewsletterSubscription::orderBy('created_at', 'desc')->get();
        $newsletterslength = NewsletterSubscription::all();

        $length = $newsletterslength->count();

        return view('newsletter ', compact('newsletters', 'length'));
    }


    public function exportToExcel()
    {
        $newsletters = NewsletterSubscription::all();
        
        $filename = 'newsletters_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($newsletters) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, [
                'Email',
                'Subscription Date'
            ]);
            
            // Add data rows
            foreach ($newsletters as $newsletter) {
                fputcsv($file, [
                    $newsletter->email,
                    $newsletter->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }



    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ], [
            'email.unique' => 'This email is already subscribed to our newsletter'
        ]);

        NewsletterSubscription::create([
            'email' => $request->email,
        ]);

        session()->put('visited_before', true);

        return redirect()->back()->with('alert-success', 'Subscribed successfully!');
    }

    public function subscribeForm()
    {
        return view('subscribe');
    }

    public function subscribeClose()
    {
        session()->put('visited_before', true);
        return back();
    }

    public function destroy($id)
    {
   
      $expoUser = NewsletterSubscription:: findorFail($id);
      $expoUser->delete();

      return back()->with('alert-success', 'User deleted successfully');
    }


    public function delete(Request $request)
    {
        $selectedItems = $request->input('selectedItems', []);

        NewsletterSubscription::whereIn('id', $selectedItems)->delete();
        return back()->with('alert-success', 'Selected Subscribers deleted successfully');
    }
}
