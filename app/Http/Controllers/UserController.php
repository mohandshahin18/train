<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if($request->wantsJson()){
        //     return Datatables::of(User::query())->make(true);
        // }else
        // {
        // }
        return view('controlPanle.users.index');
    }

    public function getDataTableData()
    {

        $users = User::select('*');
        return Datatables::of($users)
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->back()->with('msg','Deleted Successfully');
    }
}
