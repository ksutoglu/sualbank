<?= $this->extend('templates/base') ?>
<?= $this->section('content')  ?>
<div class="my-4">
        <a href="/banka/ekle" class="btn btn-primary btn-block"> Soru Ekle </a>
    </div>
   <!-- DataTables Example -->
   <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>DERS</th>
                    <th>AÇIKLAMA</th>
                    <th>GRUP</th>
                    <th>SORU</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                    <th>Detay</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($bankalar as $banka) : ?>
                  <tr>
                    <td><?= esc($banka['id']) ?></td>
                    <td><?= esc($banka['ders'] )?></td>
                    <td><?= esc($banka['aciklama']) ?></td>
                    <td><?= esc($banka['grup']) ?></td>
                    <td><?= esc($banka['soru'] )?></td>
                    <td><?= esc($banka['created_at']) ?></td>
                    <td><?= esc($banka['updated_at']) ?></td>
                    <td><a class="btn btn-info btn-block" href="/banka/<?= $banka['id'] ?>">Detay</a></td>
                  </tr>
                <?php endforeach  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

<?= $this->endSection() ?>