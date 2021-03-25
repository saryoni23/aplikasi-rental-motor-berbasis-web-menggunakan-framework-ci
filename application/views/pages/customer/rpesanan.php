<div class="container marketing">
	<div id="myCarousel1" data-ride="carousel">
		<form method="post" action="<?php echo site_url('Rmotor_Controller/confirmPesanan') ?>">

			<input type="hidden" name="id_pemesanan" value="<?= $id_pemesanan; ?>" readonly>
			<input type="hidden" name="pembayaran" value="<?= $this->cart->total() ?>">
			<input id="tgl_pemesanan" type="hidden" name="tgl_pemesanan" data-date-format="dd-mm-yyyy" value="<?php echo isset($date) ? $date : date('d-m-Y') ?>" data-date="12-02-2012">
			<input type="hidden" name="status_pemesanan" value="Menunggu" readonly>

			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Produk</th>
						<th>Hari</th>
						<th>Biaya Rental</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
					foreach ($this->cart->contents() as $items) :
						$i++;
					?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $items['name'] ?></td>
							<td><?= $items['hari'] ?></td>
							<td align="right"><?= currency_format($items['price'], 0, ',', '.') ?></td>
							<td align="right"><?= currency_format($items['subtotal'], 0, ',', '.') ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<td align="right" colspan="4">Total </td>
						<td align="right"><?= currency_format($this->cart->total(), 0, ',', '.'); ?></td>
					</tr>
				</tfoot>
			</table>
			<div align="center">
				<?= anchor('Rmotor_Controller/bersihkanrpesanan', 'Bersihkan Pesanan', ['class' => 'btn btn-danger']) ?>

				<button type="submit" class="btn btn-success">Lanjutkan</button>

			</div>
		</form>
		</body>

		</html>