<div class="row justify-content-md-center align-items-center">
    <hr>
    <H1 class="display-6 text-center">Silakan Daftar</H1>
    <hr>
    <!-- Indicators -->
    <div class=" col-sm-6 ">
        <div class=" col-sm-12">
            <form method="post" action="<?php echo site_url('Login_Controller/prosesDaftar') ?>" id="popup-validation">
                <input type="hidden" name="lvl_user" value="customer">
                <div class="col-sm-5">
                    <label for="nm_user" class="form-label">Nama Lengkap
                        <input type="text" class="validate[required,minSize[6]] form-control" name="nm_user" id="nm_user" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="id_identitas">Pilih Identitas
                        <select class="form-control" name="id_identitas">
                            <option value=""></option>
                            <?php
                            if (isset($data_identitas)) {
                                foreach ($data_identitas as $row) {
                            ?>
                                    <option value="<?php echo $row->id_identitas; ?> "><?php echo $row->nm_identitas; ?> </option>
                            <?php }
                            }
                            ?>
                        </select>
                    </label>
                </div>
                <div class="col-sm-5">
                    <label for="username" class="form-label">Username
                        <input type="text" class="validate[required,minSize[6]] form-control" name="username" id="username" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="password" class="form-label">Password
                        <input type="password" class="validate[required,minSize[6]] form-control" name="password" id="password" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="no_identitas" class="form-label">Nomor Identitas
                        <input type="text" class="validate[required,minSize[6]] form-control" name="no_identitas" id="no_identitas" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="almt_user" class="form-label">Alamat Anda
                        <input type="text" class="validate[required,minSize[6]] form-control" name="almt_user" id="almt_user" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="notelp_user" class="form-label">Nomor Telepon Anda
                        <input type="text" class="validate[required,minSize[6]] form-control" name="notelp_user" id="notelp_user" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="email_users" class="form-label">Email Anda
                        <input type="text" class="validate[required,minSize[6]] form-control" name="email_user" id="email_user" required></label>
                </div>
                <button type="submit" class="btn btn-primary ">Daftar</button>
                <a href="<?php echo site_url('Login_Controller') ?>" class="btn btn-default btn-round">Login</a>
            </form>
        </div>
    </div>
</div>
<hr>