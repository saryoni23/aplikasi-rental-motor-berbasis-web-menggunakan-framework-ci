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
                                <th>No</th>
                                <th>Faktur Pemesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (isset($data_pemesanan)) {
                                foreach ($data_pemesanan as $row) {
                            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->id_pemesanan; ?></td>
                                        <td><?php echo $row->nm_user; ?></td>

                                        <td><?php echo $row->pembayaran; ?></td>
                                        <td>
                                            <?php
                                            if ($row->status_pemesanan == 'Menunggu') { ?>
                                                <a href="" class="btn btn-info btn-round" disabled> Menunggu</button>
                                                    <a href="<?php echo site_url('Admin_Controller/prosesPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Proses</button>
                                                        <a href="" class="btn btn-default btn-round" disabled> Dirental</button>
                                                            <a href="" class="btn btn-default btn-round" disabled> Dikembalikan/Selesai</button>
                                                                <?php } else {
                                                                if ($row->status_pemesanan == 'Proses') { ?>
                                                                    <a href="" class="btn btn-default btn-round" disabled> Menunggu</button>
                                                                        <a href="" class="btn btn-info btn-round" disabled> Proses</button>
                                                                            <a href="<?php echo site_url('Admin_Controller/DirentalPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Dirental</button>
                                                                                <a href="" class="btn btn-default btn-round" disabled> Dikembalikan/Selesai</button>
                                                                                    <?php } else {
                                                                                    if ($row->status_pemesanan == 'Dirental') { ?>
                                                                                        <a href="<?php echo site_url('Admin_Controller/detailPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Struk</button>
                                                                                            <a href="" class="btn btn-default btn-round" disabled> Menunggu</button>
                                                                                                <a href="" class="btn btn-default btn-round" disabled> Proses</button>
                                                                                                    <a href="" class="btn btn-info btn-round" disabled> Dirental</button>
                                                                                                        <a href="<?php echo site_url('Admin_Controller/finishPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Selesai</button>
                                                                                                            <?php } else {
                                                                                                            if ($row->status_pemesanan == 'Dikembalikan') { ?>
                                                                                                                <a href="<?php echo site_url('Admin_Controller/detailPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Struk</button>
                                                                                                                    <a href="" class="btn btn-default btn-round" disabled> Menunggu</button>
                                                                                                                        <a href="" class="btn btn-default btn-round" disabled> Proses</button>
                                                                                                                            <a href="" class="btn btn-info btn-round" disabled> Dirental</button>
                                                                                                                                <a href="" class="btn btn-info btn-round" disabled> Selesai/Kembalikan</button>
                                                                                                                                <?php } else { ?>
                                                                                                                                    <a href="<?php echo site_url('Admin_Controller/detailPemesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Struk</button>
                                                                                                                                        <a href="" class="btn btn-default btn-round" disabled> Menunggu</button>
                                                                                                                                            <a href="" class="btn btn-default btn-round" disabled> Proses</button>
                                                                                                                                                <a href="" class="btn btn-default btn-round" disabled> Dirental</button>
                                                                                                                                                    <a href="" class="btn btn-info btn-round" disabled> Selesai/Kembalikan</button>
                                                                                                                                    <?php }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                } ?>
                                        </td>
                                    </tr>
                                <?php
                            }

                                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
