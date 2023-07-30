@extends('admin.master')

@section('title','Manage-Education')

@section('body')
@if(!empty($profile))
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Education Information Manage</h4>
                    <hr/>
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Certificate Title</th>
                                    <th>Certificate Description</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$certificate->name}}</td>
                                    <td>{{$certificate->description}}</td>
                                    <td>{{$certificate->pritory}}</td>
                                    <td>{{$certificate->status}}</td>
                                    <td>
                                        <a href="{{route('edit.certificate',$certificate->id)}}" class="btn btn-success btn-sm">
                                            <i class="ti ti-palette"></i>
                                        </a>
                                        <a href="{{route('delete.certificate',$certificate->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="ti ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <h1 class="text-center p-5 bg-warning mt-5">You haven't created any profile yet!!!</h1>
@endif
@endsection

