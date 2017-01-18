<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Jurusan</h4></div>
				<div class="panel-body">
					<form id="formAddProdi" action="<?php echo URL; ?>prodi/suntingprodi" method="POST">
						<div class="form-group">
							<label for="kode_prodi">Kode Prodi</label>
							<input class="form-control" type="text" value="<?php echo $prodi->kode_prodi ?>" name="kode_prodi" placeholder="Kode Prodi" required="required">
						</div>
						<div class="form-group">
							<label for="nama_prodi">Nama Prodi</label>
							<input class="form-control" type="text" value="<?php echo $prodi->nama_prodi ?>" name="nama_prodi" placeholder="Nama Prodi" required="required">
						</div>
						<div class="form-group">
							<label for="tahun_berdiri">Tahun Berdiri</label>
							<input class="form-control" type="text" value="<?php echo $prodi->tahun_berdiri ?>" name="tahun_berdiri" placeholder="Tahun Berdiri" required="required">
						</div>
						<div class="form-group">
							<label for="no_sk">No SK Dikti</label>
							<input class="form-control" type="text" value="<?php echo $prodi->no_sk_dikti ?>" name="no_sk" placeholder="No SK Dikti" required="required">
						</div>
						<div class="form-group">
							<label for="jenjang">Jenjang</label>
							<input class="form-control" type="text" name="jenjang" value="<?php echo $prodi->jenjang ?>" placeholder="Jenjang" required="required">
						</div>
						<div class="form-group">
							<label for="kode_dosen">Nama Dosen Yang Mengepalai</label>
							<select name="kode_dosen" class="chosen-select">
								<?php foreach($listDosen as $ld): ?>
									<option <?php if($prodi->kode_dosen == $ld->kode_dosen){echo 'selected';} ?> value="<?php echo sanitize($ld->kode_dosen) ?>"><?php echo $ld->nama_dosen ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<input type="submit" name="btn_addprodi" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>