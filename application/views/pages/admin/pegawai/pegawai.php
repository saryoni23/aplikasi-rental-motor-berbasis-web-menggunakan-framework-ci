<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $formTitle?>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Username</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>
                                <a href="<?php echo site_url('Admin_Controller/tambahPegawai');?>" class="btn btn-default btn-round"> Tambah</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                    if(isset($data_pegawai)){
                        foreach($data_pegawai as $row){
                            ?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->nm_user; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->notelp_user; ?></td>
                            <td><?php echo $row->email_user; ?></td>
                            <td>
                                <a href="<?php echo site_url('Admin_Controller/editPegawai/'.$row->id_user);?>" class="btn btn-default btn-round"> Edit</button>
                                <a href="<?php echo site_url('Admin_Controller/prosesHapusPegawai/'.$row->id_user);?>" class="btn btn-default btn-round"> Hapus</button>
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