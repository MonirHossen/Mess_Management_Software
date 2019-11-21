@extends('layouts.admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add New Members</strong>
                <a href="{{ route('mess_member.index') }}" class="btn btn-info pull-right">List Of Members</a>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('mess_member.update',$mess_member->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('put')
                @include('admin.member._form')
                <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-12 col-md-9">
                        <button type="submit" class="btn btn-primary btn-md">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
