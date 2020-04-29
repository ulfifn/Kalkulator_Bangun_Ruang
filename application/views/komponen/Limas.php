<?php $this->load->view('komponen/header');?>
<div class="container">
    <div class="card" style="margin-top:10px">
      <h4 class="card-header">Hitung Limas </h4>
      <div class="card-body">
        <form method="post" action="/hitung/index.php/objek/hitung_limas">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">sisi alas (persegi) : </label>
                    <input type="text" name="sisi" class="form-control" required="true">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Tinggi : </label>
                    <input type="text" name="tinggi" class="form-control" required="true">
                </div>
            </div>
            <h5>Menghitung Luas atau Volume?</h5>
            <label class="custom-control custom-radio">
              <input id="radio1" name="pilih" type="radio" class="custom-control-input" value="luas_limas" checked="checked">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Luas Limas</span>
            </label>
            <label class="custom-control custom-radio">
              <input id="radio2" name="pilih" type="radio" class="custom-control-input" value="volume_limas">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Volume Limas</span>
            </label>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Hitung</button>
            </div>
        </form>
      </div>
    </div>            
</div>
<?php $this->load->view('komponen/footer'); ?>