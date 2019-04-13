@extends('layouts.app')

@section('style')
  <style>
      .section {
        text-align: center;
        margin-top: 100px;
      }

      .section .fa {
        font-size: 100px;
      }

      .section a {
        text-decoration: none;
      }

    </style>
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="section"> 
					<a href="{{@url('/akademik/frs')}}">
            <div class="card shadow p-3 mb-5 bg-white rounded ">
              <div class="card-body">
              <h1><i class="fa fa-university" aria-hidden="true"></i></h1>
               <p>Perwalian</p>
              </div>
            </div>
					 </a>
					 @if (Auth::check() && Auth::user()->role == 1)
					<a href="{{@url('/akademik/nilai')}}">
            <div class="card shadow p-3 mb-5 bg-white rounded ">
              <div class="card-body">
              <h1><i class="fa fa-university" aria-hidden="true"></i></h1>
               <p>Nilai</p>
              </div>
            </div>
            </div>
					 </a>
					@endif
      		</div>
			</div>			
    </div>
  </div>

@endsection

@section('script')
@endsection  