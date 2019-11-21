@extends('layouts.admin.master')

@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <div>
                       <a href="{{ route('meal.create') }}" class="btn btn-info">Add New Meals</a>
                   </div>
                    <br>
                    @include('layouts.admin._message')
                    <div class="table--no-card m-b-30">
                        <table class="table-responsive table table-striped table-earning">

                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Break Fast</th>
                                    <th>Launch</th>
                                    <th>Dinner</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            @foreach($meals as $id=>$meal)
                                <tbody>
                                <tr>
                                    <td>
                                        @foreach($members as $member)
                                            @if($member->id == $meal->member_id)
                                              {{ $member->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $meal->break_fast }}</td>
                                    <td>{{ $meal->launch }}</td>
                                    <td>{{ $meal->dinner }}</td>
                                    <td>{{ $meal->meal_date }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('meal.edit',$meal->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit "></i></a>
                                         <form action="{{ route('meal.destroy',$meal->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are You Sure Delete This Meal??')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div class="text-center">{{ $meals->render() }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
