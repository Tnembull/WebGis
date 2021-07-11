                <!-- Begin Page Content -->
                <div class="container-fluid">

                	<!-- Page Heading -->
                	<h1 class="h3 mb-4 text-gray-800">Form Edit Data</h1>
                	<div class="card shadow mb-4">
                		<div class="card-header py-3">
                			<h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                		</div>
                		<div class="card-body">
                			<form method="post" action="<?= base_url('Home/proses_edit_data');?>">
                            <input type="hidden" name="id" value="<?= $wisata['id'];?>">
                				<div class="form-group row">
                					<label for="nama" class="col-sm-2 col-form-label">Nama</label>
                					<div class="col-sm-6">
                						<input type="text" class="form-control" id="nama" name="nama"  value="<?= $wisata['nama'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="cord" class="col-sm-2 col-form-label">Cordinate</label>
                					<div class="col-sm-6">
                						<input type="text" class="form-control" id="cord" name="cord" value="<?= $wisata['cord'];?>" >
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                					<div class="col-sm-6">
                						<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $wisata['alamat'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
                					<div class="col-sm-6">
                						<input type="number" class="form-control" id="harga" name="harga" value="<?= $wisata['harga'];?>">
                					</div>
                				</div>
                				<div class="form-group row">
                					<label for="alamat" class="col-sm-2 col-form-label"></label>
                					<div class="col-sm-6">
                						<button type="submit" class="btn btn-primary">
                                            Ubah
                                        </button>
                					</div>
                				</div>
                				
                			</form>
                		</div>
                	</div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->