@extends('layouts.app')

@section('style')
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="text-center">
			<h1 class="text-primary">FRS</h1><br>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col">
							@if(Auth::user()->role==1)
							<h6> Nama : {{$user->name}}</h6>
							<h6> NRP : {{$user->kode}}</h6>
							@else 
							<h6> Nama : {{Auth::user()->name}}</h6>
							<h6> NRP : {{Auth::user()->name}}</h6>
							@endif
						</div>
						<div class="col">
						@if (Auth::user()->role==1)
						<h6> Dosen Wali : {{Auth::user()->name}}</h6>
						@else
						<h6>Dosen Wali : {{$user->name}}</h6>
						@endif
								<h6> SKS : 24</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row justify-content-center mt-3">
		<div class="col-md-8">
			<div class="card">			
				<div class="card-body">
						@if (\Session::has('success'))
						<div class="alert alert-success">
								<ul>
										<li>{!! \Session::get('success') !!}</li>
								</ul>
						</div>
					@endif
				
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th scope="col-md-1">Kode</th>
								<th scope="col-md-4">Matkul</th>
								<th scope="col-md-4">Dosen</th>
								<th scope="col-md-1">Sks</th>
								<th scope="col-md-1">Nilai</th>
							</tr>
						</thead>
						<tbody>
							<div class="card">
								@foreach($dataFrs as $frs)
								<tr>
									<th>{{$frs->matkul->kode}}</th>
									<th>{{$frs->matkul->nama}}</th>
									<th>{{$frs->dosen->name}}</th>
									<th>3</th>
									<th>{{$frs->nilai}}</th>
									<th>
										<form action="{{url('/akademik/frs')}}" method="POST">
											@method('DELETE')
										<input type="hidden" value="{{$frs->id}}" name="id">
											<input class="btn btn-danger" type="submit" value="delete">
											@csrf
										</form>
									</th>
								</tr>
							@endforeach
							</div>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<div>
					<form action="{{url('/akademik/frs')}}"method="post">
							@csrf
							<div class="form-row">
								<div class="form-group col-md-10">
									<select id="inputState" class="form-control" name="matkul">
										@foreach ($matkul as $n)
										<option value="{{$n->id}}">{{$n->matkul->nama}} | {{$n->dosen->name}}</option>
												
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Ambil</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-4 text-center pt-8">
			<form action="{{url('/akademik/frs')}}" method="post">
				<input class="btn-lg btn-success" type="submit" value="ACC">
				<input type="hidden" value="_method" value="PUT">
				@csrf
			</form>

		</div>
	</div>
</div>


@endsection