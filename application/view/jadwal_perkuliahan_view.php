<div id="page-wrapper">
		<div class="row">
			<div style='margin-top : 20px;' class="panel panel-default">
				<div class="panel-heading">Jadwal Perkuliahan </div>
				<div class="panel-body">
					<div style='margin-bottom: 30px; margin-top: 10px;' class="col-md-12">
						<div class="col-md-12">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lookUpJadwal"><b>Lihat Jadwal Perkuliahan</b> </button>
						</div>
					</div>
					<div  class="col-md-12">
						<form id="formTambahJadwal" method="POST" action="<?php echo URL; ?>jadwal/addJadwal">
							<div class="form-group col-md-8">
								<label for="Kode Mk">Mata Kuliah</label>
								<input type="text"   id="makul"  name="kode_mk" class="form-control" placeholder="Mata Kuliah" >
							</div>
							<div class="col-md-4 button-cari-margin">
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#lookupMataKuliah"><b>Cari Mata Kuliah</b> <span class="glyphicon glyphicon-search"></span></button>
							</div>
							<div class="form-group col-md-8">
								<label for="kode_dosen">Dosen</label>
								<input  type="text" id="fieldDosen" class="form-control" name="kode_dosen" placeholder="Dosen" >
							</div>
							<div class="col-md-4 button-cari-margin">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lookupDosen"><b>Cari Dosen</b> <span class="glyphicon glyphicon-search"></span></button>
							</div>
							<div class="form-group col-md-8">
								<label for="kode_ruang">Ruang</label>
								<input  type="text" id="fieldRuang" class="form-control" name="kode_ruang" placeholder="Ruang" >
							</div>
							<div class="col-md-4 button-cari-margin">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#lookupRuang"><b>Cari Ruang</b> <span class="glyphicon glyphicon-search"></span></button>
							</div>
							<div class="form-group col-md-8">
								<label for="kode_kelas">Kelas</label>
								<input  type="text" id="fieldKelas" class="form-control" name="kode_kelas" placeholder="Kelas" >
							</div>
							<div class="col-md-4 button-cari-margin">
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#lookupKelas"><b>Cari Kelas</b> <span class="glyphicon glyphicon-search"></span></button>
							</div>
							<div class="form-group col-md-12">
								<label for="hari">Hari</label>
								<select class="chosen-select" name="hari">
									<?php $hari = ['senin','selasa','rabu','kamis','jumat','sabtu','minggu']; ?>
									<?php foreach($hari as $day): ?>
										<option value="<?php echo $day ?>"><?php echo ucfirst($day) ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group col-md-12">
								<label for="mulai">Jam Mulai</label>
								<input type="text" class="form-control" name="jam_mulai" placeholder="hh:mm:ss" >
							</div>
							<div class="form-group col-md-12">
								<label for="selesai">Jam Selesai</label>
								<input type="text" class="form-control" name="jam_selesai" placeholder="hh:mm:ss" >
							</div>
							<div class="form-group col-md-12">
								<input type="submit" name="btn_addjadwal" class="btn btn-lg btn-success" value="Simpan">
							</div>													
						</form>
						<!-- Modal -->
				        <div class="modal fade" id="lookupMataKuliah" role="dialog">
				            <div class="modal-dialog modal-lg">
				               <!-- Modal content-->
				               <div class="modal-content">
				                  <div class="modal-header">
				                     <button type="button" class="close" data-dismiss="modal">&times;</button>
				                     <h4 class="modal-title">Data Mata Kuliah</h4>
				                  </div>
				                  <div class="modal-body">
				                  	<div class="table-responsive">
				                  		<table id="example" class="table table-contextual table-striped">
				                        <thead>
				                           <tr>
				                              	<th width="20">Kode Mata Kuliah</th>
				                              	<th width="20">Mata Kuliah</th>
				                               	<th width="20">Semester</th>
			                                	<th width="20">SKS</th>
				                           </tr>
				                        </thead>
				                        <tbody id="detailLookupMataKuliah">
				                           
				                        </tbody>
				                     </table>
				                  	</div>
				                     
				                  </div>
				                  <div class="modal-footer">
				                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				                  </div>
				               </div>
				            </div>
				        </div><!-- Modal Makul -->
				        <div class="modal fade" id="lookupDosen" role="dialog">
				            <div class="modal-dialog modal-lg">
				               <!-- Modal content-->
				               <div class="modal-content">
				                  <div class="modal-header">
				                     <button type="button" class="close" data-dismiss="modal">&times;</button>
				                     <h4 class="modal-title">Data Dosen</h4>
				                  </div>
				                  <div class="modal-body">
				                  	<div class="table-responsive">
				                  		<table id="example" class="table table-contextual table-striped">
				                        <thead>
				                           <tr>
				                              	<th width="20">Kode Dosen</th>
				                              	<th width="20">Nama Dosen</th>
				                           </tr>
				                        </thead>
				                        <tbody id="detailLookUpDosen">
				                           
				                        </tbody>
				                     </table>
				                  	</div>
				                     
				                  </div>
				                  <div class="modal-footer">
				                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				                  </div>
				               </div>
				            </div>
				        </div><!-- Modal Dosen -->
				        <div class="modal fade" id="lookupKelas" role="dialog">
				            <div class="modal-dialog modal-lg">
				               <!-- Modal content-->
				               <div class="modal-content">
				                  <div class="modal-header">
				                     <button type="button" class="close" data-dismiss="modal">&times;</button>
				                     <h4 class="modal-title">Data Kelas</h4>
				                  </div>
				                  <div class="modal-body">
				                  	<div class="table-responsive">
				                  		<table id="example" class="table table-striped">
				                        <thead>
				                           <tr>
				                              	<th width="20">Kode Kelas</th>
				                              	<th width="20">Nama Kelas</th>
				                           </tr>
				                        </thead>
				                        <tbody id="detailLookUpKelas">
				                           
				                        </tbody>
				                     </table>
				                  	</div>
				                     
				                  </div>
				                  <div class="modal-footer">
				                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				                  </div>
				               </div>
				            </div>
				        </div><!-- Modal Kelas -->
				        <div class="modal fade" id="lookupRuang" role="dialog">
				            <div class="modal-dialog modal-lg">
				               <!-- Modal content-->
				               <div class="modal-content">
				                  <div class="modal-header">
				                     <button type="button" class="close" data-dismiss="modal">&times;</button>
				                     <h4 class="modal-title">Data Ruang</h4>
				                  </div>
				                  <div class="modal-body">
				                  	<div class="table-responsive">
				                  		<table id="example" class="table table-striped">
				                        <thead>
				                           <tr>
				                              	<th width="20">Kode Ruang</th>
				                              	<th width="20"> Ruang</th>
				                              	<th>Kapasitas</th>
				                           </tr>
				                        </thead>
				                        <tbody id="detailLookUpRuang">
				                           
				                        </tbody>
				                     </table>
				                  	</div>
				                     
				                  </div>
				                  <div class="modal-footer">
				                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				                  </div>
				               </div>
				            </div>
				        </div><!-- Modal Ruang -->		
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
			                                	<th>Aksi</th>
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
					</div>
				</div>
			</div>
			
		</div>
	</div>