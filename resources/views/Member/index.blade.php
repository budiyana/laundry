@extends('template')
@extends('p.script')
@section('content')
    
<a href="{{route('Member.create')}}" class="btn btn-primary ms-3">Registrasi Member</a>
                            <div class="my-3 p-3 bg-body rounded shadow-sm">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Nama</td>
                                            <td>Alamat</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Telepon</td>
                                            <td>aksi</td>        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Member as $e)
                                        <tr>
                                            <td>{{$e->id}}</td>
                                            <td>{{$e->nama}}</td>
                                            <td>{{$e->alamat}}</td>
                                            <td>{{$e->jenis_kelamin}}</td>
                                            <td>{{$e->tlp}}</td>
                                            <td>
                                                <a href="{{route('Member.edit',$e->id)}}" class="btn btn-primary">Edit</a>
                                                <form class="d-inline" action="{{route('Member.destroy',$e->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
 </div>
                    
@endsection

