    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/bin/materialize.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/js/bin/init.js') ?>" charset="utf-8"></script>
    <script src="<?= base_url('assets/owlcarousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>" charset="utf-8"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="<?= base_url('admin/plugins/light-gallery/js/lightgallery-all.js') ?>"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('admin/js/pages/medias/image-gallery.js') ?>"></script>

    <script>
        $ ('.subscribe').on("submit", function (e) {
        e.preventDefault ();
        var url = $ (this).attr('action');
        $.ajax({
            url: url,
            type: "POST",
            dataType: "html",
            success: function () {
                alert('Silakan cek email anda untuk proses verifikasi');
                location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                var toastHTML = "<span>Email yang Anda masukkan sudah terdaftar sebagai subscriber</span><button class='btn-flat toast-action'>x</button>";
                M.toast({html: toastHTML});
                var toastElement = document.querySelector('.toast-action');
                var toastInstance = M.Toast.getInstance(toastElement);
                toastInstance.dismiss();
            }
        });

      });
    </script>
  </body>
</html>
