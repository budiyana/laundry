@extends('template')
@extends('p.script')
@section('content')
 
<div>
    <a href="{{route('Outlet.create')}}" class="btn btn-primary ms-3">Tambah Outllet</a>
</div>
<div  class="my-3 p-3 bg-body rounded shadow-sm"> 
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Nama</td>
                                            <td>Alamat</td>
                                            <td>Telepon</td>
                                            <td>Aksi</td>        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Outlet as $w)
                                        <tr>
                                            <td>{{$w->id}}</td>
                                            <td>{{$w->nama}}</td>
                                            <td>{{$w->alamat}}</td>
                                            <td>{{$w->tlp}}</td>
                                            <td>
                                                <a href="{{route('Outlet.edit',$w->id)}}" class="btn btn-primary">Edit</a>
                                                <form action="{{route('Outlet.destroy',$w->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus?')"">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
 </div>
                    
@endsection

