<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Mail\Mailables\Content;

class CoantactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index');
    }
    private $contact;

    public function add(Request $request)
    {
        $this->contact = new ContactInfo();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
       if($profile)
       {
            $profile_id = $profile->id;

            $this->contact->profile_id = $profile->id;
            $this->contact->contact_title = $request->contact_title;
            $this->contact->contact_info = $request->contact_info;
            $this->contact->contact_pritory = $request->contact_pritory;
            $this->contact->status = $request->status;

            $this->contact->save();
            return back()->with('message', 'Contact information Upload Successfully.');
       }else
       {
            return back()->with('message', 'You do not create profile yet.');
       }
    }

    public function manage()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
       if($profile)
       {
        $profile_id = $profile->id;
        $this->contact = ContactInfo::where('profile_id', $profile_id)->get();
        return view('admin.contact.manage',['contacts' => $this->contact]);
       }else
       {
        return view('admin.contact.manage');
       }
    }

    public function edit($id)
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $this->contact = ContactInfo::find($id);
        return view('admin.contact.edit',['contact'=>$this->contact]);
    }

    public function update(Request $request, $id)
    {
        $this->contact = ContactInfo::find($id);

        $this->contact->contact_title = $request->contact_title;
        $this->contact->contact_info = $request->contact_info;
        $this->contact->contact_pritory = $request->contact_pritory;
        $this->contact->status = $request->status;

        $this->contact->save();
        return redirect('/manage/contact')->with('message','Contact Updated Successfully.');
    }

    public function delete($id)
    {
        $this->contact = ContactInfo::find($id);

        $this->contact->delete();
        return redirect('/manage/contact')->with('message','Contact Delete Successfully.');
    }
}
