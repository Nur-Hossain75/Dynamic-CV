<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
       
        return view('admin.profile.index');
    }

    private $profile;
    public function add(Request $request)
    {
        $success = $this->profile = Profile::newProfile($request);
        if($success != "1"){
            return back()->with('message','Profile created successfully.');
        }else{
            return back()->with('message','You Have Already A Profile.');
        }
    }

    public function manage()
    {
        $profiles = Profile::where('user_id', Auth::user()->id)->get();
        return view('admin.profile.manage',['profiles' => $profiles]);
    }

    public function detail($id)
    {
        return view('admin.profile.detail',['profile' => Profile::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.profile.edit',['profile' => Profile::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->profile = Profile::find($id);

        if($request->file('image')){

            if (file_exists($this->profile->image)) {
                unlink($this->profile->image);                
            }
            $imageUrl = Profile::getImageUrl($request);

        }
        else{
            $imageUrl = $this->profile->image;
        }
            $this->profile->name              = $request->name;
            $this->profile->nid               = $request->nid;
            $this->profile->birth_date        = $request->birth_date;
            $this->profile->nid_status        = $request->nid_status;
            $this->profile->father_name       = $request->father_name;
            $this->profile->mother_name       = $request->mother_name;
            $this->profile->nationality       = $request->nationality;
            $this->profile->gander            = $request->gander;
            $this->profile->present_address   = $request->present_address;
            $this->profile->permanent_address = $request->permanent_address;
            $this->profile->aspiration        = $request->aspiration;
            $this->profile->image             = $imageUrl;
    
            $this->profile->save();
            return redirect('/manage/profile')->with('message','Profile Updated Successfully.');
    }

    public function delete($id)
    {
        $this->profile = Profile::find($id);
        if (file_exists($this->profile->image)) {
            unlink($this->profile->image);                
        }

        $this->profile->delete();
        return redirect('/manage/profile')->with('message','Profile Updated Successfully.');
    }
}
