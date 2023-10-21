@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des prestations </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">accueil</a></li>
            <li class="breadcrumb-item active">Prestations</li>
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
                <div class="col-md-8">
                  <h3 class="card-title">Liste des prestations </h3>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('prestation.create') }}" class="btn btn-primary">Nouvelle Prestation </a>
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
                  <th class="sorting sorting_asc"  aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Designation</th>
                  <th class="sorting">Description</th>
                  <th class="sorting">Photo</th>
                  <th class="sorting">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($ressource as  $value)


                <tr class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">{{ $value->title }}</td>
                  <td>{{ $value->description }}</td>


                  <td>

                     <img src="{{   asset('prestations/'.$value->image) }}" alt="" style="height:100px;width:130px;">
                </td>

                  <td>
                  <a href="{{ route('prestation.destroy', $value->id)}}" class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i>Editer</a>
                    <form action="{{route('prestation.destroy', $value->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer')"> Supprimer</button>
                    </form>

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
