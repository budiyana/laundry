<h1>Update Member</h1> 
<form action={{route('Member.update',$Member->id)}} method="POST">
    @csrf
    @method('put')
    <input type="text" name="nama" placeholder="masukan nama" value="{{$Member->nama}}"><br>
    <textarea name="alamat" rows="10" placeholder="masukan alamat">{{$Member->alamat}}</textarea><br>
    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="1">L</option>
        <option value="2">P</option>
      </select><br>
    <input type="text" name="tlp" placeholder="maksukan telepon" value="{{$Member->tlp}}"><br>
    <input type="submit" name="submit" value="Save">
</form>
