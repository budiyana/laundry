<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Outlett;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index(){
        $Outlet = Outlett::all();
        return view('Outlet.index',compact(['Outlet']));
    }

    public function create ()
    {
        return view('Outlet.create');
    }
    public function store (Request $request)
    {
        Outlett::create($request->except(['_token','submit']));
        return redirect('/Outlet');
    }

    public function edit($id){
        $Outlet = Outlett::find($id);
        return view('Outlet.edit',compact('Outlet'));
    }

    public function update(Request $request,$id){
        $Outlet = Outlett::find($id);
        $Outlet->update($request->except('_token','submit'));
        return redirect('Outlet');
    }

    public function destroy($id){
        $Outlet = Outlett::find($id);
        $Outlet->delete();
        return redirect('Outlet');
    }
}
