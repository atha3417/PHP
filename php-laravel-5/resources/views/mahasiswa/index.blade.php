@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-3">Daftar Mahasiswa</h1>
			<table class="table table-hover table-striped">
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">NRP</th>
						<th scope="col">Email</th>
						<th scope="col">Jurusan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mahasiswa as $mhs)
						<tr class="text-center">
							<th scope="row"> {{ $loop->iteration }} </th>
							<th scope="row"> {{ $mhs->nama }} </th>
							<th scope="row"> {{ $mhs->nrp }} </th>
							<th scope="row"> {{ $mhs->email }} </th>
							<th scope="row"> {{ $mhs->jurusan }} </th>
							<th scope="row">
								<a href="" class="badge badge-pill badge-success">edit</a>
								<a href="" class="badge badge-pill badge-danger">delete</a>
							</th>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection