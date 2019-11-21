<?php

namespace App\Http\Controllers;

use App\Meal;
use App\MessMember;
use App\User;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['meals'] = Meal::orderBy('user_id','asc')->paginate(10);
        $data['members']  = MessMember::all();
        return view('admin.meal.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users']  = User::all();
        $data['members']  = MessMember::all();
        return view('admin.meal.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'   => 'required',
            'member_id'   => 'required',
            'meal_date' => 'required',
        ]);
        Meal::create($request->except('_token'));
        session()->flash('message','Meal Added Successfully');
        return redirect()->route('meal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        $data['users'] = User::all();
        $data['members'] = MessMember::all();
        $data['meal']   = $meal;
     return view('admin.meal.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'user_id'   => 'required',
            'member_id'   => 'required',
            'meal_date' => 'required',
        ]);

        $meal->update($request->except('_token'));
        session()->flash('message','Meal Updated Successfully');
        return redirect()->route('meal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
        session()->flash('message','Meal Deleted Successfully');
        return redirect()->route('meal.index');
    }
}
