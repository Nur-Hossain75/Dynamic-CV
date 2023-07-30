<?php

namespace App\Http\Controllers;

use App\Models\InformationBox;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class InformationBoxController extends Controller
{
    public function index()
    {
        return view('admin.information.index');
    }
    private $information;
    public function add(Request $request)
    {
        $this->information = new InformationBox();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if($profile)
        {
            $profile_id = $profile->id;

            $this->information->profile_id = $profile->id;
            $this->information->name = $request->name;
            $this->information->description = $request->description;
            $this->information->pritory = $request->pritory;
            $this->information->status = $request->status;
            $this->information->save();

            return back()->with('message', 'Informtion Update Successfully.');
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
        $this->information = InformationBox::where('profile_id', $profile_id)->get();
        return view('admin.information.manage',['informations'=>$this->information ]);
       }else
       {
        return view('admin.information.manage');
       }
    }

    public function edit($id)
    {
        $this->information = InformationBox::find($id);
        return view('admin.information.edit',['information'=> $this->information]);
    }

    public function update(Request $request, $id){

        $this->information = InformationBox::find($id);
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;

        $this->information->profile_id = $profile->id;
        $this->information->name = $request->name;
        $this->information->description = $request->description;
        $this->information->pritory = $request->pritory;
        $this->information->status = $request->status;
        $this->information->save();

        return redirect('/manage/information')->with('message','Update Successfully.');
    }

    public function delete($id)
    {
        $this->information = InformationBox::find($id);

        $this->information->delete();
        return redirect('/manage/information')->with('message','Delete Successfully.');
    }
}
