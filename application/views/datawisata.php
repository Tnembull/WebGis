                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Wisata</h1>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Cordinate</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        $no =1;
                        foreach ($wisata as $r) : ?> 
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['gambar'] ?></td>
                            <td><?= $r['cord'] ?></td>
                            <td><?= $r['alamat'] ?></td>
                            <td><?= $r['harga'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                        <?php endforeach ?>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

