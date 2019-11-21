@extends('layouts.admin.master')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <div>
                       <a href="{{ route('deposit.create') }}" class="btn btn-info">Add New Deposit</a>
                   </div>
                    <br>
                    @include('layouts.admin._message')
                    <div class="table--no-card m-b-30">
                        <table class="table-responsive table table-striped table-earning">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Member Name</th>
                                        <th>Deposit Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            @foreach($deposits as $id=>$deposit)
                                <tbody>
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>
                                        @foreach($members as $member)
                                            @if($member->id == $deposit->member_id)
                                              {{ $member->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $deposit->deposit_date }}</td>
                                    <td>{{ $deposit->amount }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('deposit.edit',$deposit->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit "></i></a>
                                         <form action="{{ route('deposit.destroy',$deposit->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are You Sure Delete This Meal??')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="text-center">{{ $deposits->render() }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
