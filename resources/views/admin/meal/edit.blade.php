@extends('layouts.admin.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Meals</strong>
                <a href="{{ route('meal.index') }}" class="btn btn-info pull-right">List Of Meals</a>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('meal.update',$meal->id) }}" method="post"  class="form-horizontal">
                @csrf
                @method('put')
                @include('admin.meal._form')
                <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-12 col-md-9">
                        <button type="submit" class="btn btn-primary btn-md">
                            <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
