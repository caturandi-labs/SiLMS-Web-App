	<div id="page-wrapper">
		<div class="row">
			<div style='margin-top: 20px;'  class="panel panel-default">
				<div class="panel-heading">Profil Mahasiswa : <?php echo $_SESSION['username'] ?></div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<tr>
								<th>Nomor Induk Mahasiswa</th>
								<td><?php echo sanitize($mahasiswa->nim); ?></td>
							</tr>
							<tr>
								<th>Nama Lengkap</th>
								<td><?php echo sanitize($mahasiswa->nama_lengkap); ?></td>
							</tr>
							<tr>
								<th>Tempat Lahir</th>
								<td><?php echo sanitize($mahasiswa->tempat_lahir); ?></td>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<td><?php echo sanitize($mahasiswa->tanggal_lahir); ?></td>
							</tr>
							<tr>
								<th>Alamat Jalan</th>
								<td><?php echo sanitize($mahasiswa->alamat_jalan); ?></td>
							</tr>
							<tr>
								<th>Kota</th>
								<td><?php echo sanitize($mahasiswa->kota); ?></td>
							</tr>
							<tr>
								<th>Kodepos</th>
								<td><?php echo sanitize($mahasiswa->kodepos); ?></td>
							</tr>
							<tr>
								<th>Agama</th>
								<td><?php echo sanitize($mahasiswa->agama); ?></td>
							</tr>
							<tr>
								<th>Kode Prodi</th>
								<td><?php echo sanitize($mahasiswa->kode_prodi); ?></td>
							</tr>
							<tr>
								<th>Nama Prodi</th>
								<td><?php echo sanitize($mahasiswa->nama_prodi); ?></td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>
							
		</div>
	</div>