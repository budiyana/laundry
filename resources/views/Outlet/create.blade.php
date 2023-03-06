@extends('template')
@section('content')
 
<form action={{route('Outlet.store')}} method="POST">
    @csrf
    <div  class="my-3 p-3 bg-body rounded shadow-sm"> 
        <h2 align="center">Create Outlet</h2>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div class="col-sm-10">
            <input class="form-control" type="text" name="id" placeholder="masukan id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nama </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nama" placeholder="masukan nama">
                </div>
            </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Alamat </label>
                <div class="col-sm-10">
                    <textarea class="form-control"  name="alamat" rows="10" placeholder="masukan alamat"></textarea>
                </div>
            </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Telepon </label>
                <div class="col-sm-10">
                    <input class="form-control"  type="text" name="tlp" placeholder="maksukan telepon">
                </div>
            </div>
            <div class="col-sm-10"><button class="btn btn-primary" type="submit" name="submit"> Save </button></div>
</form>

@endsection