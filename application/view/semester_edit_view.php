<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Semester</h4></div>
				<div class="panel-body">
					<form method="POST" id="formAddSemester" action="<?php echo URL; ?> semester/suntingsemester">
						<div class="form-group">
							<label for="Semester"> Semester</label>
							<input type="text" class="form-control" value="<?php echo $semester->semester ?>" name="semester" placeholder="Semester" maxlength="2" required>
						</div>
						<input type="hidden" name="id_semester" value="<?php echo $semester->id_semester ?>">
						<input type="submit" name="btn_addsemester" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>											
					</form>
				</div>
			</div>
		</div>
	</div>
</div>