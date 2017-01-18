<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Tahun Ajaran</h4></div>
				<div class="panel-body">
					<form id="formAddTahunAjaran" method="POST" action="<?php echo URL; ?>tahunajaran/suntingtahun">												
						<div class="form-group">
							<label for="Tahun Ajaran">Tahun Ajaran</label>
							<input type="text" class="form-control" name="tahun" placeholder="Tahun Ajaran" maxlength="4" value="<?php echo $tahun->tahun ?>">
						</div>
						<input type="hidden" name="kode_tahun" value="<?php echo $tahun->kode_tahun ?>">
						
						<input type="submit" name="btn_addtahunajaran" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>													
					</form>
				</div>
			</div>
		</div>
	</div>
</div>