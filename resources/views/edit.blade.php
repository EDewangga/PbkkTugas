@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<h1 class="text-primary text-center">Edit Nilai</h1>
							<form action="{{url('/akademik/nilai/'.$dataFrs->id)}}" method="post">
										<input type="text" name="nilai" value="{{$dataFrs->nilai}}">
										<input class="btn-primary" type="submit" name="submit" value="edit">
										@csrf
										<input type="hidden" name="_method" value="post">
								</form>
				</div>
			</div>
		</div>
@endsection