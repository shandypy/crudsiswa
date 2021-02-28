<!DOCTYPE html> 
<html>
<head>
	<title></title>
	 
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	<div class="container">
		<h1>Edit Data</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
		@endif
		<div class="row">
		<form action="/siswa/{{$siswa->id}}/update" method="POST">
{{csrf_field()}}

<div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
</div>

	<div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">

</div>

    <div class="form-group">
    <label form="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
    </select>
</div>
 
<div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
   </div>

<div class="form-group"> 
 <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea name="alamat" type="text" class="form-control" id="exampletextarea1" rows="3">{{$siswa->alamat}}</textarea> 

   </div>
<button type="submit" class="btn btn-warning">Update</button>
        </form>

      </div>
			</div>

</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>



