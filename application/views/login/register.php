<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="<?= base_url('assets/') ?>img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle" >
                    <div align="center">
                        Mendaftar
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-body">
                        <form method="POST" action="<?= base_url('login/addregister') ?>" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Identitas</h4>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="dt[full_name]" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="dt[email]">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Hp</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control phone-number" name="dt[phone_number]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control datepicker" name="dt[birth_date]">
                                </div>
                                <div class="form-group col-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="dt[birth_place]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="dt[sex]">>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Status Kawin</label>
                                    <select class="form-control selectric" name="dt[marital_status]">>
                                        <?php 
                                        $tbl_marital = $this->mymodel->selectWhere('tbl_marital',null);
                                        foreach ($tbl_marital as $tbl_marital_record) {
                                        echo "<option value=".$tbl_marital_record['id_marital'].">".$tbl_marital_record['value']."</option>";
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Status Keluarga</label>
                                    <select class="form-control selectric" name="dt[family_status]">>
                                        <?php 
                                        $tbl_family = $this->mymodel->selectWhere('tbl_family',null);
                                        foreach ($tbl_family as $tbl_family_record) {
                                        echo "<option value=".$tbl_family_record['id_family'].">".$tbl_family_record['value']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Agama</label>
                                    <select class="form-control selectric" name="dt[religion]">>
                                        <?php 
                                        $tbl_agama = $this->mymodel->selectWhere('tbl_agama',null);
                                        foreach ($tbl_agama as $tbl_agama_record) {
                                        echo "<option value=".$tbl_agama_record['id_agama'].">".$tbl_agama_record['nama_agama']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kewarganegaraan</label>
                                    <select class="form-control selectric" name="dt[nationality]">>
                                        <?php 
                                        $apps_countries = $this->mymodel->selectWhere('apps_countries',null);
                                        foreach ($apps_countries as $apps_countries_record) {
                                        echo "<option value=".$apps_countries_record['id'].">".$apps_countries_record['country_name']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label>No NPWP</label>
                                    <input type="text" class="form-control" name="dt[npwpid]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kartu Identitas</label>
                                    <select class="form-control selectric" name="dt[identification_type]">
                                        <option>KTP</option>
                                        <option>SIM</option>
                                        <option>Pasport</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Id Identitas</label>
                                    <input type="text" class="form-control" name="dt[identification_id]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload Kartu Identitas</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary" id="btnFile"><i class="fa fa-file"></i> File</button>
                                    </div>
                                    <input type="text" id="file_name" class="form-control">
                                    <input type="file" id="imageFile" style="display: none;" name="identification_file" accept="image/x-png,image/jpeg,image/jpg" />
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Alamat Sesuai KTP</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Provinsi</label>
                                    <select class="form-control selectric" name="dt[ktp_province_id]">
                                        <?php 
                                        $tbl_provinsi = $this->mymodel->selectWhere('tbl_provinsi',null);
                                        foreach ($tbl_provinsi as $tbl_provinsi_record) {
                                        echo "<option value=".$tbl_provinsi_record['id'].">".$tbl_provinsi_record['provinsi']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control selectric" name="dt[ktp_city_id]">
                                        <?php 
                                        $tbl_kabkot = $this->mymodel->selectWhere('tbl_kabkot',null);
                                        foreach ($tbl_kabkot as $tbl_kabkot_record) {
                                        echo "<option value=".$tbl_kabkot_record['id'].">".$tbl_kabkot_record['kabupaten_kota']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control selectric" name="dt[ktp_district_id]">
                                        <?php 
                                        $tbl_kecamatan = $this->mymodel->selectWhere('tbl_kecamatan',null);
                                        foreach ($tbl_kecamatan as $tbl_kecamatan_record) {
                                        echo "<option value=".$tbl_kecamatan_record['id'].">".$tbl_kecamatan_record['kecamatan']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" name="dt[ktp_zip_code_id]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="dt[ktp_address]"></textarea>
                            </div>
                            <div class="card-header">
                                <h4>Alamat Domisili</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Provinsi</label>
                                    <select class="form-control selectric" name="dt[domicile_province_id]">
                                        <?php 
                                        $tbl_provinsi = $this->mymodel->selectWhere('tbl_provinsi',null);
                                        foreach ($tbl_provinsi as $tbl_provinsi_record) {
                                        echo "<option value=".$tbl_provinsi_record['id'].">".$tbl_provinsi_record['provinsi']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control selectric" name="dt[domicile_city_id]">
                                        <?php 
                                        $tbl_kabkot = $this->mymodel->selectWhere('tbl_kabkot',null);
                                        foreach ($tbl_kabkot as $tbl_kabkot_record) {
                                        echo "<option value=".$tbl_kabkot_record['id'].">".$tbl_kabkot_record['kabupaten_kota']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control selectric" name="dt[domicile_district_id]">
                                        <?php 
                                        $tbl_kecamatan = $this->mymodel->selectWhere('tbl_kecamatan',null);
                                        foreach ($tbl_kecamatan as $tbl_kecamatan_record) {
                                        echo "<option value=".$tbl_kecamatan_record['id'].">".$tbl_kecamatan_record['kecamatan']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" name="dt[domicile_zip_code_id]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="dt[domicile_address]"></textarea>
                            </div>
                            <div class="card-header">
                                <h4>Data Perusahaan</h4>
                            </div>
                            <div class="form-group">
                                <label>Nama Perusahaan</label>
                                <select class="form-control" name="dt[employer_name]">
                                    <?php 
                                    $tbl_employer = $this->mymodel->selectWhere('tbl_employer',null);
                                    foreach ($tbl_employer as $tbl_employer_record) {
                                    echo "<option value=".$tbl_employer_record['value'].">".$tbl_employer_record['value']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat Perusahaan</label>
                                <textarea class="form-control" name="dt[employer_address]"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>No Telp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="dt[employer_phone]">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label>Industri</label>
                                    <input type="text" class="form-control" name="dt[employer_industry]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Penempatan Kerja</label>
                                    <input type="text" class="form-control" name="dt[placement_location]">
                                </div>
                                <div class="form-group col-6">
                                    <label>Departemen</label>
                                    <input type="text" class="form-control" name="dt[employee_dept]">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                            <div class="form-group">
                                Punya Akun Silakan Login <a href="<?= base_url('login') ?>">  Disini ! </a>
                            </div>
                        </form>
                        <button class="btn btn-primary" id="registerSuccess">Launch</button>
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
    $("#registerSuccess").click(function() {
        swal('Pendaftaran Berhasi!', 'Mohon Tunggu Verfikasi dari kami melalui Watchapps!', 'success');
    })
</script>