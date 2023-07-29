<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\ContactInfo;
use App\Models\Education;
use App\Models\InformationBox;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Reference;
use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Mail\Mailables\Content;

class DashboardController extends Controller
{
    public function index()
    {
        
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if(!empty($profile)){
            $conact = ContactInfo::where('profile_id', $profile->id)->where('status',1)->orderBy('contact_pritory','asc')->get();
            $skill_categories = SkillCategory::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            $certificates = Certificate::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            $projects = Project::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            $educations = Education::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            $informations = InformationBox::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            $references = Reference::where('profile_id', $profile->id)->where('status',1)->orderBy('pritory','desc')->get();
            return view('admin.home.index',[
                'profile' => $profile,
                'contacts' => $conact,
                'skill_categories' => $skill_categories,
                'certificates' => $certificates,
                'projects' => $projects,
                'educations' => $educations,
                'informations' => $informations,
                'references' => $references,
            ]);
       }else{
            return view('admin.home.index',[
            'profile' => $profile,
            'contacts' => "",
            'skill_categories' => "",
            'certificates' => "",
            'projects' => "",
            'educations' => "",
            'informations' => "",
            'references' => "",
            ]);
       }
    }
}
