<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
				<button data-target="#addProdi" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
			</div>
			<div class="modal fade" id="addProdi">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-header">
							<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Prodi</h4>
						</div>
						<div class="modal-body">
							<form id="formAddProdi" action="<?php echo URL; ?>prodi/addprodi" method="POST">
								<div class="form-group">
									<label for="kode_prodi">Kode Prodi</label>
									<input class="form-control" type="text" name="kode_prodi" placeholder="Kode Prodi" required="required">
								</div>
								<div class="form-group">
									<label for="nama_prodi">Nama Prodi</label>
									<input class="form-control" type="text" name="nama_prodi" placeholder="Nama Prodi" required="required">
								</div>
								<div class="form-group">
									<label for="tahun_berdiri">Tahun Berdiri</label>
									<input class="form-control" type="text" name="tahun_berdiri" placeholder="Tahun Berdiri" required="required">
								</div>
								<div class="form-group">
									<label for="no_sk">No SK Dikti</label>
									<input class="form-control" type="text" name="no_sk" placeholder="No SK Dikti" required="required">
								</div>
								<div class="form-group">
									<label for="jenjang">Jenjang</label>
									<input class="form-control" type="text" name="jenjang" placeholder="Jenjang" required="required">
								</div>
								<div class="form-group">
									<label for="kode_dosen">Nama Dosen Yang Mengepalai</label>
									<select name="kode_dosen" class="chosen-select">
										<?php foreach($listDosen as $ld): ?>
											<option value="<?php echo sanitize($ld->kode_dosen) ?>"><?php echo $ld->nama_dosen ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<input type="submit" name="btn_addprodi" class="btn btn-primary" value="Simpan">
							</form>
						</div>
						<!-- footer modal -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode Prodi</th>
						<th>Nama Prodi</th>
						<th>Tahun Berdiri</th>
						<th>No SK Dikti</th>
						<th>Jenjang</th>
						<th>Kode Dosen</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($listProdi)): ?>
						<?php $no = 1; ?>
						<?php foreach($listProdi as $lp): ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $lp->kode_prodi; ?></td>
								<td><?php echo $lp->nama_prodi; ?></td>
								<td><?php echo $lp->tahun_berdiri; ?></td>
								<td><?php echo $lp->no_sk_dikti; ?></td>
								<td><?php echo $lp->jenjang; ?></td>
								<td>
									<?php if($lp->kode_dosen != NULL OR $lp->kode_dosen != ""): ?>
										<?php echo $lp->kode_dosen; ?>
									<?php endif; ?>
								</td>
								<td>
									<a href="<?php echo URL; ?>prodi/editprodi/<?php echo $lp->kode_prodi ?>" class="btn btn-xs btn-warning">Edit</a>
									<a href="<?php echo URL; ?>prodi/removeprodi/<?php echo $lp->kode_prodi ?>" class="btn btn-xs btn-danger">Hapus</a>
								</td>
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