<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default edit-form">
				<div class="panel-heading"><h4 class="text-center">Edit Data Mahasiswa</h4></div>
				<div class="panel-body">
					<form id="formAddMahasiswa" enctype="multipart/form-data" action="<?php echo URL; ?>mahasiswa/suntingmahasiswa" method="POST">
						<div class="form-group ">
							<label for="nim">Nomor Induk Mahasiswa</label>
							<input class="form-control" id="nim" type="text" value="<?php echo $mahasiswa->nim ?>" name="nim" placeholder="Nomor Induk Mahasiswa" required="" >
						</div>
						<div class="form-group ">
							<label for="nama_lengkap">Nama Lengkap</label>
							<input class="form-control" value="<?php echo $mahasiswa->nama_lengkap ?>" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="required">
						</div>
						<div class="form-group ">
							<label for="alamat">Alamat</label>
							<input class="form-control" type="text" value="<?php echo $mahasiswa->alamat_jalan ?>" name="alamat" placeholder="Alamat" required="required">
						</div>
						<div class="form-group ">
							<label for="kota">Kota</label>
							<input class="form-control" type="text" value="<?php echo $mahasiswa->kota ?>" name="kota" placeholder="Kota" required="required">
						</div>
						<div class="form-group ">
							<label for="kodepos">Kodepos</label>
							<input class="form-control" value="<?php echo $mahasiswa->kodepos ?>" type="number" name="kodepos" placeholder="Kodepos" required="required" maxlength="5">
						</div>
						<div class="form-group ">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input class="form-control" type="text" value="<?php echo $mahasiswa->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required="required">
						</div>
						<div class="form-group ">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input class="form-control"  value="<?php echo $mahasiswa->tanggal_lahir ?>" type="date" name="tanggal_lahir" required="required">
						</div>
						<div class="form-group ">
							<label for="agama">Agama</label>
							<select class="chosen-select" name="agama">
								<?php $agama = ['islam','kristen','katholik','hindu','budha','konghuchu']; ?>
								<?php for($i=0; $i<count($agama); $i++): ?>
									<option <?php echo ($mahasiswa->agama == $agama[$i]) ? 'selected' : ''  ?> value="<?php echo $agama[$i] ?>"><?php echo ucfirst($agama[$i]) ?></option>
								<?php endfor; ?>
							</select>
						</div>
						<div class="form-group ">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<div class="radio">
								<label class="radio-inline"><input <?php echo ($mahasiswa->jenis_kelamin== 'L') ? 'checked': '' ?> type="radio" name="jenis_kelamin" value="L">Laki-Laki</label>
								<label class="radio-inline"><input <?php echo ($mahasiswa->jenis_kelamin== 'P') ? 'checked': '' ?> type="radio" name="jenis_kelamin" value="P">Perempuan</label>
							</div>
						</div>
						<div class="form-group ">
							<label for="Jurusan" class="control-label">Jurusan</label>
							 <select  name='jurusan' class="chosen-select form-control" data-placeholder="Pilih Jurusan" tabindex="1">
								<?php foreach ($listJurusan as $lj): ?>
									<option <?php echo ($lj->kode_prodi == $mahasiswa->kode_prodi) ? 'selected' : '';  ?> value="<?php echo sanitize($lj->kode_prodi) ?>"><?php echo sanitize($lj->nama_prodi); ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="Kelas">Kelas</label>
							<select name="kode_kelas" class="chosen-select form-control" data-placeholder='Pilih Kelas'>
								<?php foreach ($listKelas as $kelas): ?>
									<option  <?php echo ($kelas->kode_kelas == $mahasiswa->kode_kelas) ? 'selected' : '';  ?> value="<?php echo sanitize($kelas->kode_kelas) ?>"><?php echo sanitize($kelas->nama_kelas); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="tahun">Tahun Angkatan</label>
							<select name="kode_tahun" class="chosen-select form-control" data-placeholder='Pilih Tahun Ajaran'>
								<?php foreach ($listTahunajaran as $lta): ?>
									<option <?php echo ($lta->kode_tahun == $mahasiswa->kode_tahun) ? 'selected' : '';  ?> value="<?php echo sanitize($lta->kode_tahun) ?>"><?php echo sanitize($lta->tahun); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<!-- <div class="form-group">
							<label for="Pas Foto" class="control-label">Pas Foto</label>
							<input type="file" class="form-control" accept="image/*" name="foto">
						</div> -->
						<input type="submit" name="btn_addmahasiswa" class="btn btn-primary" value="Simpan">
						<button class="btn btn-warning" onclick="javascript:history.go(-1);">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
