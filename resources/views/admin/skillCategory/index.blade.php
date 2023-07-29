@extends('admin.master')

@section('title','Create-Skill Category')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Skill Category</h4>
                <hr/>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <form class="form-horizontal p-t-20" method="POST" action="{{route('add.skill-category')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Skill Category Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="category_name" id="exampleInputuname4" placeholder="Enter your Skill Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Priority<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="pritory" id="exampleInputuname4" placeholder="Priority to show your info">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Status<span class="text-danger">*</span></label>
                            <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value=1 checked>
                                <label class="form-check-label control-label" for="flexRadioDefault1">
                                  Publish
                                </label>
                              </div>
                              <div class="form-check col-sm-3">
                                <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value=0>
                                <label class="form-check-label control-label" for="flexRadioDefault2">
                                  Hide
                                </label>
                              </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Skill Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection