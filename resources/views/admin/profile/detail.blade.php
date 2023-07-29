@extends('admin.master')

@section('title','Profile-Details')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Profile Details</h4>
                    <hr/>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            
                            <tr>
                                <th>Nid No</th>
                                <td>{{$profile->nid}}</td>
                            </tr>
                            <tr>
                                <th>Nid Status</th>
                                <td>{{$profile->nid_status}}</td>
                            </tr>
                            <tr>
                                <th>Father Name</th>
                                <td>{{$profile->father_name}}</td>
                            </tr>
                            <tr>
                                <th>Mother Name</th>
                                <td>{{$profile->mother_name}}</td>
                            </tr>
                            <tr>
                                <th>Aspiration</th>
                                <td>{{$profile->aspiration}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

