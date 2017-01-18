<div id="page-wrapper">
		<div class="row">
			<div style='margin-top : 20px;' class="panel panel-default">
				<div class="panel-heading">Mata Kuliah Jurusan </div>
				<div class="panel-body">
					<div style='margin-bottom: 30px; margin-top: 10px;' class="col-md-12">
						<div class="col-md-12">
							<button data-target="#lihatDataMakulJurusan" data-backdrop="static" data-toggle="modal" class="btn btn-primary">Tampilkan Data Mata Kuliah Jurusan</button>
							<hr>
							<div class="modal fade" id="lihatDataMakulJurusan">
								<div class="modal-dialog">
									<div class="modal-content">
										
										<div class="modal-header">
											<button class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Data Mata Kuliah Jurusan</h4>
										</div>
										<div class="modal-body">
											<div class="table-responsive">
												<table class="table table-striped">
													<thead>
														<th>Kode Mata Kuliah</th>
														<th>Mata Kuliah</th>
														<th>SKS</th>
														<th>Semester</th>
														<th>Program Studi</th>
													</thead>
													<tbody id='tableMakulJurusan'>
														
													</tbody>
												</table>
											</div>
										</div>
										<!-- footer modal -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div  class="col-md-12">
						<form id="formAddMakulJurusan" method="POST" action="<?php echo URL; ?>matakuliahjurusan/addMataKuliahJurusan">
							<div class="form-group col-md-8">
								<label for="Kode Mk">Mata Kuliah</label>
								<input type="text" id="makul"  name="kode_mk" class="form-control" placeholder="Mata Kuliah" >
							</div>
							<div class="col-md-4 button-cari-margin">
								<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#lookupMataKuliah"><b>Cari Mata Kuliah</b> <span class="glyphicon glyphicon-search"></span></button>
							</div>
							<div class="form-group col-md-12">
								<label for="nama_mk">Nama Mata Kuliah</label>
								<input type="text" disabled id='namaMakul' name="nama_mk" class="form-control" placeholder="Mata Kuliah">
							</div>
							<div class="col-md-12 form-group">
								<label for="semester">Semester</label>
								<input type="text"  disabled id='semesterMakul' name="semester" class="form-control" placeholder="Semester">
							</div>
							<div class="col-md-12 form-group">
								<label for="sks">SKS</label>
								<input disabled type="number" name="sks" id='sksMakul' class="form-control" placeholder="SKS">
							</div>
							<hr>
							<div class="form-group col-md-12">
								<label for="kode_prodi">Kode Program Studi</label>
								<select class="chosen-select" id='ajaxProdi' name="kode_prodi">
									<?php foreach ($listProdi as $lp): ?>
										<option value="<?php echo $lp->kode_prodi ?>"><?php echo $lp->nama_prodi ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group col-md-12">
								<input type="submit" name="btn_addmakuldetail" class="btn btn-lg btn-success" value="Simpan">
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
				                  		<table id="example" class="table table-bordered">
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
					</div>
				</div>
			</div>
			
		</div>
	</div>