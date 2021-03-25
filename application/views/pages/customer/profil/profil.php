<div class="container marketing">
    <div id="myCarousel1" data-ride="carousel">

        <body>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Nama Customer</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>no_identitas</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if (isset($data_customer)) {
                        foreach ($data_customer as $row) {
                    ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nm_user; ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->jk; ?></td>
                                <td><?php echo $row->no_identitas; ?></td>
                                <td><?php echo $row->almt_user; ?></td>
                                <td><?php echo $row->notelp_user; ?></td>
                                <td><?php echo $row->email_user; ?></td>
                                <td>
                                    <a href="<?php echo site_url('Rmotor_Controller/editprofil/' . $row->id_user); ?>" class="btn btn-default btn-round"> Edit</button>
                                        <a href="<?php echo site_url('Admin_Controller/prosesHapusCustomer/' . $row->id_user); ?>" class="btn btn-default btn-round"> Hapus</button>
                                </td>
                            </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
            <script src="<?php echo base_url('assets/bootstrap-rmotor /assets/js/jquery-1.10.2.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/bootstrap-rmotor/dist/js/bootstrap.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/bootstrap-rmotor/assets/js/holder.js') ?>"></script>
            <footer>
                <div class="container">
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2018 Rmotor online &</p>
                </div>
            </footer>
    </div>
</div>
</body>



</html>