<!DOCTYPE html>
<html>
<head>
<style>
  body{
    background-color:#646060;
    margin:0px;
    padding:10px;
}
h1 {
  color: blanchedalmond;
}
 .select {
  text-align: justify;
 }
</style>
</head>
<body>

  <h1>Tambah Member</h1>
  <form action={{route('Member.store')}} method="POST">
      @csrf
      <input type="text" name="id" placeholder="masukan id"><br>
      <input type="text" name="nama" placeholder="masukan nama"><br>
      <textarea name="alamat" rows="10" placeholder="masukan alamat"></textarea><br>
      <select class="form-select" aria-label="Default select example">
          <option selected>Pilih Jenis Kelamin</option>
          <option value="1">L</option>
          <option value="2">P</option>
        </select><br>
      <input type="text" name="tlp" placeholder="maksukan telepon"><br>
      <input type="submit" name="submit" value="Save">
  
      
  </class=form>

</body>
</html>

