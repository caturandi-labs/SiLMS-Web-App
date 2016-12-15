
	<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Mahasiswa</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>NIM</th>
									<th>Nama Lengkap</th>
									<th>Alamat</th>
									<th>Kota</th>
									<th>Kodepos</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Agama</th>
									<th>Jenis Kelamin</th>
									<th>Kode Prodi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listMahasiswa as $mahasiswa): ?>
								<tr>
									<td><?php echo $mahasiswa->nim; ?></td>
									<td><?php echo $mahasiswa->nama; ?></td>
									<td><?php echo $mahasiswa->alamat; ?></td>
									<td><?php echo $mahasiswa->kota; ?></td>
									<td><?php echo $mahasiswa->kodepos; ?></td>
									<td><?php echo $mahasiswa->tempat_lahir; ?></td>
									<td><?php echo $mahasiswa->tanggal_lahir; ?></td>
									<td><?php echo ucfirst($mahasiswa->agama); ?></td>
									<td><?php echo $mahasiswa->jenis_kelamin; ?></td>
									<td><?php echo $mahasiswa->kode_prodi; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>			
			</div>
		</div>
	</div>