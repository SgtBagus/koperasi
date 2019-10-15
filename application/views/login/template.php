<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $page ?> &mdash; Koperasi Tokokarya</title>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    
    <script src="<?= base_url('assets/') ?>modules/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/popper.js"></script>
    <script src="<?= base_url('assets/') ?>modules/tooltip.js"></script>
    <script src="<?= base_url('assets/') ?>modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/stisla.js"></script>
    <script src="<?= base_url('assets/') ?>modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/') ?>modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/page/forms-advanced-forms.js"></script>
    <script src="<?= base_url('assets/') ?>js/sweetalret2.js"></script>
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom.js"></script>
</head>

<body>
    <div id="app">
        <?= $contents ?>
    </div>

    <script type="text/javascript">
        $(function() {
            $("#btnFile").click(function() {
                document.getElementById('imageFile').click();
            });

            $("#imageFile").change(function() {
                imagePreview(this);
            });

            function imagePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#file_name').val(input.files[0].name);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            };
        });
    </script>
</body>

</html>