<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $formTitle ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>Foto</th>
                                <th>motor</th>
                                <th>Jenis</th>
                                <th>Biaya Rental</th>
                                <th>No Polisi</th>
                                <th>Tahun Buat</th>
                                <th>Warna</th>
                                <th>Merek</th>
                                <th>Stok</th>
                                <th>
                                    <a href="<?php echo site_url('Admin_Controller/tambahmotor'); ?>" class="btn btn-default btn-round"> Tambah</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (isset($data_motor)) {
                                foreach ($data_motor as $row) {
                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <img src="<?php echo base_url('uploads/' . $row->foto_motor) ?>" height="25px" width="50px">
                                        </td>
                                        <td><?php echo $row->nm_motor; ?></td>
                                        <td><?php echo $row->nm_jenis; ?></td>
                                        <td><?php echo currency_format($row->harga_rental); ?></td>
                                        <td><?php echo $row->no_polisi; ?></td>
                                        <td><?php echo $row->thn_buat; ?></td>
                                        <td><?php echo $row->nm_warna; ?></td>
                                        <td><?php echo $row->nm_merek; ?></td>
                                        <td><?php echo $row->stok_motor; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('Admin_Controller/editmotor/' . $row->id_motor); ?>" class="btn btn-default btn-round"> Edit</button>
                                                <a href="<?php echo site_url('Admin_Controller/prosesHapusmotor/' . $row->id_motor); ?>" class="btn btn-default btn-round"> Hapus</button>
                                        </td>
                                    </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
            