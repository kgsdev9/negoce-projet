

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Tableau de Gestion
                </font></font><i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>



      <li class="nav-item">
        <a href="{{route('service.index')}}" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
          Annuaire services
           </i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('actualite.index')}}" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
          Annuaire actualités
           </i>

          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('projet.index')}}" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
          Annuaire Produits
           </i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="{{ route('logout') }}"

        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                          <i class="nav-icon fas fa-copy"></i>

                          <p>
                            Deconnexion
                              </i>
                             </p>
                        {{ __('Deconnexion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>



      </li>
    </ul>
  </nav>
