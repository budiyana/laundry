<?php

namespace App\Http\Controllers;

use App\Models\paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        $Paket = paket::all();
        return view('Paket.index',compact(['Paket']));
    }

    public function create ()
    {
        return view('Paket.create');
    }
    public function store (Request $request)
    {
        paket::create($request->except(['_token','submit']));
        return redirect('/Paket');
    }

    public function edit($id){
        $Paket = paket::find($id);
        return view('Paket.edit',compact('Paket'));
    }

    public function update(Request $request,$id){
        $Paket = paket::find($id);
        $Paket->update($request->except('_token','submit'));
        return redirect('Paket');
    }

    public function destroy($id){
        $Paket = paket::find($id);
        $Paket->delete();
        return redirect('Paket');
    }

}
