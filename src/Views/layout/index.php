<!DOCTYPE html>
<html lang="<?= config('App')->defaultLocale ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">
  <title><?= $title ?? '' ?> | <?= config('Boilerplate')->appName ?></title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.0/css/all.min.css">
  <!-- Render section boilerplate css -->
  <?= $this->renderSection('css') ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="layout-fixed layout-navbar-fixed sidebar-mini <?= config('Boilerplate')->theme['footer']['fixed'] ? 'layout-footer-fixed' : '' ?> <?= config('Boilerplate')->theme['body-sm'] ? 'text-sm' : '' ?>">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include('agungsugiarto\boilerplate\Views\layout\header') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('agungsugiarto\boilerplate\Views\layout\mainsidebar') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?= $this->include('agungsugiarto\boilerplate\Views\layout\contentheader') ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <?= $this->renderSection('content') ?>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <!-- <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div> -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <strong><a href="https://github.com/agungsugiarto/boilerplate">Boilerplate</a></strong>
      </div>
      <!-- Default to the left -->
      <strong>&copy; <?= date('Y') ?> <a href="<?= config('Boilerplate')->theme['footer']['vendorlink'] ?>"><?= config('Boilerplate')->theme['footer']['vendorname']?></a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.1/dist/js/adminlte.min.js"></script>
  <!-- Preload Scriptt -->
  <script>
  $('.sidebar-toggle').on('click',function(event){event.preventDefault();if(Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))){sessionStorage.setItem('sidebar-toggle-collapsed','')}else{sessionStorage.setItem('sidebar-toggle-collapsed','1')}});(function(){if(Boolean(sessionStorage.getItem('sidebar-toggle-collapsed'))){var body=document.getElementsByTagName('body')[0];body.className=body.className+' sidebar-collapse'}})()
  </script>
  <!-- Render section boilerplate js -->
  <?= $this->renderSection('js') ?>
  <script>
  $.ajaxSetup({headers:{'<?= config('App')->CSRFHeaderName ?>':$('meta[name="<?= config('App')->CSRFTokenName ?>"]').attr('content')}})
  </script>

</body>

</html>
