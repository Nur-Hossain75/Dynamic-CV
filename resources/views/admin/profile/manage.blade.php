@extends('admin.master')

@section('title','Manage-Profile')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Profile Manage</h4>
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
                                    <th>Birth Date</th>
                                    <th>Present Address</th>
                                    <th>Permanent Address</th>
                                    <th>Nationality</th>
                                    <th>Gander</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$profile->name}}</td>
                                    <td>{{$profile->birth_date}}</td>
                                    <td>{{$profile->present_address}}</td>
                                    <td>{{$profile->permanent_address}}</td>
                                    <td>{{$profile->nationality}}</td>
                                    <td>{{$profile->gander}}</td>
                                    <td><img src="{{asset('/')}}{{$profile->image}}" alt="{{$profile->name}}" height="50px" width="80px"></td>
                                    <td>
                                        <a href="{{route('profile.detail', $profile->id)}}" class="btn btn-info btn-sm">
                                            <i class="ti-info-alt"></i>
                                        </a>
                                        <a href="{{route('profile.edit', $profile->id)}}" class="btn btn-success btn-sm">
                                            <i class="ti ti-palette"></i>
                                        </a>
                                        <a href="{{route('profile.delete', $profile->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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

