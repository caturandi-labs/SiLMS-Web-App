<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
					<button data-target="#addNewKelas" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
					<!-- Modal -->
					<div class="container">
						<div id="addNewKelas" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- konten modal-->
								<div class="modal-content">
									<!-- heading modal -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah Data Kelas</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form id="formAddKelas" method="POST" action="<?php echo URL; ?>kelas/addKelas">
											<!-- <div class="form-group">
												<label for="Kode Kelas">Kode Kelas</label>
												<input type="text" name="kode_kelas" class="form-control" placeholder="Kode Kelas" maxlength="4">
											</div> -->
											<div class="form-group">
												<label for="Nama Kelas">Nama Kelas</label>
												<input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" maxlength="12">
											</div>
											<div class="form-group">
												<input type="submit" name="btn_addKelas" class="btn btn-primary" value="Simpan">
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
				<table class="table dataTables table-bordered">
					<thead>
						<tr>
							<th>Nama Kelas</th>									
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="dataKelas">
						<!-- <?php if(count($listdatakelas) > 0): ?>
							<?php foreach($listdatakelas as $kelas): ?>
							<tr>
								<td><?php echo sanitize($kelas->nama_kelas); ?></td>	
								<td>
									<a href="<?php echo URL; ?>kelas/editkelas/<?php echo $kelas->kode_kelas ?>" class="btn btn-xs btn-warning">Edit</a> &nbsp;
									<a href="<?php echo URL; ?>kelas/removeKelas/<?php echo $kelas->kode_kelas ?>" class="btn btn-xs btn-danger">Hapus</a>
								</td>									
							</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="3">
									<h4 class="text-center" >Data Belum Tersedia !</h4>
								</td>
							</tr>
						<?php endif; ?> -->
					</tbody>
				</table>
			</div>
		</div>
	</div>