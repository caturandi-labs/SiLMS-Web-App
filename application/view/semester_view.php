<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-top:20px;margin-bottom: 20px; " class="col-md-6">
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
										<h4 class="modal-title">Tambah Data Semester</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form method="POST" id="formAddSemester" action="<?php echo URL; ?> semester/addsemester">
											<div class="form-group">
												<label for="Semester"> Semester</label>
												<input type="text" class="form-control" name="semester" placeholder="Semester" maxlength="2" required>
											</div>
											
											<input type="submit" name="btn_addsemester" class="btn btn-primary" value="Simpan">
																							
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
							<th>Semester</th>		
							<th>Aksi</th>							
						</tr>
					</thead>
					<tbody>
						<?php if(count($listSemester) > 0): ?>
							<?php foreach($listSemester as $semester): ?>
							<tr>
								<td><?php echo $semester->semester; ?></td>		
								<td>
									<a href="<?php echo URL; ?>semester/editsemester/<?php echo $semester->id_semester ?>" class="btn btn-xs btn-warning">Edit</a>
									<a href="<?php echo URL; ?>semester/removesemester/<?php echo $semester->id_semester ?>" class="btn btn-xs btn-danger">Hapus</a>
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