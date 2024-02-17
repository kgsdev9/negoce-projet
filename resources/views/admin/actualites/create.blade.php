@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">

  <div class="content">


    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouveau projet </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('actualite.store')}}" method="post" enctype="multipart/form-data">
         @csrf
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom du projet </label>
              <input type="text" class="form-control" name="title"  placeholder="Titre" value="{{ old('title') }}">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input"> Image du service </label>
              <input type="file" class="form-control" name="image" >
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input">Description du projet </label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister le service</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
