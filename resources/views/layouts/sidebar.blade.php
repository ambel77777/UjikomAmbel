<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BUKU TAMU DISDIK</div>
  </a>
  
  <hr class="sidebar-divider my-0 text-white">
  
  <li class="nav-item">
    <a class="nav-link text-light" href="{{ route('dashboard') }}">
      <i class="fas fa-home"></i>
      <span>Beranda</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-light" href="{{ route('products') }}">
      <i class="fas fa-address-book"></i>
      <span>Buku Tamu</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link text-light" href="/profile">
      <i class="fas fa-database"></i>
      <span>Data</span>
    </a>
  </li>
  
  <hr class="sidebar-divider d-none d-md-block text-white">
  
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>

<style>
.nav-link:hover {
  background-color: rgba(255, 255, 255, 0.2); 
  color: #fff; 
}
</style>
