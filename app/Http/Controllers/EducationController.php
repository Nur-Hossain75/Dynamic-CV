<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.education.index');
    }
    private $education;
    public function add(Request $request)
    {
        $this->education = new Education();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
       if($profile)
       {
            $profile_id = $profile->id;

            $this->education->profile_id = $profile->id;
            $this->education->name = $request->name;
            $this->education->i_name = $request->i_name;
            $this->education->p_year = $request->p_year;
            $this->education->cgpa = $request->cgpa;
            $this->education->group = $request->group;
            $this->education->board = $request->board;
            $this->education->pritory = $request->pritory;
            $this->education->save();

            return back()->with('message', 'Informtion Update Successfully.');
       }else
       {
            return back()->with('message', 'You do not create profilr yet.');
       }
    }

    public function manage()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if($profile)
        {
            $profile_id = $profile->id;
            $this->education = Education::where('profile_id', $profile_id)->get();
            return view('admin.education.manage',['educationes'=>$this->education ]);
        }else
        {
            return view('admin.education.manage');
        }
    }

    public function edit($id)
    {
        $this->education = Education::find($id);
        return view('admin.education.edit',['education'=>$this->education]);
    }

    public function update(Request $request, $id)
    {
        $this->education = Education::find($id);

        $this->education->name = $request->name;
        $this->education->i_name = $request->i_name;
        $this->education->p_year = $request->p_year;
        $this->education->cgpa = $request->cgpa;
        $this->education->group = $request->group;
        $this->education->board = $request->board;
        $this->education->pritory = $request->pritory;
        $this->education->save();

        return redirect('/add/manage_education')->with('message','Successfully updated.');
    }

    public function delete($id)
    {
        $this->education = Education::find($id);
        $this->education->delete();
        return redirect('/add/manage_education')->with('message','Deleted Successfully.');
    }
}

