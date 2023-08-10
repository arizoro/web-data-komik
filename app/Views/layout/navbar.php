<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" >
  <div class="container-fluid ">
    <a class="navbar-brand ms-4 fw-bold" href="/">Ari CI Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link <?= ($tittle == 'Ari CI Web' ) ? 'active' : '' ; ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($tittle == 'About Us' ) ? 'active' : '' ; ?> " href="/pages/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($tittle == 'Contact Us' ) ? 'active' : '' ; ?>" href="/pages/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($tittle == 'Daftar Komik' ) ? 'active' : '' ; ?> " href="/komik">Komik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($tittle == 'Human info' ) ? 'active' : '' ; ?>" href="/human">Human</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>