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
                        <form method="POST">
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
                                    <input type="text" class="form-control datepicker" name="dt[birth_date]">
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
                                    <select class="form-control" name="dt[marital_status]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Status Keluarga</label>
                                    <select class="form-control" name="dt[family_status]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Agama</label>
                                    <select class="form-control" name="dt[religion]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kewarganegaraan</label>
                                    <select class="form-control" name="dt[nationality]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No NPWP</label>
                                <input type="text" class="form-control" name="dt[npwp_id]">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kartu Identitas</label>
                                    <select class="form-control" name="dt[identification_type]">
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
                                    <input type="file" id="imageFile" style="display: none;" name="dt[identification_file]" accept="image/x-png,image/jpeg,image/jpg" />
                                </div>
                            </div>
                            <div class="card-header">
                                <h4>Alamat Sesuai KTP</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Provinsi</label>
                                    <select class="form-control" name="dt[ktp_province_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control" name="dt[ktp_city_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control" name="dt[ktp_district_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <select class="form-control" name="dt[ktp_zip_code_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
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
                                    <select class="form-control" name="dt[domicile_province_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control" name="dt[domicile_city_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Kecamatan</label>
                                    <select class="form-control" name="dt[domicile_district_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Kode Pos</label>
                                    <select class="form-control" name="dt[domicile_zip_code_id]">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                        <option>Option 6</option>
                                    </select>
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
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                    <option>Option 6</option>
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