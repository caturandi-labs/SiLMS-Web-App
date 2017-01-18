
/**
* -------------------------------------------
* @author Catur Andi Pamungkas
* AJAX Request
* -------------------------------------------
*/

 	

	// Loading Data
	loadTahunAjaran();
	loadKelas();
	showLookUpMataKuliah();
	showLookUpDosen();
	showLookUpKelas();
	showLookUpRuang();
	showDataMakulJurusan();
	showJadwal();
	// showMahasiswaInJadwal()
	// showProdi();

	
	function loadTahunAjaran(){
		var dataHandler = $('.data'); 
		dataHandler.html("");
		$.ajax(url + "/tahunajaran/testAjax")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td>"+val.tahun+"</td>"
        				+"<td><a class='btn btn-xs btn-warning' href="+ url +"tahunajaran/edittahun/"+val.kode_tahun+">Edit</a>&nbsp;&nbsp;"
        				+"<button class='btn btn-xs btn-danger' onclick='deleteTahunAjaran("+val.kode_tahun+")'>Hapus</button></td></tr>");
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }



    function loadKelas(){
		var dataHandler = $('#dataKelas'); 
		dataHandler.html("");
		$.ajax(url + "/kelas/view")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

	        	
        		newRow.html("<td>"+val.nama_kelas+"</td>"
        				+"<td><a class='btn btn-xs btn-warning' href="+ url +"kelas/editkelas/"+val.kode_kelas+">Edit</a>&nbsp;&nbsp;"
        				+"<button class='btn btn-xs btn-danger' onclick='deleteKelas("+val.kode_kelas+")'>Hapus</button></td></tr>");
	        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

	function deleteTahunAjaran(id){
		$.ajax(url + "/tahunajaran/delete/" + id,{
			type : "POST",
			data : "kode_tahun=" + id,
		})
		.done(function(result){
			loadTahunAjaran();
		});
	}
	function deleteKelas(id){
		$.ajax(url + "/kelas/removekelas/" + id,{
			type : "POST",
			data : "kode_kelas=" + id,
		})
		.done(function(result){
			loadKelas();
		});
	}


	// Look Up Modal Dialog

	function showLookUpMataKuliah(){
		var dataHandler = $('#detailLookupMataKuliah'); 
		dataHandler.html("");
		$.ajax(url + "/jadwal/showMataKuliah")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td width='5%'><a id='mkAjax' data-dismiss='modal' data-sks='"+val.sks+"' data-semester='"+val.id_semester+"' namaMakul='"+val.nama_mk+"' data-mk='"+val.kode_mk+"' href='javascript:void(0)'>"+val.kode_mk+"</a> </td>"
        				+"<td  width='5%'>"+val.nama_mk+"</td>"
        				+"<td  width='5%'>"+val.id_semester+"</td>"
        				+"<td  width='5%'>"+val.sks+"</td>"
        		);
	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

    function showLookUpDosen(){
		var dataHandler = $('#detailLookUpDosen'); 
		dataHandler.html("");
		$.ajax(url + "/jadwal/showDosen")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td width='20'><a id='dosenAjax' data-dismiss='modal' data-dosen='"+val.kode_dosen+"' href='javascript:void(0)'>"+val.kode_dosen+"</a> </td>"
        				+"<td width='20'>"+val.nama_dosen+"</td>"
        		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

  //   function showProdi(){
		// var dataHandler = $('#ajaxProdi'); 

		// dataHandler.html("");
		// $.ajax(url + "/matakuliahjurusan/ajaxLoadProdi")
	 //    .done(function(result) {
	 //        var resultObj = JSON.parse(result);
	 //        $.each(resultObj,function(key,val){
	 //        	console.log(resultObj);
	 //        	// var newRow = $("");
	 //        	// console.log(val.kode_prodi);
  //       		// newRow.html(""
  //       		// );
	 //        	dataHandler.append("<option value='"+val.kode_prodi+"'>"+val.nama_prodi+"</option>");
	 //        	console.log(dataHandler);
	 //        });
	 //    })
	 //    .fail(function() {
	 //    	console.log('Error....');
	 //    })
	 //    .always(function() {

	 //    });
  //   }

    function showLookUpKelas(){
		var dataHandler = $('#detailLookUpKelas'); 
		dataHandler.html("");
		$.ajax(url + "/jadwal/showKelas")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td width='20'><a id='kelasAjax' data-dismiss='modal' data-kelas='"+val.kode_kelas+"' href='javascript:void(0)'>"+val.kode_kelas	+"</a> </td>"
        				+"<td width='20'>"+val.nama_kelas+"</td>"
        		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

    function showMahasiswaInJadwal(){
    	var kodeKelas = $('#kodeKelas').val();
    	console.log('KODE KELASSSSSSSSSSSSSSSSS = ' + kodeKelas);
		var dataHandler = $('#tabelAbsensi'); 
		dataHandler.html("");
		$.ajax(url + "mahasiswa/showmahasiswainjadwal/"+kodeKelas)
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	// console.log("BOS NIMMMMMMMMMMMMMMMM : " + val.nim);
	        	var newRow = $("<tr>");
        		newRow.html( "<td>"+val.nim+"</td>"
        					+"<td>"+val.nama_lengkap+"</td>"
        					+"<td><select class='form-control' name='kehadiran'>"+
        						"<option value='hadir'>Hadir</option>"+
        						"<option value='ijin'>Ijin</option>"+
        						"<option value='absen'>Absen</option>"+
        						"<option value='sakit'>Sakit</option>" 
        					+"</select></td>"
        		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

    function showJadwal(){
		var dataHandler = $('#detailJadwal'); 
		dataHandler.html("");
		$.ajax(url + "/jadwal/showLookUpJadwal")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td><a data-dismiss='modal' data-kk='"+val.kode_kelas+"' id='jadwalAjax' data-jadwal='"+val.id_jadwal+"' data-dosen='"+val.nama_dosen+"' data-ruang='"+val.ruang+"' data-kelas='"+val.nama_kelas+"' data-kodeJadwal='"+val.id_jadwal+"' href='javascript:void(0);'>"+val.id_jadwal+"</a></td>"
        					+"<td>"+val.nama_mk+"</td>"
        					+"<td>"+val.nama_dosen+"</td>"
        					+"<td>"+val.ruang+"</td>"
        					+"<td>"+val.nama_kelas+"</td>"
        					+"<td><a class='btn btn-xs btn-danger' href='removejadwal/"+val.id_jadwal+"'>Hapus</a></td>"
           		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }

    function showLookUpRuang(){
		var dataHandler = $('#detailLookUpRuang'); 
		dataHandler.html("");
		$.ajax(url + "/jadwal/showRuang")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td width='20'><a id='ruangAjax' data-dismiss='modal' data-ruang='"+val.kode_ruang+"' href='javascript:void(0)'>"+val.kode_ruang+"</a> </td>"
        				+"<td width='20'>"+val.ruang+"</td>"
        				+"<td width='20'>"+val.kapasitas+"</td>"
        		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }



    function showDataMakulJurusan(){
		var dataHandler = $('#tableMakulJurusan'); 
		dataHandler.html("");
		$.ajax(url + "/matakuliahjurusan/viewMakulJurusanAjax")
	    .done(function(result) {
	        var resultObj = JSON.parse(result);
	        $.each(resultObj,function(key,val){
	        	var newRow = $("<tr>");
	        	// console.log(resultObj);

        		newRow.html("<td>"+val.kode_mk+"</td>"
        				+"<td>"+val.nama_mk+"</td>"
        				+"<td>"+val.sks+"</td>"
        				+"<td>"+val.id_semester+"</td>"
        				+"<td>"+val.nama_prodi+"</td>"
        		);
        	

	        	dataHandler.append(newRow);
	        });
	    })
	    .fail(function() {
	    	console.log('Error....');
	    })
	    .always(function() {

	    });
    }