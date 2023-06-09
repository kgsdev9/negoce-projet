@extends('admin.layout')

@section('admin')

<div class="content-wrapper" style="min-height: 2080.12px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des Services </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">accueil</a></li>
            <li class="breadcrumb-item active">Catégories</li>
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
              <h3 class="card-title">Liste des catégories emploi </h3>
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
                  <th class="sorting">Popularité</th>
                  <th class="sorting">Status</th>
                  <th class="sorting">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categoryJobRessource as  $value)
                    
                 
                <tr class="odd">
                  <td class="dtr-control sorting_1" tabindex="0">{{ $value->name }}</td>
                  <td>{{ $value->description }}</td>

                  <td>
                    @if($value->popular == 1)
                    <span class="badge bg-success">publié</span>
                 
                  @elseif($value->popular == 0)
                  <span class="badge bg-warning">En attante</span>
                  @endif
                </td>
                  <td>
                    @if($value->publish_at == 1)
                    <span class="badge bg-success">publié</span>
                 
                  @elseif($value->publish_at == 0)
                  <span class="badge bg-warning">En attante</span>
                  @endif
                </td>

                  <td>
                  <a href="{{ route('categoryjob.edit', $value->id)}}" class="text-dark"> <i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="{{ route('category.destroy', $value->id)}}" class="text-dark"> <i class="fa-solid fa-trash-can"></i></a>
                  
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
