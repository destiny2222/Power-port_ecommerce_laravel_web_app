<?php

namespace App\Http\Controllers;

use App\Mail\MailNotification;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $product  = Product::where('status', '2')->paginate(9);
        return view('frontpage.index', compact('product'));
    }

    public function productView(){
        $product = Product::where('status', '2')->paginate(10);
        return view('frontpage.product', compact('product'));
    }


    public function productDetails(Product $product){
        return view('frontpage.product_detail', compact('product'));
    }

    public function faq(){
        return view('frontpage.faq');
    }
    public function about(){
        return view('frontpage.about');
    }


    public function service1(){
        return view('frontpage.service1');
    }
    public function service2(){
        $project = Project::orderBy('id', 'desc')->get();
        return view('frontpage.service2', compact('project'));
    }
    public function service3(){
        return view('frontpage.service3');
    }

    public function blog(){
        $product = Product::where('status', '2')->get();
        return view('frontpage.blog', compact('product'));
    }


    public function contact(){
        return view('frontpage.contact');
    }

    public function policy(){
        return view('frontpage.terms');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'fname'=>['required', 'string'],
            // 'lname'=>['required', 'string'],
            'email'=>['email','required', 'string'],
            'message'=>['required', 'string'],
        ]);

        $contact = Contact::create($request->all());
        if ($contact) {
            $contact->save();
            Mail::to('info@powerport.debayluxhotel.com')->send(new MailNotification($contact));
            return back()->with('success', 'Successfully Sent');
        } else {
            return back()->with('error', 'Something went worry');
        }
        
    }
}
