<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-ok"></i></div>
                <h5><?php echo $formTitle ?></h5>
            </header>
            <div id="collapse2" class="body collapse in">
                <form method="post" action="<?php echo site_url('Admin_Controller/prosesEditmotor') ?>" class="form-horizontal" id="popup-validation">

                    <?php
                    if (isset($data_motor)) {
                        foreach ($data_motor as $row) {
                    ?>
                            <input type="hidden" name="id_user" value="<?php echo $row->id_motor; ?>">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Jenis Motor</label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required] form-control" name="id_jenis" id="id_jenis" value="<?php echo $row->id_jenis; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Nama Motor </label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="nm_motor" id="nm_motor" value="<?php echo $row->nm_motor; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Harga Rental</label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="harga_rental" id="harga_rental" value="<?php echo $row->harga_rental; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">No Polisi</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" type="numerik" name="no_polisi" id="no_polisi" value="<?php echo $row->no_polisi; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Tahun Buat</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" type="numerik" name="thn_buat" id="thn_buat" value="<?php echo $row->thn_buat; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Warna Motor</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" type="text" name="nm_warna" id="nm_warna" value="<?php echo $row->nm_warna; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Merek Motor</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="nm_merek" id="nm_merek" value="<?php echo $row->nm_merek; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">CC Motor</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="nm_merek" id="nm_merek" value="<?php echo $row->nm_merek; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Merek Motor</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="cc_motor" id="cc_motor" value="<?php echo $row->cc_motor; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Stok Motor</label>
                                <div class=" col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="stok_motor" id="stok_motor" value="<?php echo $row->stok_motor; ?>" />
                                </div>
                            </div>

                            <div style="text-align:center" class="form-actions no-margin-bottom">
                                <button type="submit" class="btn btn-default btn-round">Submit</button>
                                <a href="<?php echo site_url('Admin_Controller/pegawai/') ?>" class="btn btn-default btn-round">Cancel</a>
                            </div>
                    <?php }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>