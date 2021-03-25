<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi pengelolaan barang sinar anugerah dengan CI & Bootstrap">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/choosen/css/bootstrap.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/choosen/css/bootstrap-responsive.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/choosen/css/style.css') ?>" />
    <style type="text/css">
        .chzn-container-single .chzn-search input {
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico') ?>">


</head>

<body>
    <div class="container">

        <style type="text/css">
            body {
                background-color: #ffffff;
            }

            [class*="span"] {
                float: left;
                min-height: 1px;
                margin-left: 5px;
            }

            .span {
                width: 220px;
            }

            .sign {
                height: 100px;
                border-bottom: 1px solid #000000;
            }

            .text-center {
                text-align: center
            }
        </style>
        <div align="left">
            <?php if (isset($data_contact)) {
                foreach ($data_contact as $row) { ?>
                    <strong style="font-size: x-large; float: left; color: #3a87ad;"><?php echo $row->desc_contact ?></strong> <br /><br />
            <?php }
            } ?>
            <hr />
            <table>
                <tr>
                    <?php if (isset($dt_contact)) {
                        foreach ($data_contact as $row) { ?>
                            <td width="70%"><strong>Alamat : </strong> <?php echo $row->ALMT_CONTACT ?></td>
                    <?php }
                    } ?>
                    <?php if (isset($dt_contact)) {
                        foreach ($data_contact as $row) { ?>
                            <td width="70%"><strong>Telp : </strong> <?php echo $row->TLPN_CONTACT ?> </td>
                    <?php }
                    } ?>
                </tr>
            </table>
        </div>
        <br />

        <div align="center">
            <h3 style="border: 1px solid #333;">Struk</h3>
            <br />
            <div align="left">
                <table>
                    <?php if (isset($data_pemesanan)) {
                        foreach ($data_pemesanan as $row) { ?>
                            <tr>
                                <td width="65%"><strong>ID Struk : </strong> <?php echo $row->id_pemesanan; ?></td>
                                <td style="float: right"><strong>Pelanggan : </strong> <?php echo $row->nm_user; ?></td>
                            </tr>
                            <tr>
                                <td width="65%"><strong>Tanggal Rental : </strong> <?php echo date("d M Y", strtotime($row->tgl_pemesanan)); ?></td>
                                <td style="float: left;"><strong>Alamat : </strong> <?php echo $row->almt_user; ?></td>
                            </tr>

                    <?php }
                    } ?>
                </table>

            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Motor</th>
                        <th>Hari</th>
                        <th>Pembayaran</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                if (isset($data_barang)) {
                    foreach ($data_barang as $row) {
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nm_motor; ?></td>
                                <td><?php echo $row->hari ?></td>
                                <td><?php echo currency_format($row->harga_rental) ?></td>
                            </tr>
                    <?php }
                }
                    ?>
                        </tbody>
            </table>
            <?php if (isset($data_pemesanan)) {
                foreach ($data_pemesanan as $row) { ?>
                    <h5 style="float:right;">
                        Total : <?php echo currency_format($row->pembayaran) ?>
                    </h5>
            <?php }
            } ?>
        </div>
        <br />
        <hr />

        <div class="span center">
            <?php
            if (isset($data_pemesanan)) {
                foreach ($data_pemesanan as $row) { ?>
                    <h5 class="text-center">Tanda Terima</h5>
                    <div class="sign"></div>
                    <h6 class="text-center"><?php echo $row->nm_user ?></h6>
            <?php }
            }
            ?>
        </div>
        <div class="span center" style="float: right">
            <?php
            if (isset($data_contact)) {
                foreach ($data_contact as $row) { ?>
                    <h5 class="text-center"><?php echo $row->desc_contact ?></h5>
                    <div class="sign"></div>
                    <h6 class="text-center">Direktur : <?php echo $row->owner_contact ?></h6>
            <?php }
            }
            ?>
        </div>

        <script type="text/javascript" src="<?php echo base_url('assets/choosen/js/jquery.printPage.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".btnPrint").printPage();
            })
        </script>

    </div>
</body>