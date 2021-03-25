<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-ok"></i></div>
            </header>
            <div id="collapse2" class="body collapse in">
                <form method="post" action="<?php echo site_url('Rmotor_Controller/prosesEditCustomer') ?>" class="form-horizontal" id="popup-validation">
                    <?php
                    if (isset($data_customer)) {
                        foreach ($data_customer as $row) {
                    ?>
                            <input type="hidden" name="id_user" value="<?php echo $row->id_user; ?>">
                            <input type="hidden" name="lvl_user" value="customer">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Nama Customer</label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required] form-control" name="nm_user" id="nm_user" value="<?php echo $row->nm_user; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Username </label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,minSize[4]] form-control" name="username" id="username" value="<?php echo $row->username; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Password</label>

                                <div class=" col-lg-4">
                                    <input class="validate[required,minSize[4]] form-control" type="password" name="password" id="password" value="<?php echo $row->password; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Confirm Password</label>

                                <div class=" col-lg-4">
                                    <input class="validate[required,equals[password]] form-control" type="password" name="pass2" id="pass2" value="<?php echo $row->password; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Jenis Kelamin </label>
                                <div class="col-lg-4">

                                    <select id="jk" name="jk" class="validate[required] form-control" value="<?php echo $row->jk; ?>">
                                        <option value="">Jenis Kelamin</option>
                                        <option value="laki-laki">laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">No Identitas </label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,minSize[6]] form-control" name="no_identitas" id="no_identitas" value="<?php echo $row->no_identitas; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">No Telp </label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,custom[number]] form-control" name="notelp_user" id="notelp_user" value="<?php echo $row->notelp_user; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Email </label>
                                <div class="col-lg-4">
                                    <input type="text" class="validate[required,custom[email]] form-control" name="email_user" id="email_user" value="<?php echo $row->email_user; ?>">
                                </div>
                            </div>
                            <div style="text-align:center" class="form-actions no-margin-bottom">
                                <button type="submit" class="btn btn-default btn-round">Submit</button>
                                <a href="<?php echo site_url('Rmotor_Controller/profil') ?>" class="btn btn-default btn-round">Cancel</a>
                            </div>
                    <?php }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/admin/plugins/jquery-2.0.3.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/validationengine/js/jquery.validationEngine.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/validationengine/js/languages/jquery.validationEngine-en.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/js/validationInit.js') ?>"></script>
<script>
    $(function() {
        formValidation();
    });
</script>

</body>

</html>