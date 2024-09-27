<div class="container py-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['lagu']['judul']; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= date('Y', strtotime($data['lagu']['rilis'])); ?></h6>
            <p class="card-text">
                Album : <?= $data['lagu']['album']; ?><br>
                Penyanyi : <?= $data['lagu']['penyanyi']; ?><br>
                Durasi : <?= $data['lagu']['durasi_menit']; ?>:<?= sprintf("%02d", $data['lagu']['durasi_detik']); ?>
            </p>
            <a href="<?= BASEURL; ?>" class="card-link">Kembali</a>
        </div>
    </div>
</div>