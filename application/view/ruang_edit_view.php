<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Ruang</h4></div>
				<div class="panel-body">
					<form  id="formAddRuang" method="POST" action="<?php echo URL; ?>ruang/editruang">							
						<div class="form-group">
							<label for="Nama Ruang">Nama Ruang</label>
							<input type="text" class="form-control" name="nama_ruang" placeholder="Nama Ruang" maxlength="12" value="<?php echo sanitize($ruang->ruang); ?>">
						</div>
						<div class="form-group">
							<label for="kapasitas">Kapasitas</label>
							<input type="number" class="form-control" name="kapasitas" placeholder="Kapasitas Ruangan" value="<?php echo sanitize($ruang->kapasitas); ?>">
						</div>											
						<input type="hidden" name="kode_ruang" value="<?php echo sanitize($ruang->kode_ruang); ?>">
						<input type="submit" name="btn_addruang" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>