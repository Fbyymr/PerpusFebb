<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Perpustakhaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Koleksi" ? 'active' : '') }}" href="/koleksi">Koleksi</a>
          </li>
        </ul>
        @auth
        
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back! {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="fa-solid fa-power-off" style="color: #404040;"></i> Log Out</button>
              </form>
              </li>
          </ul>
        </li>
        @else
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === "Login" ? 'active' : '') }}"><i class="fa-solid fa-right-to-bracket fa-lg" style="color: #404040;"></i> Login</a>
          </li>
      </ul>
        @endauth
      </div>
    </div>
  </nav>