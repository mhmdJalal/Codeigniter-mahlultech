    <!-- Jquery Core Js -->
    <script src="<?= base_url('admin/plugins/jquery/jquery.min.js') ?>"></script>

    <!-- Materialize Js -->
    <script src="<?= base_url('assets/js/bin/materialize.js') ?>" charset="utf-8"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('admin/plugins/bootstrap/js/bootstrap.js') ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url('admin/plugins/bootstrap-select/js/bootstrap-select.js') ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('admin/plugins/node-waves/waves.js') ?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?= base_url('admin/plugins/jquery-countto/jquery.countTo.js') ?>"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="<?= base_url('admin/plugins/jquery-validation/jquery.validate.js') ?>"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?= base_url('admin/plugins/jquery-steps/jquery.steps.js') ?>"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?= base_url('admin/plugins/sweetalert/sweetalert.min.js') ?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?= base_url('admin/plugins/raphael/raphael.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/morrisjs/morris.js') ?>"></script>

    <!-- ChartJs -->
    <script src="<?= base_url('admin/plugins/chartjs/Chart.bundle.js') ?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?= base_url('admin/plugins/jquery-sparkline/jquery.sparkline.js') ?>"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="<?= base_url('admin/plugins/light-gallery/js/lightgallery-all.js') ?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?= base_url('admin/plugins/jquery-datatable/jquery.dataTables.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/jszip.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js') ?>"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('admin/js/pages/medias/image-gallery.js') ?>"></script>
    <script src="<?= base_url('admin/js/pages/forms/form-validation.js') ?>"></script>
    <script src="<?= base_url('admin/js/pages/tables/jquery-datatable.js') ?>"></script>
    <script src="<?= base_url('admin/js/pages/ui/tooltips-popovers.js') ?>"></script>
    <script src="<?= base_url('admin/js/admin.js') ?>"></script>
    <script src="<?= base_url('admin/js/pages/index.js') ?>"></script>

    <!-- Demo Js -->
    <script src="<?= base_url('admin/js/demo.js') ?>"></script>
    <script>
     $ ('.delete').on("click", function (e) {
        e.preventDefault ();
        var url = $ (this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function (isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                success: function () {
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
            });
        });

      });
      </script>
      <script>
     $ ('#logout').on("click", function (e) {
        e.preventDefault ();
        var url = $ (this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will exit the admin dashboard!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            closeOnConfirm: false
        }, function (isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                success: function () {
                    window.location.replace(url);
                },
            });
        });

      });
      </script>
</body>

</html>
