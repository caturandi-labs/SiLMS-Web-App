<div id="page-wrapper">
	<div class="row">
		<div style="margin-top: 30px;" class="col-md-12">
			<div class="col-md-4 pull-left">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#lookUpJadwal"><b>Lihat Jadwal</b> <span class="glyphicon glyphicon-search"></span></button>
			</div>
			<div class="col-md-4 pull-right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lookUpAbsen"><b>Lihat Rekap Absensi</b> <span class="glyphicon glyphicon-search"></span></button>
			</div>
			<br><br><hr>
			<form action="<?php echo URL; ?>absen/addabsen" method="POST">	
				<div class="col-md-6">
					<div class="form-group">
						<label for="tanggal">Tanggal</label>
						<input class="form-control" type="date" name="tanggal">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="pertemuan">Pertemuan</label>
						<input  class="form-control" type="number" name="pertemuan" placeholder="Pertemuan Ke-">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="dosen">Dosen</label>
						<input type="text" id='dosen' name="dosen" class="form-control" placeholder="Dosen" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="ruang">Ruang</label>
						<input type="text" id='ruang' name="ruang" placeholder="Ruang" class="form-control" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="kelas">Kelas</label>
						<input type="text" id="kelas" name="nama_kelas" placeholder="Kelas" class="form-control" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="kelas">Kode Kelas</label>
						<input type="text" id="kodeKelas" name="kode_kelas" placeholder="Kode Kelas" class="form-control" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="jadwal">Pilih Jadwal</label>
						<input type="text" id="jadwal" name="kelas" placeholder="Kode Jadwal" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<button onclick="showMahasiswaInJadwal();" type="button" class="button-cari-margin btn btn-warning" data-toggle="modal" data-target="#lookupMataKuliah"><b>Lihat Mahasiswa</b> <span class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>
				<!-- Modal LookUp Jadwal -->
		        <div class="modal fade" id="lookUpJadwal" role="dialog">
		            <div class="modal-dialog modal-lg">
		               <!-- Modal content-->
		               <div class="modal-content">
		                  <div class="modal-header">
		                     <button type="button" class="close" data-dismiss="modal">&times;</button>
		                     <h4 class="modal-title">Data Jadwal</h4>
		                  </div>
		                  <div class="modal-body">
		                  	<div class="table-responsive">
		                  		<table id="example" class="table table-bordered table-striped">
		                        <thead>
		                           <tr>
		                           		<th>Kode Jadwal</th>
		                              	<th>Mata Kuliah</th>
		                               	<th>Dosen</th>
	                                	<th>Ruang</th>
	                                	<th>Kelas</th>
		                           </tr>
		                        </thead>
		                        <tbody id="detailJadwal">
		                           
		                        </tbody>
		                     </table>
		                  	</div>
		                     
		                  </div>
		                  <div class="modal-footer">
		                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		                  </div>
		               </div>
		            </div>
		        </div><!-- Modal Jadwal -->
				<div style="margin-top: 20px;" class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<th>NIM</th>
								<th>Mahasiswa</th>
								<th>Kehadiran</th>
							</thead>
							<tbody id="tabelAbsensi">
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="submit" class="btn btn-lg btn-success" name="btn_savepresensi" value="Simpan Presensi">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>