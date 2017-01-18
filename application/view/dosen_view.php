<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
					<button data-target="#addNewDosen" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
					<!-- Modal -->
					<div class="container">
						<div id="addNewDosen" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- konten modal-->
								<div class="modal-content">
									<!-- heading modal -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah Data Dosen</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form id="formAddDosen" method="POST" action="<?php echo URL; ?>dosen/addDosen">
											<div class="form-group">
												<label for="Kode Ruang">Kode Dosen</label>
												<input type="text" name="kode_dosen" class="form-control" placeholder="Kode Dosen" >
											</div>
											<div class="form-group">
												<label for="Nama Dosen">Nama Dosen</label>
												<input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" >
											</div>
											<div class="form-group">
												<label for="Alamat">Alamat</label>
												<input type="text" class="form-control" name="alamat_jalan" placeholder="Alamat" >
											</div>
											<div class="form-group">
												<label for="Kota">Kota</label>
												<input type="text" class="form-control" name="kota" placeholder="Kota">
											</div>
											<div class="form-group">
												<label for="Pendidikan">Pendidikan</label>
												<input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" >
											</div>
											<div class="form-group">
												<input type="submit" name="btn_addDosen" class="btn btn-primary" value="Simpan">
											</div>	
										</form>
									</div>
									<!-- footer modal -->
									<div class="modal-footer">												
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>								
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Kode Dosen</th>
							<th>Nama Dosen</th>									
							<th>Alamat</th>
							<th>Kota</th>
							<th>Pendidikan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($listDosen) > 0): ?>
							<?php foreach($listDosen as $dosen): ?>
							<tr>
								<td><?php echo $dosen->kode_dosen; ?></td>
								<td><?php echo $dosen->nama_dosen; ?></td>
								<td><?php echo $dosen->alamat_jalan; ?></td>
								<td><?php echo $dosen->kota; ?></td>
								<td><?php echo $dosen->pendidikan; ?></td>
								<td>
									<a href="<?php echo URL; ?>dosen/editdosen/<?php echo $dosen->kode_dosen ?>" class="btn btn-xs btn-warning">Edit</a>
									<a href="<?php echo URL; ?>dosen/removedosen/<?php echo $dosen->kode_dosen ?>" class="btn btn-xs btn-danger">Hapus</a>
								</td>
							</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="3">
									<h4 class="text-center" >Data Belum Tersedia !</h4>
								</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>