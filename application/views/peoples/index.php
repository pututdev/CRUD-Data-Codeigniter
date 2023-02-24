<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">Daftar Makhluk Bumi</h3>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach( $peoples as $m) :?>
                    <tr>
                        <th><?= ++$start;?></th>
                        <th><?= $m['name'];?></th>
                        <th><?= $m['email'];?></th>
                        <th>
                            <a href="" class="badge text-bg-warning">Detail</a>
                            <a href="" class="badge text-bg-success">Edit</a>
                            <a href="" class="badge text-bg-danger">Hapus</a>
                        </th>
                    </tr>
                </tbody>
                <?php endforeach;?>
            </table>
            <?= $this->pagination->create_links()?>
        </div>
    </div>
</div>
</div>