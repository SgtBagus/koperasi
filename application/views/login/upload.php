<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="<?= base_url('assets/') ?>img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Upload Bukti Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('pembayaran/send') ?>" class="needs-validation" method="post" enctype="multipart/form-data" id="submit">
                            <div class="form-group">
                                <label for="email">Kode Pendaftaran</label>
                                <input id="text" type="text" class="form-control" name="kode" value="<?= $_GET['kode'] ?>" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Please fill in your code
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload Bukti Pembayaran</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary" id="btnFile"><i class="fa fa-file"></i> File</button>
                                    </div>
                                    <input type="text" id="file_name" class="form-control" required readonly>
                                    <div class="invalid-feedback">
                                        Mohon Upload Bukti Pembayaran Anda!
                                    </div>
                                    <input type="file" id="imageFile" required style="display: none;" name="bukti_pembayaran" accept="image/x-png,image/jpeg,image/jpg" />
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Upload
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Pilot Project Sistem E-Koperasi
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(function() {
        $("#submit").submit(function() {
            var form = $(this);
            var mydata = new FormData(this);
            $.ajax({
                type: "POST",
                url: form.attr("action"),
                data: mydata,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(".btn-send").addClass("disabled").html("<i class='la la-spinner la-spin'></i>  Memperoses...").attr('disabled', true);
                    // form.find(".show_error").slideUp().html("");
                },

                success: function(response, textStatus, xhr) {
                    var str = response;
                    if (str.indexOf("success") != -1) {
                        // form.find(".show_error").hide().html(response).slideDown("fast");
                        $(".btn-send").removeClass("disabled").html('Register').attr('disabled', false);
                        Swal.fire({
                            title: 'Upload Berhasil',
                            type: 'success',
                            html: 'Mohon Menunggu Verfikasi dari kami! serta untuk info lainnya bisa menghubungi Kami melalui <a href="https://api.whatsapp.com/send?phone=6285526250131" target="_blank"><i class="fa fa-phone"></i> Whatsapp! </a>',
                        }, function() {
                            window.location.href = "<?= base_url(); ?>";
                        });

                    } else {
                        form.find(".show_error").hide().html(response).slideDown("fast");
                        $(".btn-send").removeClass("disabled").html('Register').attr('disabled', false);
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    $(".btn-send").removeClass("disabled").html('Register').attr('disabled', false);
                    Swal.fire({
                        type: 'error',
                        title: 'Mohon Maaf Terjadi Kesalahan...',
                        text: 'Cobalah beberapa saat lagi!',
                        footer: '<a href>Why do I have this issue?</a>'
                    })
                }
            });
            return false;
        });
    });
</script>