<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-2 text-info"><strong>Qrcode Generator</strong></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>"><i class="fas fa-fw fa-home"></i></a></li>
              <li class="breadcrumb-item text-info">Item</li>
              <li class="breadcrumb-item active">Qr-Code</li>
              <li class="breadcrumb-item">Generator</li>
            </ol>
          </div>
        </div>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Qr Code -->
      <div class="box ml-4">
        <div class="box-header">
          <h3 class="box-title">Qr-Code Generator<i class="fas fa-fw fa-qrcode"></i></h3>
        </div>
        <div class="box-body">
          <?php 
            $qrCode = new Endroid\QrCode\QrCode($row->barcode);
            $qrCode->writeFile('assets/img/qr-code/Qr-code-'.$row->item_id.'.png');
          ?>
          <img style="width: 20%;" src="<?= base_url('assets/img/qr-code/Qr-code-'.$row->item_id.'.png') ?>" alt="<?= $row->barcode; ?>">
          <div class="ml-2" style="font-size: 20px;"><?= $row->barcode; ?></div>
        </div>
      </div>
      <br>
      <a href="<?= site_url('item/cancel/'.$row->item_id) ?>" class="btn btn-success btn-icon-split ml-4">
        <span class="icon text-white-50">
            <i class="fas fa-fw fa-arrow-left"></i>
        </span>
        <span class="text">Back</span>
      </a>
      <a href="<?= base_url('item/qrcode_print/').$row->item_id; ?>" target="_blank" onclick="return confirm('Are you sure want to print qr-code <?= $row->barcode; ?> ?');" class="btn btn-secondary btn-icon-split ml-2">
      <span class="icon text-white-50">
          <i class="fas fa-fw fa-print"></i>
      </span>
      <span class="text">Print Qr-Code</span>
    </a>
    </section>