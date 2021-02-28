<!DOCTYPE html> 
<html>
<head>
	<title></title>
	 
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>DATA SISWA</h1>
			</div>
			
			
							<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data Siswa
</button>



<table class="table table-hover">
	<tr>
		<td>NAMA DEPAN</td>
		<td>NAMA BELAKANG</td>
		<td>JENIS KELAMIN</td>
		<td>AGAMA</td>
		<td>ALAMAT</td>
		<td>Action</td>
	</tr>
	@foreach($data_siswa as $siswa)
	<tr>
		<td>{{$siswa->nama_depan}}</td>
		<td>{{$siswa->nama_belakang}}</td>
		<td>{{$siswa->jenis_kelamin}}</td>
		<td>{{$siswa->agama}}</td>
		<td>{{$siswa->alamat}}</td>
		<td>
			<a href="/siswa/{{$siswa->id}}/edit" div class="btn btn-secondary btn-sm">Edit
			<a href="/siswa/{{$siswa->id}}/delete" div class="btn btn-danger btn-sm">Delete
			</td>
	</tr>
	@endforeach

</table>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
<form action="/siswa/create" method="POST">
{{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">

    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">

    <div class="form-group">
    <label form="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
    </select>
  </div>

  <label for="exampleInputEmail1" class="form-label">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
 
 <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea name="alamat" type="text" class="form-control" id="exampletextarea1" rows="3"></textarea> 

  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>



