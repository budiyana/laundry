@extends('template')
@section('content')
    


<form action={{route('Paket.update',$Paket->id)}} method="POST">
    @csrf
    @method('put')
    <div  class="my-3 p-3 bg-body rounded shadow-sm"> 
        <h2 align="center">Edit Paket</h2>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id </label>
            <div class="col-sm-10">
            <input type="text" name="id" placeholder="masukan id" value="{{$Paket->id}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Jenis Paket </label>
            <div class="col-sm-10">
                <select name="jenis" id="">
                    <option value="kiloan" @if ($Paket->jenis == "kiloan")
                        selected
                    @endif>Kiloan</option>
                    <option value="selimut" @if ($Paket->jenis == "selimut")
                        selected
                    @endif>Selimut</option>
                    <option value="bed_cover" @if ($Paket->jenis == "bed_cover")
                        selected
                    @endif>Bed Cover</option>
                    <option value="kaos" @if ($Paket->jenis == "kaos")
                        selected
                    @endif>Kaos</option>
                    <option value='lain"' @if ($Paket->jenis == 'lain"')
                        selected
                    @endif>Lain"</option>   
                </select>   
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-10">
                <input type="text" name="nama_paket" placeholder="masukan nama paket" value="{{$Paket->nama_paket}}">
            </div>
        </div>
        
       <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Harga </label>
            <div class="col-sm-10">
             <input type="text" name="harga" placeholder="maksukan harga" value="{{$Paket->harga}}">
            </div>
        </div>
           <div class="col-sm-10"><button class="btn btn-primary" type="submit" name="submit"> Save </button></div>
    
</form>
@endsection