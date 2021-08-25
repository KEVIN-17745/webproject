<?php

namespace App\Http\Controllers;

use App\Responce;
use Illuminate\Http\Request;
use App\Contact;

class ResController extends Controller
{
    public function indexadminresponce(Request $request)
    {
        //dd($request->all());
        $responce = new Responce;

        $this->validate($request, [
            'adname' => 'required|max:20',
            'admessage' => 'required|max:200',
        ]);

        $responce->Admin_Name = $request->adname;
        $responce->Responce = $request->admessage;
        $responce->contact_id = $request->contact_id;
        $responce->save();

        $datares = Responce::all();
        //dd($datares);
        return redirect()->route('listResponses');
    }
    public function listResponses()
    {
        $data = Contact::all();

        return view('adminresponce')->with('contacts', $data);
    }
    public function giveresponce($id)
    {
        return view('giveresponce')->with('contact', $id);
    }

    
    public function viewresponce($contact_id)
    {
        $data = Contact::find($contact_id);

        return view('viewresponce')->with('contactdata', $data);
    }
}
