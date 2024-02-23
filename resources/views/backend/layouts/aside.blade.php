  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_admins') }}">
              <i class="bi bi-circle"></i><span>All Admin</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>USERS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.users.all_users') }}">
              <i class="bi bi-circle"></i><span>ALL USERS</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Apports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_apports') }}">
              <i class="bi bi-circle"></i><span>All Apports</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Contact_us</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('backend.admins.all_contact') }}">
              <i class="bi bi-circle"></i><span>All Contact_us</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Count</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('backend.admins.all_count') }}">
              <i class="bi bi-circle"></i><span>ALL Count</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#componentss-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="componentss-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_department') }}">
              <i class="bi bi-circle"></i><span>ALL Department</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.admins.department.create') }}">
              <i class="bi bi-circle"></i><span>Add Department</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-ssnav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Quations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-ssnav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="{{ route('backend.admins.all_questions') }}">
              <i class="bi bi-circle"></i><span>All Quations</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.admins.all_questions.create') }}">
              <i class="bi bi-circle"></i><span>Add Quations</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#aaforms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="aaforms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_services') }}">
              <i class="bi bi-circle"></i><span>All Services</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.admins.all_services.create') }}">
              <i class="bi bi-circle"></i><span>Add Services</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-navaa" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gallary</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-navaa" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_images') }}">
              <i class="bi bi-circle"></i><span>All Images</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.admins.gallary.create') }}">
              <i class="bi bi-circle"></i><span>Add Images</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nassv" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Doctors</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nassv" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('backend.admins.all_doctors') }}">
              <i class="bi bi-circle"></i><span>All Doctors</span>
            </a>
          </li>

          <li>
            <a href="{{ route('backend.admins.doctors.create') }}">
              <i class="bi bi-circle"></i><span>Add Doctors</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


    </ul>

  </aside><!-- End Sidebar-->