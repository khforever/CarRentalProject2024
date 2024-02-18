<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
   



    public function contact()
    {
    
        return  view('CarRental.contact')  ;
    }
    
    
    
    //receiveContact
    
    
    
    public function receiveContact(Request $request)
    {
    
    $contact=[
    
    'fname'=>$request->fname,
    
    'lname'=>$request->lname,
    'email'=>$request->email,
    'content'=>$request->content,
     

    
    
    ];
    Contact::create($contact);
    Mail::to('kk@gmail.com')->send(new ContactMail($contact),);
    
        //return "mail sent";

      return view('CarRental.sendMailcontact');

    }
    
    
    
    
    
    public function show(string $id)
    {
        

        $contact = Contact::findOrFail($id);


        $contact->read =true;
        $contact->save();
       
        //return view('admin.showMessage', ['contact' => $contact]);

       return view('admin.showMessage',compact('contact'));
    }
    


    public function index()
    {
     $contacts=Contact::get();


     return view('admin.messages',compact('contacts'));
     
        
    }



    public function destroy(string $id)
    {
        
        Contact::where ('id',$id) ->delete();
        return redirect()->back();

    }




}
