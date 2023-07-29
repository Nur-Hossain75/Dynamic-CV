@extends('admin.master')

@section('title','Manage-Education')

@section('body')
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
                                    <th>Programm Titel</th>
                                    <th>Institute Name</th>
                                    <th>Passing Year</th>
                                    <th>CGPA</th>
                                    <th>Group</th>
                                    <th>Board</th>
                                    <th>pritory</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($educationes as $education)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$education->name}}</td>
                                    <td>{{$education->i_name}}</td>
                                    <td>{{$education->p_year}}</td>
                                    <td>{{$education->cgpa}}</td>
                                    <td>{{$education->group}}</td>
                                    <td>{{$education->board}}</td>
                                    <td>{{$education->pritory}}</td>
                                    <td>
                                        <a href="{{route('edit.edu_info',$education->id)}}" class="btn btn-success btn-sm">
                                            <i class="ti ti-palette"></i>
                                        </a>
                                        <a href="{{route('delete.edu_info',$education->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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
@endsection

