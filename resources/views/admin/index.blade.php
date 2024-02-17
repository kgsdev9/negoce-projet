 @extends('admin.layout')
 @section('admin')
 <div class="content-wrapper bg-white">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Statistique NEGOCE </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Statistique</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Total Projets</h3>
              <p>Nombre total de projet </p>
            </div>
            <a href="#" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Total Utilisateurs</h3>
                <p>Nombre total d'utilisateur </p>
              </div>
              <a href="#" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Total Service</h3>
                <p>Nombre total de services </p>
              </div>
              <a href="#" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Total Actualités</h3>
                <p>Nombre total d'actualité </p>
              </div>
              <a href="#" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>
 @endsection
