
	<div id="page-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Ruang</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Kode Ruang</th>
									<th>Ruang</th>
									<th>Kapasitas</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listRuangs as $ruang): ?>
								<tr>
									<td><?php echo $ruang->kode_ruang; ?></td>
									<td><?php echo $ruang->ruang; ?></td>
									<td><?php echo $ruang->kapasitas; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>			
			</div>
		</div>
	</div>