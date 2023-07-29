@extends('admin.master')

@section('title','Manage-Reference')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reference Manage</h4>
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
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Institution</th>
                                    <th>Relation</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($references as $reference)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$reference->name}}</td>
                                    <td>{{$reference->designation}}</td>
                                    <td>{{$reference->email}}</td>
                                    <td>{{$reference->mobile}}</td>
                                    <td>{{$reference->institute}}</td>
                                    <td>{{$reference->relation}}</td>
                                    <td>{{$reference->pritory}}</td>
                                    <td>{{$reference->status}}</td>
                                    <td>
                                        <a href="{{route('edit.reference',$reference->id)}}" class="btn btn-success btn-sm">
                                            <i class="ti ti-palette"></i>
                                        </a>
                                        <a href="{{route('delete.reference',$reference->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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

