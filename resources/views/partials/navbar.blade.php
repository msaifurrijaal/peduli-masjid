<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #EEF2E6">
    <div class="container">
      <a class="navbar-brand" href="/">PeduliMasjid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav list-inline mx-auto justify-content-center">
          <li class="nav-item mx-4">
            <a class="nav-link" href="/about">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="/about">Contact</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="/posts">About us</a>
          </li> 
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
          </ul>
        </li>   
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <button type="button" style="background-color: #C5B673" class="btn py-1">Login</button>
            </a>
          </li>
          @endauth
        </ul>
        
      </div>
    </div>
  </nav>