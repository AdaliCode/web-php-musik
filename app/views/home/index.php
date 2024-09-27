<div class="container py-3">
    <h1 class="nerko-one-regular">Musik Terbaru</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penyanyi</th>
                <th scope="col">Album</th>
                <th scope="col">Durasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['lagu'] as $key => $lagu): ?>
                <tr>
                    <th scope="row"><?= $key + 1; ?></th>
                    <td><?= $lagu['judul']; ?></td>
                    <td><?= $lagu['penyanyi']; ?></td>
                    <td><?= $lagu['album']; ?></td>
                    <td><?= $lagu['durasi_menit']; ?>:<?= sprintf("%02d", $lagu['durasi_detik']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>