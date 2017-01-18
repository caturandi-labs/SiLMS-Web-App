<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
					<button data-target="#addTahunAjaran" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
					<!-- Modal -->
					<div class="container">
						<div id="addTahunAjaran" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- konten modal-->
								<div class="modal-content">
									<!-- heading modal -->
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah Data Tahun Ajaran</h4>
									</div>
									<!-- body modal -->
									<div class="modal-body">
										<!-- form -->
										<form id="formAddTahunAjaran" method="POST" action="<?php echo URL; ?>tahunajaran/addtahunajaran">												
											<div class="form-group">
												<label for="Tahun Ajaran">Tahun Ajaran</label>
												<input type="text" class="form-control" name="tahun" placeholder="Tahun Ajaran" maxlength="4">
											</div>
											<div class="form-group">
												<input type="submit" name="btn_addtahunajaran" class="btn btn-primary" value="Simpan">
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
							<th>Tahun Ajaran</th>	
							<th>Aksi</th>								
						</tr>
					</thead>
					<tbody class="data">
						<!-- <?php if(count($listTahunajaran) > 0): ?>
							<?php foreach($listTahunajaran as $ajar): ?>
							<tr>
								<td><?php echo $ajar->kode_tahun; ?></td>
								<td><?php echo $ajar->tahun; ?></td>		
								<td>
									<a  href="<?php echo URL; ?>tahunajaran/edittahun/<?php echo $ajar->kode_tahun ?>" name="edit" class="btn btn-xs btn-warning">Edit</a>
									<a href="<?php echo URL; ?>tahunajaran/removeTahunAjaran/<?php echo $ajar->kode_tahun ?>" class="btn btn-xs btn-danger">Hapus</a>
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