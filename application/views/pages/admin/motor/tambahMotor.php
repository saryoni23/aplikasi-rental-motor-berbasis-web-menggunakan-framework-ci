<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $formTitle ?>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('Admin_Controller/prosesTambahMotor') ?>" class="form-horizontal" id="popup-validation">
                    <input type="hidden" name="lvl_user" value="admin">
                    <div class="form-group">
                        <label class="control-label col-lg-4"></label>
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="<?php echo base_url('assets/admin/img/demoUpload.jpg') ?>" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                <span><input type="file" name="userfile" required></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Jenis</label>
                            <div class="col-lg-4">
                                <select id="id_jenis" name="id_jenis" class="validate[required] form-control" required>
                                    <option value="">Pilih Jenis</option>
                                    <?php
                                    if (isset($jenis_motor)) {
                                        foreach ($jenis_motor as $row) {
                                    ?>
                                            <option value="<?php echo $row->id_jenis ?>"><?php echo $row->nm_jenis ?></option>
                                    <?php }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Nama</label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required] form-control" name="nm_motor" id="nm_user" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Biaya Rental</label>
                            <div class="col-lg-4">
                                <input type="number" class="validate[required,custom[number]] form-control" name="harga_rental" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">No Polisi</label>
                            <div class="col-lg-4">
                                <input type="number" class="validate[required,custom[number]] form-control" name="no_polisi" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Warna</label>
                            <div class="col-lg-4">
                                <select id="nm_warna" name="nm_warna" class="validate[required] form-control" required>
                                    <option value="">Pilih warna</option>
                                    <option value="hijau">Hijau</option>
                                    <option value="merah">Merah</option>
                                    <option value="putih">putih</option>
                                    <option value="hitam">hitam</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Merek</label>
                            <div class="col-lg-4">
                                <select id="nm_merek" name="nm_merek" class="validate[required] form-control" required>
                                    <option value="">Pilih Merek</option>
                                    <option value="honda">Honda</option>
                                    <option value="yamaha">Yamaha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Tahun Buat</label>
                            <div class="col-lg-4">
                                <select id="thn_buat" name="thn_buat" class="validate[required] form-control" required>
                                    <option value=''>Tahun</option>
                                    <option value='2008'>2008</option>
                                    <option value='2009'>2009</option>
                                    <option value='2010'>2010</option>
                                    <option value='2011'>2011</option>
                                    <option value='2012'>2012</option>
                                    <option value='2013'>2013</option>
                                    <option value='2014'>2014</option>
                                    <option value='2015'>2015</option>
                                    <option value='2016'>2016</option>
                                    <option value='2017'>2017</option>
                                    <option value='2018'>2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">CCMotor</label>
                            <div class="col-lg-4">
                                <select id="cc_motor" name="cc_motor" class="validate[required] form-control" required>
                                    <option value=''>CCMotor</option>
                                    <option value='100'>100</option>
                                    <option value='110'>110</option>
                                    <option value='125'>125</option>
                                    <option value='150'>150</option>
                                    <option value='200'>200</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Stok</label>
                            <div class="col-lg-4">
                                <input type="text" class="validate[required] form-control" name="stok_motor" id="stok_motor" required>
                            </div>
                        </div>
                        <div style="text-align:center" class="form-actions no-margin-bottom">
                            <button type="submit" class="btn btn-default btn-round">Submit</button>
                            <a href="<?php echo site_url('Admin_Controller/motor') ?>" class="btn btn-default btn-round">Cancel</a>
                        </div>
                </form>
            </div>
            <div class="panel-footer">
            </div>
        </div>
    </div>
</div>