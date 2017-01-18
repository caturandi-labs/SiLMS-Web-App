<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Mata Kuliah</h4></div>
				<div class="panel-body">
					<form id="formAddMataKuliah" method="POST" action="<?php echo URL; ?>matakuliah/suntingmatakuliah">
						<div class="form-group">
							<label for="Nama Mata Kuliah">Nama Mata Kuliah</label>
							<input type="text" class="form-control" name="nama_mk" placeholder="Nama Mata Kuliah" maxlength="12" value="<?php echo $matakuliah->nama_mk ?>">
						</div>
						<div class="form-group">
							<label for="SKS">SKS</label>
							<input type="number" class="form-control" value="<?php echo $matakuliah->sks ?>" name="sks" placeholder="SKS" maxlength="11">
						</div>													
						<div class="form-group">
							<label for="SKS">Semester</label>
							<select class="chosen-select" name="id_semester">
								<?php foreach ($listSemester as $sm): ?>
									<option <?php if($matakuliah->id_semester == $sm->id_semester){ echo 'selected'; } ?> value="<?php echo sanitize($sm->id_semester) ?>"><?php echo sanitize($sm->id_semester); ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<input type="submit" name="btn_addMakul" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>