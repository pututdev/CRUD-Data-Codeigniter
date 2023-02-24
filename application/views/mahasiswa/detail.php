<div class="container"></div>
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card center" style="margin-left: 100px;">
            <div class="card-header">
                Detail Data 
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama'];?></h5>
                <h6 class="card-title"><?= $mahasiswa['email'];?></h6>
                <p class="card-text"><?= $mahasiswa['nrp'];?></p>
                <p class="card-text"><?= $mahasiswa['jurusan'];?></p>
                <a href="<?= base_url('mahasiswa');?>" class="btn btn-primary">Kembali</a>
            </div>
            </div>

        </div>
    </div>
</div>