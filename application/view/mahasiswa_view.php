
	<div id="page-wrapper">
		<div class="row">
			<div style="margin-top:20px;margin-bottom: 20px; ">
				<button data-target="#addNewMahasiswa" data-backdrop="static" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button>
			</div>
			<div class="modal fade" id="addNewMahasiswa">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Tambah Data</h4>
						</div>
						<div class="modal-body">
							<form id="formAddMahasiswa" enctype="multipart/form-data" action="<?php echo URL; ?>mahasiswa/addmahasiswa" method="POST">
								<div class="form-group ">
									<label for="nim">Nomor Induk Mahasiswa</label>
									<input class="form-control" id="nim" type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required="" >
								</div>
								<div class="form-group ">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" required="required">
								</div>
								<div class="form-group ">
									<label for="alamat">Alamat</label>
									<input class="form-control" type="text" name="alamat" placeholder="Alamat" required="required">
								</div>
								<div class="form-group ">
									<label for="kota">Kota</label>
									<input class="form-control" type="text" name="kota" placeholder="Kota" required="required">
								</div>
								<div class="form-group ">
									<label for="kodepos">Kodepos</label>
									<input class="form-control" type="number" name="kodepos" placeholder="Kodepos" required="required" maxlength="5">
								</div>
								<div class="form-group ">
									<label for="tempat_lahir">Tempat Lahir</label>
									<input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required="required">
								</div>
								<div class="form-group ">
									<label for="tanggal_lahir">Tanggal Lahir</label>
									<input class="form-control" type="date" name="tanggal_lahir" required="required">
								</div>
								<div class="form-group ">
									<label for="agama">Agama</label>
									<select class="chosen-select" name="agama">
										<?php $agama = ['islam','kristen','katholik','hindu','budha','konghuchu']; ?>
										<?php for($i=0; $i<count($agama); $i++): ?>
											<option value="<?php echo $agama[$i] ?>"><?php echo ucfirst($agama[$i]) ?></option>
										<?php endfor; ?>
									</select>
								</div>
								<div class="form-group ">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<div class="radio">
										<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="L">Laki-Laki</label>
										<label class="radio-inline"><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
									</div>
								</div>
								<div class="form-group ">
									<label for="Jurusan" class="control-label">Jurusan</label>
									 <select  name='jurusan' class="chosen-select form-control" data-placeholder="Pilih Jurusan" tabindex="1">
										<?php foreach ($listJurusan as $lj): ?>
											<option  value="<?php echo sanitize($lj->kode_prodi) ?>"><?php echo sanitize($lj->nama_prodi); ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label for="Kelas">Kelas</label>
									<select name="kode_kelas" class="chosen-select form-control" data-placeholder='Pilih Kelas'>
										<?php $jenis_kelas = ''; ?>
										<?php foreach ($listKelas as $kelas): ?>
											<option  value="<?php echo sanitize($kelas->kode_kelas) ?>"><?php echo sanitize($kelas->nama_kelas); ?></option>
											<?php $jenis_kelas = $kelas->nama_kelas; ?>
										<?php endforeach; ?>
									</select>
									<input type="hidden" name="jenis_kelas" value="<?php echo $jenis_kelas ?> ">
								</div>
								<div class="form-group">
									<label for="tahun">Tahun Angkatan</label>
									<select name="kode_tahun" class="chosen-select form-control" data-placeholder='Pilih Tahun Ajaran'>
										<?php foreach ($listTahunajaran as $lta): ?>
											<option  value="<?php echo sanitize($lta->kode_tahun) ?>"><?php echo sanitize($lta->tahun); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<!-- <div class="form-group">
									<label for="Pas Foto" class="control-label">Pas Foto</label>
									<input type="file" class="form-control" accept="image/*" name="foto">
								</div> -->
									<input type="submit" name="btn_addmahasiswa" class="btn btn-primary" value="Simpan">
							</form>
						</div>
						<div class="modal-footer">
							<button data-dismiss="modal" class="btn btn-danger">Tutup</button>
						</div>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-responsive  table-bordered datatable">
					<thead style="min-width: 160%;">
						<tr>
							<th>No.</th>
							<th>NIM</th>
							<th>Nama Lengkap</th>
							<th width="80%">Alamat</th>
							<th>Kota</th>
							<th>Kodepos</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Agama</th>
							<th>Jenis Kelamin</th>
							<th>Prodi</th>
							<th>Kelas</th>
							<th>Semester Aktif</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody >
						<?php $no = 1; ?>
						<?php foreach($listMahasiswa as $mahasiswa): ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo sanitize($mahasiswa->nim); ?></td>
							<td><?php echo sanitize($mahasiswa->nama_lengkap); ?></td>
							<td><?php echo sanitize($mahasiswa->alamat_jalan); ?></td>
							<td><?php echo sanitize($mahasiswa->kota); ?></td>
							<td><?php echo sanitize($mahasiswa->kodepos); ?></td>
							<td><?php echo sanitize($mahasiswa->tempat_lahir); ?></td>
							<td><?php echo sanitize($mahasiswa->tanggal_lahir); ?></td>
							<td><?php echo sanitize(ucfirst($mahasiswa->agama)); ?></td>
							<td><?php echo sanitize($mahasiswa->jenis_kelamin); ?></td>
							<td><?php echo sanitize($mahasiswa->nama_prodi); ?></td>
							<td><?php echo sanitize($mahasiswa->nama_kelas); ?></td>
							<td><?php echo sanitize($mahasiswa->semester_aktif); ?></td>
							<td>
								<a href="<?php echo URL; ?>mahasiswa/editmahasiswa/<?php echo $mahasiswa->nim ?>" class="btn btn-xs btn-warning">Edit</a>
								<a href="<?php echo URL; ?>mahasiswa/removemahasiswa/<?php echo $mahasiswa->nim ?>" class="btn btn-xs btn-danger">Hapus</a>
							</td>
						</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
				
		</div>
	</div>