<?php $logo = $this->db->get_where('content', ['title' => 'logo'])->row_array(); ?>
<!-- Main Header -->
<header class="main-header">

<!-- Logo -->
<a href="index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><img src="<?php echo base_url($logo['image']); ?>" width="70"></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img src="<?php echo base_url($logo['image']); ?>" width="120"></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="<?php echo base_url('assets/dist/img/avatar5.png'); ?>" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs"><?php echo $user['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="<?php echo base_url('assets/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image">

            <p>
              <?php echo $user['username'] ?>
              <small>Member since <?php echo date('M, d Y', strtotime($user['created_at'])); ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="<?php echo base_url('user/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>