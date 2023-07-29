@extends('admin.master')

@section('title','Eduaction')

@section('body')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Educational Information</h4>
                <hr/>
                @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <form class="form-horizontal p-t-20" method="POST" action="{{route('add.edu_info')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-9">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Programm Titel<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Enter Your Programm Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Institute Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="i_name" id="exampleInputuname5" placeholder="Enter Your Institute Name" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Passing Year<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="p_year" id="exampleInputuname5" placeholder="Enter Your Passsing Year" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">CGPA<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cgpa" id="exampleInputuname3" placeholder="Enter Your CGPA/GPA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Group</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="group" id="">
                                    <option value="" disabled selected>--Select your Group--</option>
                                    <option value="Science" >Science</option>
                                    <option value="Commerce" >Commerce</option>
                                    <option value="Arts" >Arts</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Board</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="board" id="">
                                    <option value="" disabled selected>--Select your Board--</option>
                                    <option value="Dhaka" >Dhaka</option>
                                    <option value="Chittagong" >Chittagong</option>
                                    <option value="Cumilla" >Cumilla</option>
                                    <option value="Barisal" >Barisal</option>
                                    <option value="Jessore" >Jessore</option>
                                    <option value="Rajshahi" >Rajshahi</option>
                                    <option value="Sylhet" >Sylhet</option>
                                    <option value="Mymensingh" >Mymensingh</option>
                                    <option value="Dinajpur" >Dinajpur</option>
                                    <option value="Bangladesh Madrasah Education Board" >Bangladesh Madrasah Education Board</option>
                                    <option value="Bangladesh Technical Education Board" >Bangladesh Technical Education Board</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Priority<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="pritory" id="exampleInputuname4" placeholder="Priority to show your info">
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