<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img style="object-fit: cover;" src="<?php echo base_url('assets/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $user['username']; ?></p>
      <!-- Status -->
      <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="<?php echo base_url('visitor'); ?>"><i class="fa fa-bar-chart"></i> <span>Visitor</span></a></li>
    <li><a href="<?php echo base_url('content'); ?>"><i class="fa fa-table"></i> <span>Content</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>User</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('user/list'); ?>">User list</a></li>
        <li><a href="<?php echo base_url('role/list'); ?>">User role</a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>