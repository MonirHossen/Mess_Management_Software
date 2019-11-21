<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\MessMember;
use App\User;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['members']    = MessMember::all();
        $data['deposits']    = Deposit::orderBy('id','desc')->paginate(10);
        return view('admin.deposit.index',$data);
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
        return view('admin.deposit.create',$data);
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
            'deposit_date'  => 'required',
            'amount'        => 'required',
        ]);
        Deposit::create($request->except('_token'));
        session()->flash('message','Deposit Successfully');
        return redirect()->route('deposit.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        $data['users']      = User::all();
        $data['members']    = MessMember::all();
        $data['deposit']    = $deposit;
        return view('admin.deposit.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        $request->validate([
            'user_id'       => 'required',
            'member_id'     => 'required',
            'deposit_date'  => 'required',
            'amount'        => 'required',
        ]);
        $deposit->update($request->except('_token'));
        session()->flash('message','Deposit Updated Successfully');
        return redirect()->route('deposit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit)
    {
        $deposit->delete();
        session()->flash('message','Deposit Deleted Successfully');
        return redirect()->back();
    }
}
