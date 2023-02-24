<div class="container">

    <!-- area Tombol -->
    <?php if($this->session->flashdata('pesan')) :?>
    <div class="row-mt3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mahasiswa &nbsp;<strong>berhasil !!</strong>&nbsp;<?=$this->session->flashdata('pesan');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
    </div>
    <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('mahasiswa/tambah');?>" class="btn btn-success">Tambah Data Mahasiswa</a>
        </div>
    </div>

     <div class="row mt-3">
         <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search data ..." name="keyword">
                <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
         </div>
     </div>
    <!-- end area -->

   <div class="row mt-3">
    <div class="col-md-6">

    <h4><?= $judul;?></h4>
    <?php if( empty($mahasiswa)) :?>
        <div class="alert alert-danger" role="alert">
             Data Yang Anda cari tidak ditemukan
        </div>
    <?php endif;?>

    <ul class="list-group">
        <?php foreach($mahasiswa as $mhs):?>
        <li class="list-group-item"><?=$mhs['nama'];?>
        <a class="badge text-bg-danger" id="hapus" onclick="return confirm('Yakin Ingin Menghapus Data Yang Dipilih ?')" href="<?= base_url('mahasiswa/hapus/');?><?= $mhs['id'];?>">Hapus</a>
        <a class="badge text-bg-primary" href="<?= base_url('mahasiswa/detail/');?><?= $mhs['id'];?>">Detail</a>
        <a class="badge text-bg-success" href="<?= base_url('mahasiswa/ubah/');?><?= $mhs['id'];?>">Ubah</a>
        </li>
        <?php endforeach;?>
        </ul>

    </div>
   </div>
</div>
</div>