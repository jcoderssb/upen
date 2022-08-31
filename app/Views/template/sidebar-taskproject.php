<?php header('Access-Control-Allow-Origin: *');

use App\Models\TaskModel;
?>

<!DOCTYPE html>
<html>


<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 bg-navy">
  <a href="/" class="font-weight-bold dcodes-font" style="display:block; width:100%; text-align:center; padding-top:10px;"><label class="dcs-blue dcs-shadowDarkBlue">J</label>CODERS</a>
  <span class="brand-text font-weight-light">
    <center> JCODERS SDN BHD </center>
  </span>

  <div class="dropdown-divider"></div>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              TASK
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../task" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>List of Task</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../taskproject" class="nav-link active">
                <i class="far fa-folder nav-icon"></i>
                <p>Data Project</p>
              </a>
            </li>
            <!--li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li-->
          </ul>
        </li>
        <!--li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li-->

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>JCODERS Project</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  </body>

</html>