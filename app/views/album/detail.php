<div class="container py-3">
    <h1 class="nerko-one-regular"><?= $data['album']['nama']; ?></h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Durasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['lagu'] as $key => $lagu): ?>
                <tr>
                    <th scope="row"><?= $lagu['id']; ?></th>
                    <td>
                        <a href="<?= BASEURL; ?>/lagu/detail/<?= $lagu['id'] ?>">
                            <?= $lagu['judul']; ?>
                        </a>
                    </td>
                    <td><?= $lagu['durasi_menit']; ?>:<?= sprintf("%02d", $lagu['durasi_detik']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>