<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Kelas</h4></div>
				<div class="panel-body">
					<form id="formAddKelas" method="POST" action="<?php echo URL; ?>kelas/suntingkelas">
						<div class="form-group">
							<label for="Nama Kelas">Nama Kelas</label>
							<input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas" maxlength="12" value="<?php echo $kelas->nama_kelas ?>">
						</div>
							<input type="hidden" name="kode_kelas" value="<?php echo $kelas->kode_kelas ?>">
							<input type="submit" name="btn_addkelas" class="btn btn-primary" value="Simpan">
							<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>