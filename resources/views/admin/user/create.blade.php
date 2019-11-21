@extends('layouts.admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Add New Admin User</strong>
                <a href="{{ route('user.index') }}" class="btn btn-info pull-right">List Of Admins</a>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @include('admin.user._form')
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
