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
										<h4 class="modal-title">Tambah Data Mata Kuliah</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form id="formAddMataKuliah" method="POST" action="<?php echo URL; ?>matakuliah/addMataKuliah">
											<div class="form-group">
												<label for="Kode Mata Kuliah">Kode Mata Kuliah</label>
												<input type="text" name="kode_mk" class="form-control" placeholder="Kode Mata Kuliah" >
											</div>
											<div class="form-group">
												<label for="Nama Mata Kuliah">Nama Mata Kuliah</label>
												<input type="text" class="form-control" name="nama_mk" placeholder="Nama Mata Kuliah" >
											</div>
											<div class="form-group">
												<label for="SKS">SKS</label>
												<input type="number" class="form-control" name="sks" placeholder="SKS">
											</div>													
											<div class="form-group">
												<label for="SKS">Semester</label>
												<select class="chosen-select" name="id_semester">
													<?php foreach ($listSemester as $sm): ?>
														<option  value="<?php echo sanitize($sm->id_semester) ?>"><?php echo sanitize($sm->id_semester); ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group">
												<input type="submit" name="btn_addMakul" class="btn btn-primary" value="Simpan">
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
							<th>Kode Mata Kuliah</th>
							<th>Nama Mata Kuliah</th>									
							<th>SKS</th>
							<th>Semester</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($listMatakuliah) > 0): ?>
							<?php foreach($listMatakuliah as $mk): ?>
							<tr>
								<td><?php echo $mk->kode_mk; ?></td>
								<td><?php echo $mk->nama_mk; ?></td>
								<td><?php echo $mk->sks; ?></td>
								<td><?php echo $mk->id_semester; ?></td>	
								<td>
									<a href="<?php echo URL; ?>matakuliah/editmatakuliah/<?php echo $mk->kode_mk ?>" class="btn btn-xs btn-warning">Edit</a>
									<a href="<?php echo URL; ?>matakuliah/removematakuliah/<?php echo $mk->kode_mk ?>" class="btn btn-xs btn-danger">Hapus</a>
								</td>									
							</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="5">
									<h4 class="text-center" >Data Belum Tersedia !</h4>
								</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>