@extends('admin.master')

@section('title','Manage-Skill-Category')

@section('body')
@if(!empty($profile))
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Skill Category Manage</h4>
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
                                    <th>Category Name</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($skill_categorise as $skill_category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$skill_category->category_name}}</td>
                                    <td>{{$skill_category->pritory}}</td>
                                    <td>{{$skill_category->status}}</td>
                                    <td>
                                        <a href="{{route('edit.skill_category',$skill_category->id)}}" class="btn btn-success btn-sm">
                                            <i class="ti ti-palette"></i>
                                        </a>
                                        <a href="{{route('delete.skill_category',$skill_category->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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

