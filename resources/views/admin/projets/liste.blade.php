@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des Projets </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">accueil</a></li>
            <li class="breadcrumb-item active">Projets</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Liste des projets </h3>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-dark" href="{{route('projet.create')}}">Enregistrer</a>
                    </div>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
                <div class="dt-buttons btn-group flex-wrap">
                       </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                       <div class="col-sm-12">

                <table id="example" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                <thead>
                <tr>
                  <th class="sorting sorting_asc">Designation</th>
                  <th class="sorting">Description</th>
                  <th class="sorting">Image</th>
                  <th class="sorting">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($allProjets as  $value)
                <tr class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">{{ $value->title }}</td>
                  <td>{{ $value->description }}</td>

                  <td>
                    <img src="{{asset('projets/images/'.$value->image)}}" style="height:100px;" alt="">
                </td>
                  <td>
                  <a href="{{ route('projet.edit', $value->id)}}" class="btn btn-primary"> Editer</a>
                  <a href="{{ route('projet.destroy', $value->id)}}" class="btn btn-danger"> Supprimer</a>

                  </td>
                </tr>
                @endforeach
               </tbody>
              </table>
            </div>
          </div>
        </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection
