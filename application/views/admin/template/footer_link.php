 <script src="<?= base_url(); ?>assets/admin/vendor/modernizr/modernizr.custom.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/jquery/dist/jquery.min.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/js-storage/js.storage.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/js-cookie/src/js.cookie.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/pace/pace.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/metismenu/dist/metisMenu.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/switchery-npm/index.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
 <!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
 <script src="<?= base_url(); ?>assets/admin/vendor/countup.js/dist/countUp.min.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/chart.js/dist/Chart.bundle.min.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/flot/jquery.flot.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/flot/jquery.flot.resize.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/flot/jquery.flot.time.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/flot.curvedlines/curvedLines.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/datatables.net/js/jquery.dataTables.js"></script>
 <script src="<?= base_url(); ?>assets/admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
 <!-- ================== GLOBAL APP SCRIPTS ==================-->
 <script src="<?= base_url(); ?>assets/admin/js/global/app.js"></script>
 <!-- ================== PAGE LEVEL SCRIPTS ==================-->
 <script src="<?= base_url(); ?>assets/admin/js/components/countUp-init.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/counter-group.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/recent-transactions.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/monthly-budget.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/users-chart.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/bounce-rate-chart.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/cards/session-duration-chart.js"></script>
 <script src="<?= base_url(); ?>assets/admin/js/components/datatables-init.js"></script>
 <script>
     window.setTimeout(function() {
         $(".alert").fadeTo(200, 0).slideUp(200, function() {
             $(this).remove();
         });
     }, 4000);


     CKEDITOR.replace('editor1', {
         height: 200,
         extraPlugins: 'colorbutton,colordialog',
         removeButtons: '',
         removeButtons: 'PasteFromWord'
     });
 </script>