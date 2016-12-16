<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading"><h4 class="text-center">Data Level User</h4></div>
				<div class="panel-body">
					<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
						<button data-target="#add_new_level" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
					</div>
					<div class="modal fade" id="add_new_level">
						<div class="modal-dialog">
							<div class="modal-content">
								<button class="close" data-dismiss="modal">&times;</button>
								<div class="modal-header">Tambah Data Level Baru</div>
								<div class="modal-body">
									<form action="<?php echo URL; ?>level/addlevel" method="POST">
										<div class="form-group">
											<label for="nama_level">Nama Level</label>
											<input class="form-control" type="text" name="nama_level" placeholder="Nama Level" required="required">
										</div>
										<input type="submit" name="btn_addlevel" class="btn btn-primary" value="Simpan">
									</form>
									<div class="text-right">
										<button data-dismiss="modal" class="btn btn-danger">Tutup</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>ID Level</th>
								<th>Level</th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($listLevel)): ?>
								<?php $no = 1; ?>
								<?php foreach($listLevel as $level): ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $level->id_level; ?></td>
										<td><?php echo $level->nama_level; ?></td>
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="3"><h4 class="text-center">Maaf, Untuk Saat Ini Data Tidak Tersedia</h4></td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>