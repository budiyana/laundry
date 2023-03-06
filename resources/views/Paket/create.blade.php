@extends('template')
@section('content')
 
<form action={{route('Paket.store')}} method="POST">
    @csrf
    <div  class="my-3 p-3 bg-body rounded shadow-sm"> 
        <h2 align="center">Tambah Paket</h2>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div class="col-sm-10">
            <input class="form-control" type="text" name="id" placeholder="masukan id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Jenis Paket </label>
                <div class="col-sm-10">
                    <select name="jenis" id="">
                        <option value="kiloan">Kiloan</option>
                        <option value="selimut">Selimut</option>
                        <option value="bed cover">Bed Cover</option>
                        <option value="kaos">Kaos</option>
                        <option value="lain"">Lain"</option>
                    </select>
                </div>
            </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nama Paket</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nama_paket"  placeholder="masukan nama paket"></input>
                </div>
            </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Harga </label>
                <div class="col-sm-10">
                    <input class="form-control"  type="text" name="harga" placeholder="maksukan harga">
                </div>
            </div>
            <div class="col-sm-10"><button class="btn btn-primary" type="submit" name="submit"> Save </button></div>
</form>

@endsection