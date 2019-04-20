@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h1 class="text-primary text-center">Edit Nilai</h1>
						<div class="card">
							<div class="card-body">
								<form action="{{url('/akademik/nilai/'.$dataFrs->id)}}" method="post">
									<div class="row justify-content-start">
										<div class="col">
											<h5>1. Nilai Tugas :</h5>
										</div>
										<div class="col">
											<input type="text" name="tugas" value="">
										</div>
									</div> <br>
									<div class="row justify-content-start">
										<div class="col">
											<h5>2. Nilai Quis :</h5>
										</div>
										<div class="col">
											<input type="text" name="quis" value="">
										</div>
									</div> <br>
									<div class="row justify-content-start">
										<div class="col">
											<h5>3. Nilai UTS :</h5>
										</div>
										<div class="col">
											<input type="text" name="uts" value="">
										</div>
									</div> <br>
									<div class="row justify-content-start">
										<div class="col">
											<h5>4. Nilai UAS :</h5>
										</div>
										<div class="col">
											<input type="text" name="uas" value="">
										</div>
									</div> <br> <br>
	
								<div class="row justify-content-center">
									<input class="btn-lg btn-primary" type="submit" name="submit" value="edit">
										@csrf
										<input type="hidden" name="_method" value="post">
								</div>
									</form>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
@endsection