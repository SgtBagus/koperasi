<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="<?= base_url('assets/') ?>img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    <div align="center">
                        Mendaftar
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-body">
                        <form method="POST" class="needs-validation" novalidate="" action="<?= base_url('login/addregister') ?>" enctype="multipart/form-data" id="sumbit">
                            <div class="card-header">
                                <h4>Identitas</h4>
                            </div>
                            <div class="show_error"></div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="dt[full_name]" autofocus required>
                                <div class="invalid-feedback">
                                    Masukan Nama Lengkap Anda!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="dt[email]" required>
                                <div class="invalid-feedback">
                                    Masukan Alamat Lengkap Anda!
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Hp</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            +62
                                        </div>
                                    </div>
                                    <input type="number" class="form-control phone-number" name="dt[phone_number]" required>
                                    <div class="invalid-feedback">
                                        Masukan Nomor Hp Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="dt[birth_date]" required>
                                    <div class="invalid-feedback">
                                        Masukan Tanggal Lahir Anda!
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="dt[birth_place]" required>
                                    <div class="invalid-feedback">
                                        Masukan Tempat Lahir Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="dt[sex]">>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Status Kawin</label>
                                    <select class="form-control" name="dt[marital_status]">>
                                        <?php
                                        $tbl_marital = $this->mymodel->selectWhere('tbl_marital', null);
                                        foreach ($tbl_marital as $tbl_marital_record) {
                                            echo "<option value=" . $tbl_marital_record['id_marital'] . ">" . $tbl_marital_record['value'] . "</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Status Keluarga</label>
                                    <select class="form-control" name="dt[family_status]">>
                                        <?php
                                        $tbl_family = $this->mymodel->selectWhere('tbl_family', null);
                                        foreach ($tbl_family as $tbl_family_record) {
                                            echo "<option value=" . $tbl_family_record['id_family'] . ">" . $tbl_family_record['value'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Agama</label>
                                    <select class="form-control" name="dt[religion]">>
                                        <?php
                                        $tbl_agama = $this->mymodel->selectWhere('tbl_agama', null);
                                        foreach ($tbl_agama as $tbl_agama_record) {
                                            echo "<option value=" . $tbl_agama_record['id_agama'] . ">" . $tbl_agama_record['nama_agama'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kewarganegaraan</label>
                                    <select class="form-control" name="dt[nationality]">>
                                        <?php
                                        $apps_countries = $this->mymodel->selectWhere('apps_countries', null);
                                        foreach ($apps_countries as $apps_countries_record) {
                                            echo "<option value=" . $apps_countries_record['id'] . ">" . $apps_countries_record['country_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No NPWP</label>
                                <input type="text" class="form-control" name="dt[npwpid]" required>
                                <div class="invalid-feedback">
                                    Masukan No NPWP Anda!
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kartu Identitas</label>
                                    <select class="form-control" name="dt[identification_type]">
                                        <option value="KTP">KTP</option>
                                        <option value="SIM">SIM</option>
                                        <option value="Pasport">Pasport</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Id Identitas</label>
                                    <input type="text" class="form-control" name="dt[identification_id]" required>
                                    <div class="invalid-feedback">
                                        Masukan Id Identitas Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload Kartu Identitas</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary" id="btnFile"><i class="fa fa-file"></i> File</button>
                                    </div>
                                    <input type="text" id="file_name" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Mohon Upload Kartu Identitas Anda!
                                    </div>
                                    <input type="file" id="imageFile" style="display: none;" name="identification_file" accept="image/x-png,image/jpeg,image/jpg" />
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Alamat Sesuai KTP</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Provinsi</label>
                                    <select class="form-control" name="dt[ktp_province_id]" id="provinsi">
                                        <?php
                                        $tbl_provinsi = $this->mymodel->selectWhere('tbl_provinsi', null);
                                        foreach ($tbl_provinsi as $tbl_provinsi_record) {
                                            echo "<option value=" . $tbl_provinsi_record['id'] . ">" . $tbl_provinsi_record['provinsi'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control" name="dt[ktp_city_id]" id="kota">
                                        <option value="">-Mohon Pilih Provinsi Terlebih Dahulu-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control" name="dt[ktp_district_id]" id="kecamatan">
                                        <option value="">-Mohon Pilih Kota/Kabupaetn Terlebih Dahulu-</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" name="dt[ktp_zip_code_id]" required>
                                    <div class="invalid-feedback">
                                        Masukan Kode Pos Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="dt[ktp_address]" required></textarea>
                                <div class="invalid-feedback">
                                    Masukan Alamat Anda!
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Alamat Domisili</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Provinsi</label>
                                    <select class="form-control" name="dt[domicile_province_id]" id="domisili_provinsi">
                                        <?php
                                        $tbl_provinsi = $this->mymodel->selectWhere('tbl_provinsi', null);
                                        foreach ($tbl_provinsi as $tbl_provinsi_record) {
                                            echo "<option value=" . $tbl_provinsi_record['id'] . ">" . $tbl_provinsi_record['provinsi'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control" name="dt[domicile_city_id]" id="domisili_kota">
                                        <option value="">-Mohon Pilih Provinsi Terlebih Dahulu-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control" name="dt[domicile_district_id]" id="domisili_kecamatan">
                                        <option value="">-Mohon Pilih Kota/Kabupaetn Terlebih Dahulu-</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" name="dt[domicile_zip_code_id]" required>
                                    <div class="invalid-feedback">
                                        Masukan Kode Pos Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="dt[domicile_address]" required></textarea>
                                <div class="invalid-feedback">
                                    Masukan Alamat Anda!
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Data Perusahaan</h4>
                            </div>
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <select class="form-control" name="dt[employer_name]">
                                    <?php
                                    $tbl_employer = $this->mymodel->selectWhere('tbl_employer', null);
                                    foreach ($tbl_employer as $tbl_employer_record) {
                                        echo "<option value=" . $tbl_employer_record['id_employer'] . ">" . $tbl_employer_record['value'] . "</option>";
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Perusahaan</label>
                                <textarea class="form-control" name="dt[employer_address]" required></textarea>
                                <div class="invalid-feedback">
                                    Masukan Alamat Perusahaan Anda!
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>No Telp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                +62
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" name="dt[employer_phone]" required>
                                        <div class="invalid-feedback">
                                            Masukan No Telp Perusahaan Anda!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Industri</label>
                                    <input type="text" class="form-control" name="dt[employer_industry]" required>
                                    <div class="invalid-feedback">
                                        Masukan Industri Perusahaan Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Penempatan Kerja</label>
                                    <input type="text" class="form-control" name="dt[placement_location]" required>
                                    <div class="invalid-feedback">
                                        Masukan Penempatan Kerja Perusahaan Anda!
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Departemen</label>
                                    <input type="text" class="form-control" name="dt[employee_dept]" required>
                                    <div class="invalid-feedback">
                                        Masukan Departemen Perusahaan Anda!
                                    </div>
                                </div>
                            </div>
                            <div class="show_error"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-send">
                                    Register
                                </button>
                            </div>
                            <div class="form-group">
                                Punya Akun Silakan Login <a href="<?= base_url('login') ?>"> Disini ! </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Stisla 2018
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(function() {
        $("#sumbit").submit(function() {
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
                            title: 'Pendaftaran Berhasil',
                            type: 'success',
                            html: 'Mohon Menunggu Verfikasi dari kami melalui Whatsapps!, serta untuk info lainya bisa menghubungi Kami melalui <a href="#" target="_blank"><i class="fa fa-phone"></i> Whatsapps! </a>',
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

    function get_kota(provinsi_id) {
        if (provinsi_id) {
            $.ajax({
                url: "<?= base_url() ?>ajax/get_kota/" + provinsi_id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#kota").empty();
                    if (!$.trim(data)) {
                        $("#kota").append('<option value="">Data Tidak Tersedia</option>');
                    } else {
                        $.each(data, function(key, value) {
                            $("#kota").append('<option value="' +
                                value.id + '">' + value.kabupaten_kota +
                                '</option>');
                            get_kecamatan($("#kota").val());
                        });
                    }
                }
            });
        } else {
            $("#kota").empty();
            $("#kota").append('<option value="">-Mohon Pilih Provinsi Terlebih Dahulu-</option>');
        }
    }

    function get_kecamatan() {
        var kota_id = $("#kota").val()
        if (kota_id) {
            $.ajax({
                url: "<?= base_url() ?>ajax/get_kecamatan/" + kota_id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#kecamatan").empty();
                    if (!$.trim(data)) {
                        $("#kecamatan").append('<option value="">Data Tidak Tersedia</option>');
                    } else {
                        $.each(data, function(key, value) {
                            $("#kecamatan").append('<option value="' +
                                value.id + '">' + value.kecamatan +
                                '</option>');
                        });
                    }
                }
            });
        } else {
            $("#kecamatan").empty();
            $("#kecamatan").append('<option value="">-Mohon Pilih Kota/Kabupaetn Terlebih Dahulu-</option>');
        }
    }

    $("#provinsi").change(function() {
        get_kota($("#provinsi").val());
    });

    $("#kota").change(function() {
        get_kecamatan($("#kota").val());
    });

    get_kota($("#provinsi").val());
    get_kecamatan($("#kota").val());

    function get_domisili_kota(provinsi_id) {
        if (provinsi_id) {
            $.ajax({
                url: "<?= base_url() ?>ajax/get_kota/" + provinsi_id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#domisili_kota").empty();
                    if (!$.trim(data)) {
                        $("#domisili_kota").append('<option value="">Data Tidak Tersedia</option>');
                    } else {
                        $.each(data, function(key, value) {
                            $("#domisili_kota").append('<option value="' +
                                value.id + '">' + value.kabupaten_kota +
                                '</option>');
                            get_domisili_kecamatan($("#domisili_kota").val());
                        });
                    }
                }
            });
        } else {
            $("#domisili_kota").empty();
            $("#domisili_kota").append('<option value="">-Mohon Pilih Provinsi Terlebih Dahulu-</option>');
        }
    }

    function get_domisili_kecamatan(kota_id) {
        if (kota_id) {
            $.ajax({
                url: "<?= base_url() ?>ajax/get_kecamatan/" + kota_id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#domisili_kecamatan").empty();
                    if (!$.trim(data)) {
                        $("#domisili_kecamatan").append('<option value="">Data Tidak Tersedia</option>');
                    } else {
                        $.each(data, function(key, value) {
                            $("#domisili_kecamatan").append('<option value="' +
                                value.id + '">' + value.kecamatan +
                                '</option>');
                        });
                    }
                }
            });
        } else {
            $("#domisili_kecamatan").empty();
            $("#domisili_kecamatan").append('<option value="">-Mohon Pilih Kota/Kabupaetn Terlebih Dahulu-</option>');
        }
    }

    $("#domisili_provinsi").change(function() {
        get_domisili_kota($("#domisili_provinsi").val());
    });

    $("#domisili_kota").change(function() {
        get_domisili_kecamatan($("#domisili_kota").val());
    });

    get_domisili_kota($("#domisili_provinsi").val());
    get_domisili_kecamatan($("#domisili_kota").val());
</script>