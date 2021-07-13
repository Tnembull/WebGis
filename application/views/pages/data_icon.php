                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<h1 class="h3 mb-4 text-gray-800">Data Icons</h1>
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<button type="button" class="btn btn-primary" data-toggle="modal"
                				data-target="#exampleModal">
                				Tambah Icons
                			</button>
                		</div>
                		<div class="card-body">
                			<div class="table-responsive">
                				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                					<thead>
                						<tr>
                							<th>No</th>
                							<th>Nama Icons</th>
                							<th>Gambar Icons</th>
                							<th>Aksi</th>
                						</tr>
                					</thead>
                					<tbody>
                						<?php 
                        $no =1;
                        foreach ($icons as $r) : ?>
                						<tr>
                							<td><?= $no++; ?></td>
                							<td><?= $r['nama_icon']; ?></td>
                							<td><img src="<?=base_url('gambar/icons/') . $r['gambar_icon']; ?>" alt="<?= $r['nama_icon']; ?>" style="widht:100px;height:100px;"></td>
                							<td>
                								<button type="button" class="btn-circle btn-sm btn-warning" data-toggle="modal"
                									data-target="#editmodal<?= $r['id_icon']?>">
                									Edit
                								</button>
                								<a href="<?= base_url();?>Home/hapus_data/<?= $r['id_icon']; ?>"
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
                				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Icon</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<?= form_open_multipart('Home/proses_tambah_icon');?>
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama Icons</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama"
                							placeholder="ex: Kebun Binatang " required>
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Gambar Icons</label>
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
				foreach ($icons as $r): $no++; ?>
                <div class="modal fade" id="editmodal<?= $r['id_icon']; ?>" tabindex="-1" role="dialog"
                	aria-labelledby="exampleModalLabel" aria-hidden="true">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Form Edit Icon</h5>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<?= form_open_multipart('Home/proses_edit_icon');?>
								<input type="hidden" name="id_icon" value="<?= $r['id_icon'];?>">
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama Icons</label>
                					<div class="col">
                						<input type="text" class="form-control" id="nama" name="nama"
										value="<?= $r['nama_icon'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="gambar" class="col-sm-2 col-form-label">Gambar Icons</label>
                					<div class="col">
                						<input type="file" class="form-control" id="gambar" name="userfile">
                					</div>
                				</div>
								<img src="<?=base_url('gambar/icons/') . $r['gambar_icon']; ?>" alt="<?= $r['nama_icon'];?>" style="width:100px;height:100px;">
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