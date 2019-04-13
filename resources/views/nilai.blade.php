@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="text-center">
						<h1 class="text-primary">Kelas</h1><br>
				</div>
				<div class="card">
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th scope="col-md-1">Kode</th>
								<th scope="col-md-4">Matkul</th>
								<th scope="col-md-1">Sks</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataFrs as $frs)
							<tr>
							<th><a href="{{ @url('akademik/nilai/'.$frs->id)}}">{{$frs->matkul->kode}}</a></th>
							<th>{{$frs->matkul->nama}}</th>
							<th>3</th>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection