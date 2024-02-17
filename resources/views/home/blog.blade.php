@extends('layout.app')
@section('content')
<!--Our articles start-->
<section class="py-5 py-lg-8">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3 col-12">
                     <div class="text-center">
                        <h1 class="mb-3">Nos Actualités</h1>

                     </div>
                  </div>
               </div>
            </div>
         </section>
<!--Our articles end-->

<section class="mb-xl-9 my-4">
    <div class="container">

       <div class="row gy-lg-7 gy-5">
         @foreach ($allActualites as $service)
         <article class="col-lg-4 col-md-6 col-12">
            <figure class="mb-4 zoom-img">
               <a href="#">
                  <img src="{{asset('actualites/images/'.$service->image)}}" alt="blog" class="img-fluid rounded-3">
               </a>
            </figure>
            <h3 class="my-3 lh-base h4">
               <a href="#" class="text-reset">{{$service->title}}</a>
            </h3>
            <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                <p>{{Str::limit($service->description,100)}}</p>

            </div>
         </article>
         @endforeach
       </div>
    </div>
 </section>
@endsection
