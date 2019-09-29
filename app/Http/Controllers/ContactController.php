<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;


class ContactController extends Controller
{
     public function storeContact(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=> 'required|email',
            'message'=>'required'

        ]);

      $contact = new Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->message = $request->message;
      $contact->save();
      Session::flash('success','Your message sent successfully');
      return redirect()->back();


    }

    public function showContact(){
    	$data['contacts'] = Contact::where('status',0)->get(); 
        return view ('admin.Contact.contact',$data);
    }


    public function detailsView($id)
    {
    	$data['contact'] = Contact::find($id);
    	return view('admin.Contact.details_contact',$data);
    }

    public function deleteContact($id){
    	Contact::where('id',$id)->update(['status'=>1]);
    	return redirect()->back()->with('message','Delete Successfully');
    }
}
