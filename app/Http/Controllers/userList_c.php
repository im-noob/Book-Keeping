<?php

namespace App\Http\Controllers;

use App\userList;
use Illuminate\Http\Request;

class userList_c extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "index";
        return view('layouts.userList',["data"=>userList::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function show(userList $userList)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function edit(userList $userList)
    {
        echo "edit";
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
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userList  $userList
     * @return \Illuminate\Http\Response
     */
    public function destroy(userList $userList)
    {
        echo "distory";
        $userList->delete();
        // return view('layouts.userList',["data"=>userList::all()]);
        return redirect()->route('userList.index')->with('success','Deleted Successfully');
    }
}
