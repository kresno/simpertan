<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengajuan.index') }}">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Pengajuan Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('peminjaman.index') }}">
              <i class="menu-icon mdi mdi-briefcase"></i>
              <span class="menu-title">Pengajuan Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('laporantanam.index') }}">
              <i class="menu-icon mdi mdi-transcribe"></i>
              <span class="menu-title">Laporan Penanaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cetak.index') }}">
              <i class="menu-icon mdi mdi-printer"></i>
              <span class="menu-title">Cetak SK</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Management User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('kegiatan.index') }}"> Kegiatan </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('satuan.index') }}"> Satuan </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('barangpinjam.index') }}"> Barang Pinjam </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>