<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Ubah / Edit Data Mahasiswa
            </div>
            <div class="card-body">
        
                <form action="" method="post">
                
                <input type="hidden" name="id" id="id" value="<?= $mahasiswa['id'];?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan Nama Anda" value="<?= $mahasiswa['nama'];?>">
                    <small id="emailHelp" class="form-text-danger"><?= form_error('nama');?></small>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlInput1" class="form-label">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Contoh : 123456" value="<?= $mahasiswa['nrp'];?>>
                    <small id="emailHelp" class="form-text-danger"><?= form_error('nrp');?></small>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example123@microsoft.com" value="<?= $mahasiswa['email'];?>>
                    <small id="emailHelp" class="form-text-danger"><?= form_error('email');?></small>
                </div>
                <div class="form-group mt-3">
                <label for="exampleFormControlInput1" class="form-label">Bidang Study :</label>
                <select class="form-select"  id="jurusan" name="jurusan">
                    <option selected>Jurusan</option>
                    <?php foreach($jurusan as $j):?>
                    <?php if($j == $mahasiswa['jurusan']):?>
                    <option value="<?= $j;?>" selected><?= $j;?></option>
                    <?php else :?>
                        <option value="<?= $j;?>"><?= $j;?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                    </select>
                   
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="ubah" id="ubah" style="margin-left: 350px;">Ubah Data</button>

                </form>

            </div>
            </div>


        </div>
    </div>
</div>