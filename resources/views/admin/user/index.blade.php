@extends('layouts.admin.master')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <div>
                       <a href="{{ route('user.create') }}" class="btn btn-info">Add New Member</a>
                   </div>
                    <br>
                    @include('layouts.admin._message')
                    <div class="table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">

                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-right">Image</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                            @foreach($users as $id=>$user)
                                <tbody>
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-right"><img src="{{ asset($user->image) }}" width="100%" alt=""></td>
                                    <td class="text-right">
                                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit "></i></a>
                                        <form action="{{ route('user.destroy',$user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are You Sure Delete This User??')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="text-center">{{ $users->render() }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
