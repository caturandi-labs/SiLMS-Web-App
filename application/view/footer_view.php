          <div class="container-fluid">
            <div class="row">
                <footer  style="padding:20px 0px 20px 0px; class="footer">
                  <div class="container">
                    <p class="text-center text-muted">Copyright by SiLMS Develope By 3P43 Developers</p>
                  </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    



    <script src="<?php echo URL; ?>js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL; ?>js/bootstrap.js"></script>
    <script>
        var url = "<?php echo URL; ?>";
    </script>
    
    
   
    <!-- Validators  -->
    <script src="<?php echo URL;?>js/formValidation.min.js"></script>
    <script src="<?php echo URL;?>js/bootstrap.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo URL;?>js/metisMenu.min.js"></script>
    <!-- <script src="<?php echo URL;?>js/sweetalert-dev.js"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo URL;?>js/sb-admin-2.js"></script>
    <!-- <script src="<?php echo URL;?>js/bootbox.min.js"></script> -->
    <script src="<?php echo URL;?>js/chosen.jquery.js"></script>
<!--     <script src="<?php echo URL;?>js/datatables.bootstrap.js"></script>
    <script src="<?php echo URL;?>js/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo URL;?>js/script.js"></script>
    <script src="<?php echo URL;?>js/ajax.js"></script>
     <!-- Racunn -->
    <script type='text/javascript'>

        var config = {
          '.chosen-select'           : {},
          '.chosen-select-deselect'  : {allow_single_deselect:true},
          '.chosen-select-no-single' : {disable_search_threshold:10},
          '.chosen-select-no-results': {no_results_text:'Ooopps...Data Yang Anda Cari Tidak Ada !'},
          '.chosen-select-width'     : {width:"95%"}
        }
        for (var selector in config) {
          $(selector).chosen(config[selector]);
        }
       

        $(document).on('click','#mkAjax',function(e){
            console.log($(this).attr('data-semester'));
            document.getElementById('makul').value = $(this).attr('data-mk');
            document.getElementById('namaMakul').value = $(this).attr('namaMakul');
            document.getElementById('semesterMakul').value = $(this).attr('data-semester');
            document.getElementById('sksMakul').value = $(this).attr('data-sks');
            console.log($(this).attr('data-semester'));
        });

        $(document).on('click','#jadwalAjax',function(e){
            document.getElementById('jadwal').value = $(this).attr('data-jadwal');
            document.getElementById('dosen').value = $(this).attr('data-dosen');
            document.getElementById('dosen').value = $(this).attr('data-dosen');
            document.getElementById('ruang').value = $(this).attr('data-ruang');
            document.getElementById('kelas').value = $(this).attr('data-kelas');
            document.getElementById('kodeKelas').value = $(this).attr('data-kk');
        });

        $(document).on('click','#dosenAjax',function(e){            
            document.getElementById('fieldDosen').value = $(this).attr('data-dosen');
        });

        $(document).on('click','#ruangAjax',function(e){            
            document.getElementById('fieldRuang').value = $(this).attr('data-ruang');
        });

        $(document).on('click','#kelasAjax',function(e){            
            document.getElementById('fieldKelas').value = $(this).attr('data-kelas');
        });
       
       
    </script>


</body>

</html>


