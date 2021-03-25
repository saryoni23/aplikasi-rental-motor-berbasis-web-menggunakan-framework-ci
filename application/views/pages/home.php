<div class="container marketing">
  <h1 class=" display-6 text-center">Selamat Datang</h1>
  <hr>
  <?php if ($this->cart->total_items() != '0') { ?>
    <div class="alert btn-block alert-error fade in btn btn-primary"><button type="button" class="close" data-dismiss="alert">×</button><strong>Anda Memiliki <a href="<?php echo site_url('Rmotor_Controller/rpesanan') ?>"> <?php echo $this->cart->total_items() ?> pesanan </a> di pesanan anda</strong></div>
  <?php  }
  ?>
  <?php
  $message = $this->session->flashdata('dataPesanan');
  if ($message) {

    echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
  } ?>
  <div id="myCarousel1" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class="row">
          <?php
          if (isset($data_menu)) {
            foreach ($data_menu as $row) {
          ?>
              <div class="col-lg-4">
                <form method="post" action="<?php echo site_url('Rmotor_Controller/tambahToCart') ?>">
                  <input type="hidden" name="id_motor" value="<?php echo $row->id_motor ?>">
                  <input type="hidden" name="harga_rental" value="<?php echo $row->harga_rental ?>">
                  <input type="hidden" name="nm_motor" value="<?php echo $row->nm_motor ?>">
                  <img src="<?php echo base_url('uploads/' . $row->foto_motor) ?>" alt="Generic placeholder image">
                  <h4><?php echo $row->nm_motor; ?></h4>
                  <p>Biaya Rental : <strong><?php echo currency_format($row->harga_rental); ?></strong> /Hari </p>
                  <input type="number" name="hari" placeholder="hari" required>
                  <button type="submit">Pesan</button>
                </form>
              </div>
          <?php }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>