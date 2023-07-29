@extends('admin.master')

@section('title','Edid Eduaction')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Educational Information</h4>
                <hr/>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <form class="form-horizontal p-t-20" method="POST" action="{{route('update.education',['id'=>$education->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-9">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Programm Titel<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Enter Your Programm Name" value="{{$education->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Institute Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="i_name" id="exampleInputuname5" placeholder="Enter Your Institute Name" value="{{$education->i_name}}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Passing Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="p_year" id="exampleInputuname5" placeholder="Enter Your Passsing Year" value="{{$education->p_year}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">CGPA<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cgpa" id="exampleInputuname3" placeholder="Enter Your CGPA/GPA" value="{{$education->cgpa}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Group</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="group" id="">
                                    <option value="" disabled selected>--Select your Group--</option>
                                    <option value="Science" @if($education->group == "Science") selected @endif>Science</option>
                                    <option value="Commerce" @if($education->group == "Commerce") selected @endif >Commerce</option>
                                    <option value="Arts" @if($education->group == "Arts") selected @endif >Arts</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Board</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="board" id="">
                                    <option value="" disabled selected>--Select your Board--</option>
                                    <option value="Dhaka" @if($education->board == "Dhaka") selected @endif >Dhaka</option>
                                    <option value="Chittagong" @if($education->board == "Chittagong") selected @endif>Chittagong</option>
                                    <option value="Cumilla" @if($education->board == "Cumilla") selected @endif>Cumilla</option>
                                    <option value="Barisal" @if($education->board == "Barisal") selected @endif>Barisal</option>
                                    <option value="Jessore" @if($education->board == "Jessore") selected @endif>Jessore</option>
                                    <option value="Rajshahi"@if($education->board == "Rajshahi") selected @endif >Rajshahi</option>
                                    <option value="Sylhet" @if($education->board == "Sylhet") selected @endif>Sylhet</option>
                                    <option value="Mymensingh" @if($education->board == "Mymensingh") selected @endif>Mymensingh</option>
                                    <option value="Dinajpur" @if($education->board == "Dinajpur") selected @endif>Dinajpur</option>
                                    <option value="Bangladesh Madrasah Education Board" @if($education->board == "Bangladesh Madrasah Education Board") selected @endif>Bangladesh Madrasah Education Board</option>
                                    <option value="Bangladesh Technical Education Board" @if($education->board == "Bangladesh Technical Education Board") selected @endif>Bangladesh Technical Education Board</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Priority<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="pritory" id="exampleInputuname4" placeholder="Priority to show your info" value="{{$education->pritory}}">
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection