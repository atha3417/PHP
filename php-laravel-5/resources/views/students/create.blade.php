@extends('layout.main')
@section('title', 'Form Tambah Data Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
			<form action="/students" method="post">
				@csrf
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama..." value="{{ old('nama') }}">
					@error('nama')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="nrp">Nrp</label>
					<input type="text" name="nrp" id="nrp" class="form-control @error('nrp') is-invalid @enderror" placeholder="Masukkan Nrp..." value="{{ old('nrp') }}">
					@error('nrp')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email..." value="{{ old('email') }}">
					@error('email')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Masukkan Jurusan..." value="{{ old('jurusan') }}">
					@error('jurusan')
						<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection