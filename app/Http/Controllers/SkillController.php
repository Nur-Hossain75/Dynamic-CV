<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class SkillController extends Controller
{
    public function index()
    {
        $categories = SkillCategory::where('status', 1)->get();
        return view('admin.skills.index',['categories' => $categories]);
    }
    private $skill;
    public function add(Request $request)
    {
        $this->skill = new Skill();

        $this->skill->category_id = $request->category_id;
        $this->skill->skill = $request->skill;
        $this->skill->pritory = $request->pritory;
        $this->skill->status = $request->status;
        $this->skill->save();

        return back()->with('message', 'Informtion Update Successfully.');
    }

    public function manage()
    {
        // $categories = SkillCategory::where('profile_id', $profile_id)->get();
        // $skill = [];
        // foreach($categories as $category){
        //     $skill[] = Skill::where('category_id', $category->id)->get();
        // }
        $profile = Profile::where('user_id', Auth::user()->id)->first();
       if($profile){
        $profile_id = $profile->id;
        $skills = Skill::join('skill_categories', 'skill_categories.id', '=', 'skills.category_id')->select('skills.*', 'skill_categories.category_name')->where('skill_categories.profile_id', $profile_id)->get();
        return view('admin.skills.manage',['skills'=>$skills]);
       }else
       {
        return view('admin.skills.manage');
       }
    }

    public function edit($id)
    {
        $this->skill = Skill::find($id);
        $categories = SkillCategory::where('status', 1)->get();
        return view('admin.skills.edit',['skill'=> $this->skill, 'categories' => $categories]);
    }

    public function update(Request $request, $id){

        $this->skill = Skill::find($id);

        $this->skill->category_id = $request->category_id;
        $this->skill->skill = $request->skill;
        $this->skill->pritory = $request->pritory;
        $this->skill->status = $request->status;
        $this->skill->save();

        return redirect('/manage/skill')->with('message','Update Successfully.');
    }

    public function delete($id)
    {
        $this->skill = Skill::find($id);

        $this->skill->delete();
        return redirect('/manage/skill')->with('message','Delete Successfully.');
    }
}
