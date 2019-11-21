<?php

namespace App\Http\Controllers;

use App\MessMember;
use App\User;
use Illuminate\Http\Request;

class MessMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mess_members']  = MessMember::orderBy('id','asc')->paginate(3);
        return view('admin.member.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.member.create');
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
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required',
            'image'     => 'mimes:jpeg,jpg,png|max:2048',
        ]);

        $data   = $request->except(['_token','image',]);

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'members/images/';
            $file_name = time().rand('00000','99999').'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path.$file_name;
        }

        MessMember::create($data);

        session()->flash('message','Member Created Successfully');
        return redirect()->route('mess_member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MessMember  $messMember
     * @return \Illuminate\Http\Response
     */
    public function show(MessMember $messMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MessMember  $messMember
     * @return \Illuminate\Http\Response
     */
    public function edit(MessMember $messMember)
    {
        $data['mess_member']    = $messMember;
        return view('admin.member.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MessMember  $messMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MessMember $messMember)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'image'     => 'mimes:jpeg,jpg,png|max:2048',
        ]);

        $data   = $request->except(['_token','image',]);

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'members/images/';
            $file_name = time().rand('00000','99999').'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path.$file_name;
            if ($messMember->image !=null && file_exists($messMember->image))
            {
                unlink($messMember->image);
            }
        }

        $messMember->update($data);

        session()->flash('message','Member Updated Successfully');
        return redirect()->route('mess_member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MessMember  $messMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessMember $messMember)
    {
        if ($messMember->image != null && file_exists($messMember->image))
        {
            unlink($messMember->image);
        }
        $messMember->delete();

        session()->flash('message','Member Deleted Successfully');
        return redirect()->route('mess_member.index');
    }
}
