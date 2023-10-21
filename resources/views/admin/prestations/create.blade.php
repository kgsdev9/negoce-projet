@extends('admin.layout')

@section('admin')
<div class="content-wrapper" style="min-height: 2080.12px;">

  <div class="content">


    <div class="card mb-4">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0">Nouvelle Prestation  </h3>
      </div>
      <!-- Card body -->
        <form action="{{route('prestation.store')}}" method="post" enctype="multipart/form-data">
            @csrf

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Nom de la préstration  </label>
              <input type="text" class="form-control" name="title" id="example3cols1Input" placeholder="Nom de la prestation" value="{{ old('title') }}">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input"> Catégorie de  la prestation  </label>
              <input type="text" class="form-control" name="categorie" id="example3cols1Input" placeholder="Nom de la categorie" value="{{ old('categorie') }}">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input">Image de la presation </label>
              <input type="file" class="form-control" name="image" id="example3cols1Input" placeholder="Nom de la categorie">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
                @error('name')
                <small>{{$message}}</small>

                @enderror
              <label class="form-control-label" for="example3cols1Input"> Description de la prestation  </label>
           <textarea name="description" id="summernote"  cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button class="btn btn-primary">Enregister La prestation </button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>


  </div>

@endsection
