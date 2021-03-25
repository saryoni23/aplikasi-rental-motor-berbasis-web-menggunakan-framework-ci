<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $formTitle ?>
            </div>
            <div class="panel-body">
                <?php if (isset($data_contact)) {
                    foreach ($data_contact as $row) {
                ?>
                        <div class="col-lg-6">
                            <dl class="dl-horizontal">
                                <dt>&nbsp</dt>
                                <dd>&nbsp</dd>
                                <br />
                                <dt> Hello </dt>
                                <dd><?php echo $this->session->userdata('NAME') ?></dd>
                                <br />
                            </dl>
                        </div>

                        <div class="col-lg-6">
                            <dl class="dl-horizontal">
                                <dt>&nbsp</dt>
                                <dd>&nbsp</dd>
                                <br />
                                <dt> Aplikasi :</dt>
                                <dd>Rmotor Online</dd>
                                <br />
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="dl-horizontal">
                                <dt>&nbsp</dt>
                                <dd>&nbsp</dd>
                                <br />
                                <dt>&nbsp</dt>
                                <dd>&nbsp</dd>
                            </dl>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</div>

