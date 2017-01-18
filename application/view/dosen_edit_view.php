<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Dosen</h4></div>
				<div class="panel-body">
					<form id="formAddDosen" method="POST" action="<?php echo URL; ?>dosen/suntingdosen">
						<div class="form-group">
							<label for="Nama Dosen">Nama Dosen</label>
							<input type="text" class="form-control" name="nama_dosen" value="<?php echo $dosen->nama_dosen ?>" placeholder="Nama Dosen" >
						</div>
						<div class="form-group">
							<label for="Alamat">Alamat</label>
							<input type="text" class="form-control" value="<?php echo $dosen->alamat_jalan ?>" name="alamat_jalan" placeholder="Alamat">
						</div>
						<div class="form-group">
							<label for="Kota">Kota</label>
							<input type="text" class="form-control" name="kota" placeholder="Kota" maxlength="12" value="<?php echo $dosen->kota ?>">
						</div>
						<div class="form-group">
							<label for="Pendidikan">Pendidikan</label>
							<input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" value="<?php echo $dosen->pendidikan ?>">
						</div>
						<input type="hidden" name="kode_dosen" value="<?php echo $dosen->kode_dosen ?>">
						<input type="submit" name="btn_addDosen" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>