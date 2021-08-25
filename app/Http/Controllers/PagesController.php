<?php

namespace App\Http\Controllers;

use App\Contact;


use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function indexcontactus(Request $request)
    {
        //return view('contact'); 
        //dd($request->all());

        $contact = new Contact;

        $this->validate($request, [
            'name' => 'required|max:20',
            'email' => 'required|email',
            'address' => 'required|max:255',
            'number' => 'required|max:10|min:10',
            'message' => 'required|max:200',
        ]);

        $contact->Name = $request->name;
        $contact->Email = $request->email;
        $contact->Address = $request->address;
        $contact->Phone_number = $request->number;
        $contact->Massage = $request->message;
        $contact->save();

        $data = Contact::all();
        return view('contact')->with('contacts', $data);
    }

    public function indexresponce($id)
    {
        $contact = Contact::find($id);

        return view('responce')->with('contactdata', $contact);
    }

   
  

    public function indexresponcenew()
    {
        //$data = Contact::all();

        return view('responce');
    }

    // public function indexadminresponce(Request $request){
    //     //dd($request->all());
    //    $responce=new Responce;

    //    $this->validate($request,[
    //     'adname'=>'required|max:20',
    //     'admessage'=>'required|max:200',
    // ]);

    //    $responce->Admin_Name=$request->adname;
    //    $responce->Responce=$request->admessage;
    //    $responce->save();

    //    $datares=Responce::all();
    //    //dd($datares);
    //    return view('adminresponce');
    //    }

}
