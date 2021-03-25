<div class="container marketing">
	<div id="myCarousel1" data-ride="carousel">

		<body>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Faktur Pesanan</th>
						<th>Nama Pemesan</th>
						<th>Tanggal Pemesanan</th>
						<th>pembayaran</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					if (isset($data_pemesanan)) {
						foreach ($data_pemesanan as $row) {
					?>
							<tr>
								<td><?= $no ?></td>
								<td><?php echo $row->id_pemesanan; ?></td>
								<td><?php echo $this->session->userdata('NAME') ?></td>
								<td><?php echo $row->tgl_pemesanan; ?></td>
								<td><?php echo currency_format($row->pembayaran); ?></td>
								<td>
									<?php
									if ($row->status_pemesanan == 'Menunggu') { ?>
										<button class="btn btn-warning-disable">Menunggu</button>
										<?php } else {
										if ($row->status_pemesanan == 'Proses') { ?>
											<button class="btn btn-primary-disable">Sedang di Proses</button>
											<?php } else {
											if ($row->status_pemesanan == 'Dirental') { ?>
												<button class="btn btn-success-disable">Sedang di kirim</button>
											<?php } else { ?>
												<button class="btn btn-success-disable">Selesai</button>
									<?php }
										}
									} ?>
								</td>
							</tr>
					<?php }
					}
					?>
				</tbody>
			</table>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>Produk</th>
					<th>Hari</th>
					</th>
				</thead>
				<tbody>
					<?php
					if (isset($data_pemesanan_detail)) {
						foreach ($data_pemesanan_detail as $row) {
					?>
							<tr>
								<td><?php echo $row->nm_motor; ?></td>
								<td><?php echo $row->hari; ?> hari</td>
							</tr>
					<?php }
					}
					?>
				</tbody>
			</table>
			<div align="center">
				<?= anchor('Rmotor_Controller/dataPesanan', 'Kembali', ['class' => 'btn btn-default']) ?>
				<a class="btn btn-outline btn-warning btnPrint" href="<?php echo site_url('Rmotor_Controller/laporan/' . $row->id_pemesanan) ?>">
					<i class="fa fa-print fa-fw"></i> Print
				</a>
			</div>
		</body>

		</html>