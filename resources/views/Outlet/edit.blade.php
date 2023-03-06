@extends('template')
@section('content')
    


<form action={{route('Outlet.update',$Outlet->id)}} method="POST">
    @csrf
    @method('put')
    <div  class="my-3 p-3 bg-body rounded shadow-sm"> 
        <h2 align="center">Update Outlet</h2>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div class="col-sm-10">
            <input type="text" name="id" placeholder="masukan id" value="{{$Outlet->id}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-10">
             <input type="text" name="nama" placeholder="masukan nama" value="{{$Outlet->nama}}">
            </div>
            </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Alamat </label>
            <div class="col-sm-10">
             <textarea name="alamat" rows="10" placeholder="masukan alamat">{{$Outlet->alamat}}</textarea><br>
            </div>
            </div>
       <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Telepon </label>
            <div class="col-sm-10">
             <input type="text" name="tlp" placeholder="maksukan telepon" value="{{$Outlet->tlp}}"><br>
            </div>
            </div>
           <div class="col-sm-10"><button class="btn btn-primary" type="submit" name="submit"> Save </button></div>
    
</form>
@endsection