<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.project.index');
    }
    private $project;
    public function add(Request $request)
    {
        $this->project = new Project();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if($profile)
        {
            $profile_id = $profile->id;

            $this->project->profile_id = $profile->id;
            $this->project->project_type = $request->project_type;
            $this->project->title = $request->title;
            $this->project->description = $request->description;       
            $this->project->tool_technology = $request->tool_technology;        
            $this->project->project_link = $request->project_link;
            $this->project->pritory = $request->pritory;
            $this->project->status = $request->status;
            $this->project->save();

            return back()->with('message', 'Informtion Added Successfully.');
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
            $projects = Project::where('profile_id', $profile_id)->orderBy('created_at','desc')->get();
            return view('admin.project.manage',['projects'=>$projects]);
        }else
        {
            return view('admin.project.manage');
        }
    }

    public function edit($id)
    {
        $this->project = Project::find($id);
        return view('admin.project.edit',['project'=>$this->project]);
    }

    public function update(Request $request , $id) 
    {
        $this->project = Project::find($id);

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;

        $this->project->profile_id = $profile->id;
        $this->project->project_type = $request->project_type;
        $this->project->title = $request->title;
        $this->project->description = $request->description;       
        $this->project->tool_technology = $request->tool_technology;        
        $this->project->project_link = $request->project_link;
        $this->project->pritory = $request->pritory;
        $this->project->status = $request->status;
        $this->project->save();

        return back()->with('message', 'Informtion Update Successfully.');
    }
    
    public function delete($id) 
    {
        $this->project = Project::find($id);

        $this->project->delete();

        return redirect('/manage/project')->with('message','Information Delete Successfully.');
    }
}
