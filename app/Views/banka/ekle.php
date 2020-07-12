<?= $this->extend('templates/base') ?>
<?= $this->section('content')  ?>
<div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Soru Ekle
        </div>
        <div class="card-body">
            <form method="POST" action="/banka">
                <div class="form-group">
                    <label for="ders">Ders</label>
                    <input type="text" class="form-control" id="ders" name="ders" placeholder="Bir Ders Girin" value="<?= old('ders') ?>">
                </div>
                <div class="form-group">
                    <label for="aciklama">Açıklama</label>
                    <textarea class="form-control" id="aciklama" name="aciklama" rows="5"><?= old('aciklama') ?></textarea>
                </div>
                <div class="form-group">    
                    <label for="soru">Soru</label>
                    <textarea class="form-control" id="soru" name="soru" rows="5"><?= old('soru') ?></textarea>
                </div>    
                <div class="form-group">    
                    <label for="asikki">A Şıkkı</label>
                    <input type="text" class="form-control" id="asikki" name="asikki" placeholder="A Şıkkı" value="<?= old('asikki') ?>">
                </div> 
                <div class="form-group">    
                    <label for="bsikki">B Şıkkı</label>
                    <input type="text" class="form-control" id="bsikki" name="bsikki" placeholder="B Şıkkı" value="<?= old('bsikki') ?>">
                </div> 
                <div class="form-group">    
                    <label for="csikki">C Şıkkı</label>
                    <input type="text" class="form-control" id="csikki" name="csikki" placeholder="C Şıkkı" value="<?= old('csikki') ?>">
                </div> 
                <div class="form-group">    
                    <label for="dsikki">D Şıkkı</label>
                    <input type="text" class="form-control" id="dsikki" name="dsikki" placeholder="D Şıkkı" value="<?= old('dsikki') ?>">
                </div> 
                <div class="form-group">    
                    <label for="esikki">E Şıkkı</label>
                    <input type="text" class="form-control" id="esikki" name="esikki" placeholder="E Şıkkı" value="<?= old('esikki') ?>">
                </div> 
                <button type="submit" class="btn btn-primary">KAYDET</button>
            </form>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

<?= $this->endSection() ?>