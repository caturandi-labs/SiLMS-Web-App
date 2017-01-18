<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div style="margin-top:10px;margin-bottom: 20px; " class="col-md-6">
				<button data-target="#addNewUser" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
			</div>
			<div class="modal fade" id="addNewUser">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data</h4>
						</div>
						<div class="modal-body">
							<form id="formAddUser" action="<?php echo URL; ?>user/adduser" method="POST">
								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" type="text" name="username" placeholder="Username" required="required">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" type="password" name="password" placeholder="Password" required="required">
								</div>
								<div class="form-group">
									<label for="id_level">Level</label>
									<select name="id_level" class="form-control">
										<?php foreach($listLevel as $ll): ?>
											<option value="<?php echo sanitize($ll->id_level); ?>"><?php echo ucfirst(sanitize($ll->nama_level)); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<input type="submit" name="btn_adduser" class="btn btn-primary" value="Simpan">
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
						<th>Username</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($listUser)): ?>
						<?php $no = 1; ?>
						<?php foreach($listUser as $user): ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $user->username; ?></td>
								<td><?php echo sha1($user->password); ?></td>
								<td>
									<a  href="<?php echo URL ?>user/editUser/<?php echo $user->id_user; ?>" class="btn btn-xs btn-warning">Edit</a>
									<a onclick='return confirm("Yakin Ingin Hapus Data ?");' href="<?php echo URL ?>user/removeuser/<?php echo $user->id_user; ?>" class="btn btn-xs btn-danger">Hapus</a>
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