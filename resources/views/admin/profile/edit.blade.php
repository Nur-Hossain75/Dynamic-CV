@extends('admin.master')

@section('title','Edit-Profile')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Profile Information</h4>
                <hr/>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <form class="form-horizontal p-t-20" method="POST" action="{{route('update.profile',['id' => $profile->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-9">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Profile Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Profile Name" value="{{$profile->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Nid No<span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="nid" id="exampleInputuname5" placeholder="Nid Number" value="{{$profile->nid}}">
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="nid_status" id="flexRadioDefault1" value=1 @if($profile->nid_status == 1) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Publish
                                </label>
                              </div>
                              <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="nid_status" id="flexRadioDefault2" value=0 @if($profile->nid_status == 0) checked @endif>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Hide
                                </label>
                              </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Date Of Birth<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="birth_date" id="exampleInputuname5" placeholder="Date of Birth" value="{{$profile->birth_date}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Father Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="father_name" id="exampleInputuname3" placeholder="Father Name" value="{{$profile->father_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Mother Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mother_name" id="exampleInputuname3" placeholder="Mother Name" value="{{$profile->mother_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Nationality<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nationality" id="exampleInputuname3" placeholder="Your Nationality" value="{{$profile->nationality}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Gander<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="gander" id="" required>
                                    <option value="" disabled>--Select your Gander--</option>
                                    <option value="Male" @if($profile->gender == "Male") selected @endif >Male</option>
                                    <option value="Female" @if($profile->gender == "Female") selected @endif >Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname6" class="col-sm-3 control-label">Present Address<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="present_address" id="exampleInputuname6" placeholder="Present Address" value="{{$profile->present_address}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname6" class="col-sm-3 control-label">Permanent Address<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="permanent_address" id="exampleInputuname6" placeholder="Permanent Address" value="{{$profile->permanent_address}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail10" class="col-sm-3 control-label">Your Aspiration<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="aspiration" id="" cols="30" rows="5">{{$profile->aspiration}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Profile Image<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify"  accept="image/*" >
                                <img src="{{asset('/')}}{{$profile->image}}" alt="{{$profile->name}}" height="50px" width="80px">
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection