  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Manager</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('manager_roles') }}">
          <i class="bi bi-menu-button-wide"></i><span>Tutor</span>
        </a>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('manager_roles') }}">
          <i class="bi bi-menu-button-wide"></i><span>Students</span>
        </a>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('manager_roles') }}">
          <i class="bi bi-menu-button-wide"></i><span>Payments</span>
        </a>
      </li><!-- End Components Nav -->
      <li class="nav-heading">End Manager</li>

      <li class="nav-heading">Mentor</li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>Course</span></a></li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>Students</span></a></li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>Classes</span></a></li>
      <li class="nav-heading">End Mentor</li>

      <li class="nav-heading">Ad Manager</li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>Pages</span></a></li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>SEO</span></a></li>
      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>SSM</span></a></li>
      <li class="nav-heading">End Ads Manager</li>

      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('manager_roles') }}"><i class="bi bi-menu-button-wide"></i><span>Employees</span></a></li><!-- End Components Nav -->

      <li class="nav-item"><a class="nav-link collapsed" href="{{ route('courseadmin') }}"><i class="bi bi-journal-text"></i><span>Course</span></a></li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('products') }}"><i class="bi bi-journal-text"></i><span>Products</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('affiliate') }}">
          <i class="bi bi-journal-text"></i><span>Affiliate</span>
        </a>
      </li><!-- End Forms Nav -->

    </ul>

  </aside>
