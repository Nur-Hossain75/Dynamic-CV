@extends('admin.master')

@section('title','Edit-Project')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Project</h4>
                <hr/>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <form class="form-horizontal p-t-20" method="POST" action="{{ route('update.project',['id' => $project->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Project Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="project_type" id="">
                                    <option value="" disabled selected>--Select Project Type--</option>
                                    <option value="On Going" @if($project->project_type == "On Going") selected @endif >On Going</option>
                                    <option value="Complete" @if($project->project_type == "Complete") selected @endif>Complete</option>
                                    <option value="Live" @if($project->project_type == "Live") selected @endif>Live</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Project Title<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="exampleInputuname4" value="{{$project->title}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Project Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="description" id="exampleInputuname4" placeholder="Enter Project Description Within 350 Words">{{$project->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Tools & Technologies<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="tool_technology" id="exampleInputuname4" placeholder="Enter Tools & Technologies Within 350 Words">{{$project->tool_technology}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Project Link<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="project_link" id="exampleInputuname4" placeholder="Enter your Project Link" value="{{$project->project_link}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Priority<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="pritory" id="exampleInputuname4" placeholder="Priority to show your info" value="{{$project->pritory}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Status<span class="text-danger">*</span></label>
                            <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value=1  @if($project->status == 1) checked @endif>
                                <label class="form-check-label control-label" for="flexRadioDefault1">
                                  Publish
                                </label>
                              </div>
                              <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value=0 @if($project->status == 0) checked @endif>
                                <label class="form-check-label control-label" for="flexRadioDefault2">
                                  Hide
                                </label>
                              </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Project</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection