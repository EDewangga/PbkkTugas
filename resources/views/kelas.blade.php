@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-center text-primary">Daftar Siswa</h1>
			<div class="col-md-10">
				<div class="card">
						<table class="table table-sm table-striped">
								<thead>
									<tr>
										<th scope="col-md-4">NRP</th>
										<th scope="col-md-6">Nama</th>
										<th scope="col-md-2">Nilai</th>
									</tr>
								</thead>
								<tbody>
									<div class="card">
										@foreach($dataFrs as $frs)
										<tr>
											<th>{{$frs->dosen->kode}}</th>
											<th>{{$frs->dosen->name}}</th>
											<th>{{$frs->nilai}}</th>		
										<th><a href="{{url('/akademik/nilai/'.$frs->id.'/edit')}}" class="Button">Edit</a></tr>
									@endforeach
		
									</div>
								</tbody>
							</table>
				</div>
			</div>
		</div>
	</div>
@endsection