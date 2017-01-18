
	<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
					<button data-target="#addNewRuang" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
					<!-- Modal -->

					<div class="container">
						<div id="addNewRuang" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- konten modal-->
								<div class="modal-content">
									<!-- heading modal -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah Data Ruang</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form id="formAddRuang" method="POST" action="<?php echo URL; ?>ruang/addruang">												
											<div class="form-group">
												<label for="Nama Ruang">Nama Ruang</label>
												<input type="text" class="form-control" name="nama_ruang" placeholder="Nama Ruang" maxlength="12">
											</div>
											<div class="form-group">
												<label for="kapasitas">Kapasitas</label>
												<input type="number" class="form-control" name="kapasitas" placeholder="Kapasitas Ruangan">
											</div>											
											<input type="submit" name="btn_addRuang" class="btn btn-primary" value="Simpan">
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
							<th>Ruang</th>
							<th>Kapasitas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($listRuangs) > 0): ?>
							<?php foreach($listRuangs as $ruang): ?>
							<tr>
								<td><?php echo $ruang->ruang; ?></td>
								<td><?php echo $ruang->kapasitas; ?></td>
								<td>
									<a href="<?php echo URL; ?>ruang/editruang/<?php echo $ruang->kode_ruang ?>" class="btn btn-xs btn-warning"> Edit</a>&nbsp;
									<a href="<?php echo URL; ?>ruang/removeRuang/<?php echo $ruang->kode_ruang ?>" class="btn btn-xs btn-danger">Hapus</a>
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