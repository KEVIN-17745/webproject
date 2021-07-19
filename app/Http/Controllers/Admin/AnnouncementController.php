<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Announcement;
use Session;

class AnnouncementController extends Controller
{
    public function announcements(){

        $announcement = Announcement::get();

        return view('admin.announcements')->with(compact('announcement'));
    }

    public function addEditAnnouncement(Request $request,$id=null){
        if($id==""){
            $title = "Add Announcement";
            $announcement = new Announcement;
            $anndata = array();
            $message = "New announcement added scuccessfully!!";

            
        }
        else{
            $title = "Edit Announcement";
            $anndata = Announcement::where('id',$id)->first();
            $anndata = json_decode(json_encode($anndata),true);
           // echo"<pre>"; print_r($anndata);die;
           $announcement = Announcement::find($id);
            $message = "Announcement updated successfully!!";
          
        }

        if($request->isMethod('post')){

            $rules =[
                'title' => 'required|regex:/^[\pL\s-]+$/u',
                'date' => 'required',
                  
                'content' =>'required',
            ];
            $customMessages =[
                'title.required' => 'Title is reqired',
                'title.regex' => ' valid title is reqired',
                'date.required' => 'date is required',
                'content.required' => ' Details required', 
            ];
   
            $this->validate($request,$rules,$customMessages);
             
            $data = $request->all();
            $announcement->title = $data['title'];
            $announcement->date = $data['date'];
            $announcement->content = $data['content'];
            $announcement->save();

            session::flash('success_message',$message);
             return redirect('admin/announcements');

        }

        return view('admin.add_edit_announcement')->with(compact('title','anndata')); 
    }

    public function deleteAnnouncement($id){

        Announcement::where('id',$id)->delete();

        $message = 'Announcement deleted successfully';
        session::flash('success_message',$message);
        return redirect()->back(); 
    }
}
