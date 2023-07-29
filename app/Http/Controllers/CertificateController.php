<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class CertificateController extends Controller
{
    public function index()
    {
        return view('admin.certificate.index');
    }
    private $certificate;
    public function add(Request $request)
    {
        $this->certificate = new Certificate();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;

        $this->certificate->profile_id = $profile->id;
        $this->certificate->name = $request->name;
        $this->certificate->description = $request->description;
        $this->certificate->pritory = $request->pritory;
        $this->certificate->status = $request->status;
        $this->certificate->save();

        return back()->with('message', 'Informtion Update Successfully.');
    }

    public function manage()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;
        $certificates = Certificate::where('profile_id', $profile_id)->orderBy('created_at','desc')->get();
        return view('admin.certificate.manage',['certificates' => $certificates]);
    }

    public function edit($id)
    {
        $certificates = Certificate::find($id);
        return view('admin.certificate.edit',['certificate'=> $certificates]);
    }

    public function update(Request $request, $id){
        $this->certificate = Certificate::find($id);

        $this->certificate->name = $request->name;
        $this->certificate->description = $request->description;
        $this->certificate->pritory = $request->pritory;
        $this->certificate->status = $request->status;
        $this->certificate->save();

        return redirect('/manage/certificate')->with('message','Information Update Successfully.');
    }

    public function delete($id)
    {
        $this->certificate = Certificate::find($id);

        $this->certificate->delete();

        return redirect('/manage/certificate')->with('message','Information Delete Successfully.');
    }
}
