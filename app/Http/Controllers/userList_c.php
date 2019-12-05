<?php

namespace App\Http\Controllers;

use App\userList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userList_c extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.userList',["data"=>userList::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userlist = new userList;

        $userlist->user_name = $request->name;
        $userlist->email = $request->email;
        $userlist->password = Hash::make($request->password);

        $userlist->save();

        return redirect()->route('userList.index')->with('success','Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function show(userList $userList)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function edit(userList $userList)
    {
        dd($userList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userList $userList)
    {
        dd($userList);
        return;
        $userList->user_name = $request->name;
        $userList->email = $request->email;
        $userList->password = Hash::make($request->password);
        $userList->save();

        return redirect()->route('userList.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function destroy(userList $userList)
    {
        dd($userList);
        return;
        $userList->delete();
        // return view('layouts.userList',["data"=>userList::all()]);
        return redirect()->route('userList.index')->with('success','Deleted Successfully');
    }
}
