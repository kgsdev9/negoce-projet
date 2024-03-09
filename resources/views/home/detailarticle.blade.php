@extends('layouts.app')
@section('content')
<br><br><br><br>
<section class="pt-0">
	<div class="container ">
		<!-- Title -->
		<div class="inner-container-small text-center mb-4 mb-sm-6 mt-10">
			<h2 class="mb-2">{{$servicedetail->title}}</h2>
			<p class="mb-0">{{$servicedetail->description}}.</p>
		</div>

        <div class="text-center">
            <img src="{{asset('services/images/'. $servicedetail->image)}}" alt="">
        </div>


	</div>
</section>
@endsection
