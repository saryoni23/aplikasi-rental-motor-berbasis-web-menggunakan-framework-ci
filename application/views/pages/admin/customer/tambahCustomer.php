<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-ok"></i></div>
                <h5><?php echo $formTitle ?></h5>
            </header>
            <div id="collapse2" class="body collapse in">
                <form method="post" action="<?php echo site_url('Admin_Controller/prosesTambahcustomer') ?>" class="form-horizontal" id="popup-validation">
                    <input type="hidden" name="lvl_user" value="customer">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Nama Pelanggan</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="nm_user" id="nm_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Username </label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required,minSize[6]] form-control" name="username" id="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,minSize[6]] form-control" type="password" name="password" id="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,equals[password]] form-control" type="password" name="pass2" id="pass2" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>
                        <div class=" col-lg-4">
                            <input class="validate[required,custom[email]] form-control" type="text" name="email_user" id="email_user" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">No Telp </label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required,custom[number]] form-control" name="notelp_user" id="notelp_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Alamat</label>
                        <div class=" col-lg-4">
                            <input class="validate[required] form-control" type="text" name="almt_user" id="almt_user" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Identitas</label>
                        <div class="col-lg-4">
                            <select id="id_identitas" name="id_identitas" class="validate[required] form-control" required>
                                <option value="">Pilih Identitas</option>
                                <?php
                                if (isset($nm_identitas)) {
                                    foreach ($nm_identitas as $row) {
                                ?>
                                        <option value="<?php echo $row->id_identitas ?>"><?php echo $row->nm_identitas ?></option>
                                <?php }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div style="text-align:center" class="form-actions no-margin-bottom">
                        <button type="submit" class="btn btn-default btn-round">Submit</button>
                        <a href="<?php echo site_url('Admin_Controller/customer') ?>" class="btn btn-default btn-round">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>