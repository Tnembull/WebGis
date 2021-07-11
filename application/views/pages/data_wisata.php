                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<h1 class="h3 mb-4 text-gray-800">Data Wisata</h1>
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<button type="button" class="btn btn-primary" data-toggle="modal"
                				data-target="#exampleModal">
                				Tambah Data
                			</button>
                		</div>
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Nama</th>
                							<th>Cordinate</th>
                							<th>Alamat</th>
                							<th>Harga</th>
                							<th>Gambar</th>
                							<th>Aksi</th>
                						</tr>
                					</thead>
                					<tbody>
                						<?php 
                        $no =1;
                        foreach ($wisata as $r) : ?>
                						<tr>
                							<td><?= $no++; ?></td>
                							<td><?= $r['nama']; ?></td>
                							<td><?= $r['cord']; ?></td>
                							<td><?= $r['alamat']; ?></td>
                							<td><?= $r['harga']; ?></td>
                							<td><img src="<?=base_url('gambar/') . $r['gambar']; ?>" alt="<?= $r['nama']; ?>" style="widht:100px;height:100px;"></td>
                							<td>
                								<button type="button" class="btn-circle btn-sm btn-warning" data-toggle="modal"
                									data-target="#editmodal<?= $r['id']?>">
                									Edit
                								</button>
                								<a href="<?= base_url();?>Home/hapus_data/<?= $r['id']; ?>"
                									class="btn-circle btn-sm btn-danger"><i
                										class="fas fa-trash-alt"></i></a>
                							</td>
                						</tr>
										<?php endforeach ?>
                					</tbody>
                				</table>

                			</div>
                		</div>
                	</div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


                <!-- Modal Tambah Data -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                	aria-labelledby="exampleModalLabel" aria-hidden="true">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<?= form_open_multipart('Home/proses_tambah_data');?>
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama"
                							placeholder="ex: Pantai Mutun " required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="cord" class="col-sm-2 col-form-label">Cordinate</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="cord"
                							placeholder="ex: 8.3405,115.0920" required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                					<div class="col">
                						<input type="text" class="form-control" id="alamat" name="alamat"
                							placeholder="ex: Jalan Hanura" required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
                					<div class="col">
                						<input type="number" class="form-control" id="harga" name="harga"
                							placeholder="ex: 35000" required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Gambar</label>
                					<div class="col">
                						<input type="file" class="form-control" id="userfile" name="userfile"
                							size="20" required>
                					</div>
                				</div>
                			</div>
                			<div class="modal-footer">
                				<button type="reset" class="btn btn-danger">Reset</button>
                				<button type="submit" class="btn btn-primary">Simpan</button>
                				<?= form_close();?>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- Akhir Modal Tambah Data -->


				<!-- Modal Edit Data -->
                <!-- Modal -->
				<?php 
				$no = 0;
				foreach ($wisata as $r): $no++; ?>
                <div class="modal fade" id="editmodal<?= $r['id']; ?>" tabindex="-1" role="dialog"
                	aria-labelledby="exampleModalLabel" aria-hidden="true">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<?= form_open_multipart('Home/proses_edit_data');?>
								<input type="hidden" name="id" value="<?= $r['id'];?>">
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama"
										value="<?= $r['nama'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="cord" class="col-sm-2 col-form-label">Cordinate</label>
                					<div class="col">
                						<input type="text" class="form-control" id="cord" name="cord"
										value="<?= $r['cord'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                					<div class="col">
                						<textarea type="text" class="form-control" rows="3" id="alamat" name="alamat"
										value=""><?= $r['alamat'];?></textarea>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
                					<div class="col">
                						<input type="number" class="form-control" id="harga" name="harga"
										value="<?= $r['harga'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                					<div class="col">
                						<input type="file" class="form-control" id="gambar" name="userfile">
                					</div>
                				</div>
								<img src="<?=base_url('gambar/') . $r['gambar']; ?>" alt="<?= $r['gambar'];?>" style="width:100px;height:100px;">
                			</div>
                			<div class="modal-footer">
                				<button type="submit" class="btn btn-primary">Ubah</button>
                				<?= form_close();?>
                			</div>
                		</div>
                	</div>
                </div>
				<?php endforeach; ?>
                <!-- Akhir Modal Edit Data -->