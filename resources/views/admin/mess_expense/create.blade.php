@extends('layouts.admin.master')
@section('content')
    @include('layouts.admin._message')
    <div class="card">
        <div class="card-header">
            <strong>Add New Expense</strong>
                <a href="{{ route('mess_expense.index') }}" class="btn btn-info pull-right">List Of Expense</a>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('mess_expense.store') }}" method="post" class="form-horizontal">
                @csrf
                @include('admin.mess_expense._form')
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
