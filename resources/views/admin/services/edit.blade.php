@extends('admin.layout')
@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">
  <div class="content">
    <div class="card mb-4">
      <div class="card-header">
        <h3 class="mb-0">Edition service </h3>
      </div>
        <form action="{{route('service.update', $ressource->id)}}" method="post" enctype="multipart/form-data">
         @csrf
         @method('PATCH')
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom du service </label>
              <input type="text" class="form-control" name="title"  placeholder="Titre du service" value="{{$ressource->title}}">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input"> Image du service </label>
              <input type="file" class="form-control" name="image"  value="{{ old('image') }}">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>
                @enderror
              <label class="form-control-label" for="example3cols1Input">Description du service </label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$ressource->description}}</textarea>
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
