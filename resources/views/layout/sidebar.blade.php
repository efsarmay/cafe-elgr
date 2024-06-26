<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa-solid fa-w"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Caffe lior<sup></sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->  

  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-mosque"></i>
      <span>Tentang aplikasi</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
      <i class="fas fa-hippo"></i>
      <span>Product</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fab fa-sticker-mule"></i>
      <span>Kategori</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('jenis') }}">
      <i class="fas fa-cat"></i>
      <span>Jenis</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('stok') }}">
     <i class="fas fa-dragon"></i>
      <span>Stok</span></a>
  </li>

    <li class="nav-item">
    <a class="nav-link" href="{{ route('meja') }}">
      <i class="fas fa-mosque"></i>
      <span>Meja</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('pelanggan') }}">
     <i class="fas fa-spider"></i>
      <span>Pelanggan</span></a>
  </li>
  
    <li class="nav-item">
    <a class="nav-link" href="{{ route('pemesanan') }}">
     <i class="fas fa-spider"></i>
      <span>Pemesanan</span></a>
  </li>
<!-- 
      <li class="nav-item">
    <a class="nav-link" href="{{ route('produk_titipan') }}">
     <i class="fas fa-kiwi-bird"></i>
      <span>Produk Titipan</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('absensi') }}">
      <i class="fas fa-mosque"></i>
      <span>Absensi</span></a>
  </li> -->
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>