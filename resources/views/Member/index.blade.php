@extends('template')
@section('content')
    
<a href="{{route('Member.create')}}">Add Member</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Nama</td>
                                            <td>Alamat</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Telepon</td>
                                            <td>aksi</td>        
                                        </tr>
                                        @foreach ($Member as $e)
                                        <tr>
                                            <td>{{$e->id}}</td>
                                            <td>{{$e->nama}}</td>
                                            <td>{{$e->alamat}}</td>
                                            <td>{{$e->jenis_kelamin}}</td>
                                            <td>{{$e->tlp}}</td>
                                            <td>
                                                <a href="{{route('Member.edit',$e->id)}}" class="btn btn-primary">Edit</a>
                                                <form onsubmit="return confirm('kontol?')" class="d-inline" action="{{route('Member.destroy',$e->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
@endsection

