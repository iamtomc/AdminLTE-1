<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>L<b>P</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE <b>PHP</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php include 'header/scripts/messages.php'; echo $messagesnumber; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $messagesnumber; ?> messages</li>
              <li><?php include 'header/messages.php'; ?></li>

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php include 'header/scripts/notifications.php'; echo $notificationsnumber; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $notificationsnumber; ?> notifications</li>
              <li><?php include 'header/notifications.php'; ?></li></ul>
	

          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger"><?php include 'header/scripts/tasks.php'; echo $tasknumber; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $tasknumber; ?> tasks</li>
              <li><?php include 'header/tasks.php'; ?></li>
	

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
		<?php include 'header/user-account.php'; ?>

	</li>

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
	<?php include 'header/control-sidebar.php'; ?>
