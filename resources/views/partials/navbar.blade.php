<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PPDB SMA Budi Utomo Depok</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{($title === 'home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'about') ? 'active' : ''}}" href="/about">Tentang Kami</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto" id="navbarNavDropdown">
      @auth
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hai, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-journal-text"></i>Dashboard</a></li>
            <li><a class="dropdown-item" href=""><i class="bi bi-person-fill"></i>Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf 
                <button type="submit" class="dropdown-item" >
                <i class="bi bi-box-arrow-right"></i>Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      @else
        <li class="nav-item">
        <a href="/login" class="nav-link {{($title === 'Login') ? 'active' : ''}}"><i class="bi bi-box-arrow-right"></i>
        Login</a>
        </li>
        @endauth
      </ul>
      </div>
    </div>
  </nav>
</header>






