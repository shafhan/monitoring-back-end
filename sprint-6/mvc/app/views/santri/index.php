<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tampilModalTambah" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Santri
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/santri/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Santri..." name="keyword" id="keyword">
                    <button class="btn btn-primary-secondary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Santri</h3>
                <ul class="list-group">
                <?php foreach ($data['sant'] as $sant): ?>
                    <li class="list-group-item">
                    <?= $sant['nama'] ?> 
                    <a href="<?= BASEURL; ?>/santri/detail/<?= $sant['id'] ?>" class="badge bg-primary float-end ms-2">Detail</a>
                    <a href="<?= BASEURL; ?>/santri/ubah/<?= $sant['id'] ?>" class="badge bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sant['id'] ?>">Ubah</a>
                    <a href="<?= BASEURL; ?>/santri/hapus/<?= $sant['id'] ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('yakin?');">hapus</a></li>
                <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Santri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/santri/tambah" method="post">
                <input type="hidden" id="id" name="id">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
                </form>
        </div>
    </div>
</div>