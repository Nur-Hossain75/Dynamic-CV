<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class ReferenceController extends Controller
{
    public function index()
    {
        return view('admin.reference.index');
    }
    private $reference;
    public function add(Request $request)
    {
        $this->reference = new Reference();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
       if($profile)
       {
            $profile_id = $profile->id;

            $this->reference->profile_id = $profile_id;
            $this->reference->name = $request->name;
            $this->reference->designation = $request->designation;
            $this->reference->email = $request->email;
            $this->reference->mobile = $request->mobile;
            $this->reference->institute = $request->institute;
            $this->reference->relation = $request->relation;
            $this->reference->pritory = $request->pritory;
            $this->reference->status = $request->status;
            $this->reference->save();

            return back()->with('message', 'Reference Added Successfully.');
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
            $this->reference = Reference::where('profile_id', $profile_id)->get();
            return view('admin.reference.manage',['references'=>$this->reference ]);
        }else
        {
            return view('admin.reference.manage');
        }
    }

    public function edit($id)
    {
        $this->reference = Reference::find($id);
        return view('admin.reference.edit',['reference'=> $this->reference]);
    }

    public function update(Request $request, $id)
    {
        $this->reference = Reference::find($id);

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;

        $this->reference->profile_id = $profile_id;
        $this->reference->name = $request->name;
        $this->reference->designation = $request->designation;
        $this->reference->email = $request->email;
        $this->reference->mobile = $request->mobile;
        $this->reference->institute = $request->institute;
        $this->reference->relation = $request->relation;
        $this->reference->pritory = $request->pritory;
        $this->reference->status = $request->status;
        $this->reference->save();

        return redirect('/manage/reference')->with('message', 'Reference Update Successfully.');
    }

    public function delete($id)
    {
        $this->reference = Reference::find($id);

        $this->reference->delete();
        return redirect('/manage/reference')->with('message','Delete Successfully.');
    }
}
