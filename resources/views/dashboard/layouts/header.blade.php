<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="">Pendaftaran Dokter Hewan</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle Navigation"> 
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="nav-link px-3 bg-dark border-0">Logout</i></a></li>
                </button>
              </form>  
      </div>
  </header>
    