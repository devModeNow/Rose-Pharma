<?php

    require 'header.php';

?>

<nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="">
          <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          Rose Pharmacy Bongabon
        </a>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="../../src/media/defUser.png" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="../logout.php">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="../admin/" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name">
                Medicine
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="../admin/list.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i data-feather="list"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    List
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="../admin/categories.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i data-feather="layers"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Categories
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="../admin/types.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i data-feather="menu"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Types
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" data-target="#navTables" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Inventory
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="../admin/reports.php" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    <i data-feather="flag"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Reports
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a href="../admin/sales.php" class="sidebar-nav-link collapsed">
              <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span>
              <span class="sidebar-nav-name">
                Sales
              </span>
              <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="../admin/settings.php" class="sidebar-nav-link collapsed">
              <span class="sidebar-nav-icon">
                <i data-feather="settings"></i>
              </span>
              <span class="sidebar-nav-name">
                Settings
              </span>
              <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>
          </li>
        </ul>
      </div><!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->