<?= $this->extend('templates/base')  ?>
<?= $this->section('content') ?>

<div class="card-body">
            <form method="POST" action="/banka">
                <div class="form-group">
                    <label for="ders">Ders</label>
                    <input required type="text" class="form-control" id="ders" name="ders" placeholder="Bir Ders Girin" value=<?=$banka['ders']?>>
                </div>
                <div class="form-group">
                    <label for="aciklama">Açıklama</label>
                    <textarea required class="form-control" id="aciklama" name="aciklama" rows="5"><?=$banka['aciklama']?></textarea>
                </div>
                <div class="form-group">
                    <label for="grup">Grup</label>
                    <input required type="number" class="form-control" id="grup" name="grup" placeholder="Bir soru grubu seçin" value=<?=$banka['grup']?> ></input>
                </div>
                <div class="form-group">    
                    <label for="soru">Soru</label>
                    <textarea required class="form-control" id="soru" name="soru" rows="5"><?=$banka['soru']?></textarea>
                </div>    
                <div class="form-group">    
                    <label for="asikki">A Şıkkı</label>
                    <input required type="text" class="form-control" id="asikki" name="asikki" placeholder="A Şıkkı" value=<?=$banka['asikki']?> >
                </div> 
                <div class="form-group">    
                    <label for="bsikki">B Şıkkı</label>
                    <input required type="text" class="form-control" id="bsikki" name="bsikki" placeholder="B Şıkkı" value=<?=$banka['bsikki']?> >
                </div> 
                <div class="form-group">    
                    <label for="csikki">C Şıkkı</label>
                    <input required type="text" class="form-control" id="csikki" name="csikki" placeholder="C Şıkkı" value=<?=$banka['csikki']?> >
                </div> 
                <div class="form-group">    
                    <label for="dsikki">D Şıkkı</label>
                    <input required type="text" class="form-control" id="dsikki" name="dsikki" placeholder="D Şıkkı" value=<?=$banka['dsikki']?> >
                </div> 
                <div class="form-group">    
                    <label for="esikki">E Şıkkı</label>
                    <input required type="text" class="form-control" id="esikki" name="esikki" placeholder="E Şıkkı" value=<?=$banka['esikki']?> >
                </div> 
                <button type="submit" class="btn btn-primary">KAYDET</button>
            </form>
        </div>

<?= $this->endSection() ?>