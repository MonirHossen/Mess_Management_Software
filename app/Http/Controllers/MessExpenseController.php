<?php

namespace App\Http\Controllers;

use App\MessExpense;
use App\MessMember;
use App\User;
use Illuminate\Http\Request;

class MessExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users']      = User::all();
        $data['members']    = MessMember::all();
        $data['mess_expense'] = MessExpense::orderBy('id','desc')->paginate(10);
        return view('admin.mess_expense.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users']      = User::all();
        $data['members']    = MessMember::all();
       return view('admin.mess_expense.create',$data);
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
            'user_id'       => 'required',
            'member_id'     => 'required',
            'expense_date'  => 'required',
            'amount'        => 'required',
        ]);

        MessExpense::create($request->except('_token'));
        session()->flash('message','Mess Expense Added Successfully');
        return redirect()->route('mess_expense.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MessExpense  $messExpense
     * @return \Illuminate\Http\Response
     */
    public function show(MessExpense $messExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MessExpense  $messExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(MessExpense $messExpense)
    {
        $data['users']      = User::all();
        $data['members']    = MessMember::all();
        $data['mess_expense']    = $messExpense;

        return view('admin.mess_expense.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MessExpense  $messExpense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MessExpense $messExpense)
    {
        $request->validate([
            'user_id'       => 'required',
            'member_id'     => 'required',
            'expense_date'  => 'required',
            'amount'        => 'required',
        ]);
        $messExpense->update($request->except('_token'));
        session()->flash('message','Mess Expense Updated Successfully');
        return redirect()->route('mess_expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MessExpense  $messExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessExpense $messExpense)
    {
       $messExpense->delete();
        session()->flash('message','Mess Expense Deleted Successfully');
        return redirect()->back();
    }
}
