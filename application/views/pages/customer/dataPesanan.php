<div class="container marketing">
	<div id="myCarousel1" data-ride="carousel">

		<body>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Tanggal Pemesanan</th>
						<th>Biaya Rental</th>
						<th>Status</th>
						<th>Detail</th>
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
								<td><?php echo $row->tgl_pemesanan; ?></td>
								<td><?php echo currency_format($row->pembayaran); ?></td>
								<td>
									<?php
									if ($row->status_pemesanan == 'Menunggu') { ?>
										<button class="btn btn-warning">Menunggu</button>
										<?php } else {
										if ($row->status_pemesanan == 'Proses') { ?>
											<button class="btn btn-primary">Sedang di Proses</button>
											<?php } else {
											if ($row->status_pemesanan == 'Dikirim') { ?>
												<button class="btn btn-success">Diterima</button>
												<?php } else {
												if ($row->status_pemesanan == 'Dikembalikan') { ?>
													<button class="btn btn-success">Dikembalikan</button>
												<?php } else { ?>
													<button class="btn btn-success">Selesai</button>
									<?php }
											}
										}
									} ?>
								</td>
								<td>
									<a href="<?php echo site_url('Rmotor_Controller/detailPesanan/' . $row->id_pemesanan); ?>" class="btn btn-default btn-round"> Lihat Detail</a>
								</td>
							</tr>
					<?php }
					}
					?>
				</tbody>
			</table>
			<div align="center">
				<?= anchor('Rmotor_Controller', 'Rental Lagi ?', ['class' => 'btn btn-primary']) ?>
				<?= anchor('Rmotor_Controller', 'Kembali', ['class' => 'btn btn-success']) ?>
			</div>
		</body>

		</html>