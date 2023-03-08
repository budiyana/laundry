@extends('template')
@extends('p.script')
@section('content')
 
<div>
    <a href="{{route('Paket.create')}}" class="btn btn-primary ms-3">Tambah Paket</a>
</div>
<div  class="my-3 p-3 bg-body rounded shadow-sm"> 
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Jenis Paket</td>
                                            <td>Nama Paket</td>
                                            <td>Harga</td>       
                                            <td>Aksi</td>       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Paket as $q)
                                        <tr>
                                            <td>{{$q->id}}</td>
                                            <td>{{$q->jenis}}</td>
                                            <td>{{$q->nama_paket}}</td>
                                            <td>{{$q->harga}}</td>
                                            <td>
                                                <a href="{{route('Paket.edit',$q->id)}}"class="btn btn-primary">Edit</a>
                                                <form action="{{route('Paket.destroy',$q->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
 </div>
                    
@endsection

