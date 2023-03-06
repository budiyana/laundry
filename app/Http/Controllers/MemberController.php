<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $Member = Members::all();
        return view('Member.index',compact(['Member']));
}

public function create ()
    {
        return view('Member.create');
    }
    public function store (Request $request)
    {
        Members::create($request->except(['_token','submit']));
        return redirect('/Member');
    }

    public function edit($id){
        $Member = Members::find($id);
        return view('Member.edit',compact('Member'));
    }

    public function update(Request $request,$id){
        $Member = Members::find($id);
        $Member->update($request->except('_token','submit'));
        return redirect('Member');
    }

    public function destroy($id){
        $Member = Members::find($id);
        $Member->delete();
        return redirect('Member');
    }
}