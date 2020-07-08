@extends('layout.main')
@section('title', 'Detail Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h1 class="mt-3">Detail Mahasiswa</h1>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"> {{ $student->nama }} </h5>
					<h6 class="card-subtitle mb-2 text-muted"> {{ $student->nrp }} </h6>
					<p class="card-text"> {{ $student->email }} </p>
					<p class="card-text"> {{ $student->jurusan }} </p>
					<a href="/students" class="card-link btn btn-info">Kembali</a>
					<a href="/students/{{ $student->id }}/edit" class="btn btn-success">ubah</a>
					<form action="{{ $student->id }}" method="post" class="d-inline">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Mahasiswa Ini ?')">delete</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection