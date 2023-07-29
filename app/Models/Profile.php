<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Profile extends Model
{
    use HasFactory;

    private static $profile, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request){
        self::$image     = $request->file('image');
        self::$imageName = time().'.'.self::$image->getClientOriginalName();
        self::$directory = 'upload/profile-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProfile($request)
    {
        $profileCount = Profile::where('user_id', Auth::user()->id)->count();
        if($profileCount < 1){
            self::$profile = new Profile();
    
            
            self::$profile->user_id           = Auth::user()->id;
            self::$profile->name              = $request->name;
            self::$profile->nid               = $request->nid;
            self::$profile->birth_date        = $request->birth_date;
            self::$profile->nid_status        = $request->nid_status;
            self::$profile->father_name       = $request->father_name;
            self::$profile->mother_name       = $request->mother_name;
            self::$profile->nationality       = $request->nationality;
            self::$profile->gander            = $request->gander;
            self::$profile->present_address   = $request->present_address;
            self::$profile->permanent_address = $request->permanent_address;
            self::$profile->aspiration        = $request->aspiration;
            self::$profile->image             = self::getImageUrl($request);
    
            self::$profile->save();
            return self::$profile;
        }else{
            return 1;
        }
    }
}
