<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientDetails;
use Session;

class AppoinmentController extends Controller
{
   

    public function appoinment(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $message = "Appoinment added successfully!!";

              $rules =[
                'Name' => 'required|regex:/^[\pL\s-]+$/u',
                'date' => 'required',
                'address' =>'required',
                'email' =>'required',
            ];
            $customMessages =[
                'Name.required' => 'Name is reqired',
                'Name.regex' => ' valid name is reqired',
                'date.required' => 'date is required',
               // 'email.required' => ' email required', 
                'address.required' => ' email required', 
            ];
   
            $this->validate($request,$rules,$customMessages);

            if(empty($data['time'])){
                $data['time'] = "";
          }  
           



          // echo "<pre>"; print_r($data); die;
           $details = new PatientDetails();

           $details->Name = $data['Name'];
           $details->email = $data['email'];
           $details->mobileNumber = $data['mobile'];
           $details->nationalId = $data['nationalId'];
           $details->dob = $data['dob'];
           $details->address = $data['address'];
           $details->test = $data['test'];
           $details->date = $data['date'];
           $details->place = $data['place'];

           $details->time = $data['time']; 
           
           $details->save(); 
           session::flash('success_message',$message);
         


        }

        return view('front.booking');
    }


    public function appoinments(Request $request){

       // $user_id =$request->user()->id;
       // $orders = Order::with('orders')->where('user_id',$user_id)->orderby('id','DESC')->get();
        //$orders = json_decode(json_encode($orders));
       // echo "<pre>";print_r($orders);die;
    
       $details = PatientDetails::get()->reverse();
       
        
    
        return view('front.appoinments')->with(compact('details'));
        //->with(compact('orders'));
       }
      /*
       public function userOrderDetails(Request $request , $order_id){
        $user_id =$request->user()->id;
        $orderDetails = Order::with('orders')->where('id',$order_id)->first();
    
        
    
        return view('front.user_order_details')->with(compact('orderDetails'));
        
    
       } */
}


