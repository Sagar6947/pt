<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/template/header_link'); ?>

<body class="sidebar-fixed">
  <div id="app">
    <?php $this->load->view('admin/template/header'); ?>

    <?php $this->load->view('admin/template/sidebar'); ?>
    <!--START PAGE HEADER -->
    <header class="page-header">
      <div class="d-flex align-items-center">
        <div class="mr-auto">
          <h1>Dashboard</h1>
        </div>

      </div>
    </header>

   
    <!--END PAGE CONTENT -->
  </div>

  </div>
  </div>
  <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>