                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<h1 class="h3 mb-4 text-gray-800">Data Wisata</h1>
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                            <a href="" class="btn btn-primary btn-small">Tambah Data</a>
                		</div>
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Nama</th>
                							<th>Gambar</th>
                							<th>Cordinate</th>
                							<th>Alamat</th>
                							<th>Harga</th>
                							<th>Aksi</th>
                						</tr>
                					</thead>
                					<tbody>
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
                					</tbody>
                					<?php endforeach ?>
                				</table>

                			</div>
                		</div>
                	</div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->