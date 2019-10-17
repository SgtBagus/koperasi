<?php
error_reporting(0);
?>
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="<?= base_url('assets/') ?>img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= base_url('login/act_login') ?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="float-right">
                                        <a href="auth-forgot-password.html" class="text-small">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                        <!-- <hr>
                        <div class="form-group">
                            <a href="<?= base_url('pembayaran') ?>"  class="btn btn-warning btn-lg btn-block" tabindex="4">
                                Konfirmasi Pembayaran
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="<?= base_url('login/register') ?>">Create One</a>
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
                            title: 'Uplaod Berhasil',
                            type: 'success',
                            html: 'Mohon Menunggu Verfikasi dari kami! serta untuk info lainnya bisa menghubungi Kami melalui <a href="#" target="_blank"><i class="fa fa-phone"></i> Whatsapp! </a>',
                        })
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