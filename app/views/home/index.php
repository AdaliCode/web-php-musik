<div class="container py-3">
    <section id="singer" class="mb-5">
        <h1 class="nerko-one-regular">Penyanyi</h1>
        <div class="row g-2">
            <?php foreach ($data['penyanyi'] as $penyanyi): ?>
                <div class="col-md-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $penyanyi['nama']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="album" class="mb-5">
        <h1 class="nerko-one-regular">Album</h1>
        <div class="row g-2">
            <?php foreach ($data['album'] as $penyanyi): ?>
                <div class="col-md-3 text-center">
                    <div class="card h-100">
                        <div class="card-body d-flex align-items-center justify-content-center">
                            <h5 class="card-title"><?= $penyanyi['nama']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>