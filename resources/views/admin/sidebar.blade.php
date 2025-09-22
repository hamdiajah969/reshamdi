<style>
    body{
      font-family: "Poppins", sans-serif;
      background:#f8f9fa;
    }
    /* --- SIDEBAR --- */
    .sidebar{
      width:260px;
      min-height:100vh;
      background:#ffffff;
      border-right:1px solid #e4e6eb;
      display:flex;
      flex-direction:column;
    }
    /* Header biru */
    .sidebar-header{
      background:#0d47a1;
      color:#fff;
      padding:1.5rem 1rem;
      display:flex;
      align-items:center;
      gap:.75rem;
    }
    .sidebar-header .logo-box{
      background:#fff;
      color:#0d47a1;
      font-weight:700;
      font-size:1.2rem;
      border-radius:.25rem;
      padding:.4rem .6rem;
    }
    .sidebar-header span{
      font-weight:600;
      font-size:1.1rem;
    }

    /* nav menu */
    .sidebar .nav-link{
      color:#5a5c69;
      padding:.65rem 1.25rem;
      display:flex;
      align-items:center;
      gap:.5rem;
      font-weight:500;
      font-size:.95rem;
      transition:all .2s;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active{
      background:#eaecf4;
      color:#4e73df;
    }

    .sidebar-heading{
      text-transform:uppercase;
      font-size:.75rem;
      color:#b7b9cc;
      padding:1rem 1.25rem .25rem;
      font-weight:700;
    }

    .sidebar-footer{
      margin-top:auto;
      padding:1rem 1.25rem;
      font-size:.8rem;
      color:#b7b9cc;
    }
  </style>
</head>
<body>

<!-- ============ SIDEBAR ============ -->
<div class="sidebar">
    <!-- header -->
    <div class="sidebar-header">
        <img src="{{ asset('assets/foto/nnn.png') }}" alt="Logo" height="50" class="rounded-circle">
        {{-- <div class="logo-box">RA</div> --}}
        <span>RuangAdmin</span>
    </div>

    <!-- menu -->
    <ul class="nav flex-column mt-2">
        <li>
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <div class="sidebar-heading">Features</div>
        <li>
            <a class="nav-link" href="{{ route('admin.user.index') }}"><i class="bi bi-person-circle"></i> User</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('admin.profile') }}"><i class="bi bi-building"></i> Profile Sekolah</a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('admin.siswa') }}"><i class="bi bi-person"></i> Siswa</a>
        </li>
        <li>
            <a class="nav-link" href="#"><i class="bi bi-table"></i> Tables</a>
        </li>
        <li>
            <a class="nav-link" href="#"><i class="bi bi-palette"></i> UI Colors</a>
        </li>

        <div class="sidebar-heading">Examples</div>
        <li>
            <a class="nav-link" href="#"><i class="bi bi-files"></i> Pages</a>
        </li>
        <li>
            <a class="nav-link" href="#"><i class="bi bi-bar-chart"></i> Charts</a>
        </li>
    </ul>

    <div class="sidebar-footer">
        Version 1.1
    </div>
</div>
