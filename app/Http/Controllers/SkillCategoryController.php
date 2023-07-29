<?php

namespace App\Http\Controllers;

use App\Models\SkillCategory;
use Illuminate\Http\Request;
use App\Models\Profile;
use Auth;

class SkillCategoryController extends Controller
{
    public function index()
    {
        return view('admin.skillCategory.index');
    }
    private $skill_category;
    public function add(Request $request)
    {
        $this->skill_category = new SkillCategory();

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;

        $this->skill_category->profile_id = $profile->id;
        $this->skill_category->category_name = $request->category_name;
        $this->skill_category->pritory = $request->pritory;
        $this->skill_category->status = $request->status;
        $this->skill_category->save();

        return back()->with('message', 'Informtion Update Successfully.');
    }
    

    public function manage()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile_id = $profile->id;
        $this->skill_category = SkillCategory::where('profile_id', $profile_id)->orderBy('created_at','desc')->get();
        return view('admin.skillCategory.manage',['skill_categorise'=>$this->skill_category]);
    }

    public function edit($id)
    {
        $this->skill_category = SkillCategory::find($id);

        return view('admin.skillCategory.edit',['skill_category'=>$this->skill_category]);
    }

    public function update(Request $request, $id)
    {
        $this->skill_category = SkillCategory::find($id);

        $this->skill_category->category_name = $request->category_name;
        $this->skill_category->pritory = $request->pritory;
        $this->skill_category->status = $request->status;
        $this->skill_category->save();

        return redirect('/manage/skill-category')->with('message','Update Successfully');
    }

    public function delete($id){

        $this->skill_category = SkillCategory::find($id);
        $this->skill_category->delete();

        return redirect('/manage/skill-category')->with('message','Update Successfully');
    }
}
