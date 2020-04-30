<!DOCTYPE html>
<html>
<head>
  <!-- meta component -->
  <?php $this->load->view('templates/meta'); ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
  <?php $user = $this->user->userLoggin(); ?>
  <!-- Navbar component -->
  <?php $this->load->view('templates/navbar', ['user' => $user]); ?>
  <!-- Sidebar component -->
  <?php $this->load->view('templates/sidebar', ['user' => $user]); ?>
