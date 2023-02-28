<?php
$id_agenda = $_GET['id_agenda'];
?>
<script>
 $(document).ready(function() {

            //load data mahasiswa saat aplikasi dijalankan 
            data_user();                          
             
               //Load form edit user
            $("#data_user").on("click", "#edit_user", function() {
                var id_user = $(this).attr("value");
                $.ajax({
                    url: 'data_user.php',
                    type: 'get',
                    data: {
                        id_user:id_user
                    },
                    success: function(data) {
                        $('#data_user').html(data);
                    }
                });
            });
            
            //simpan user
            $("#data_user").on("submit", "#form_tambah_user", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=simpan_user',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_user();
                    }
                });
            });

            //edit data user
            $("#data_user").on("submit", "#form_edit_user", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=edit_user',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_user();
                    }
                });
            });
            //button batal user
            $("#data_user").on("click", "#batal_user", function() {
                      data_user();
            });
            //hapus user
            $("#data_user").on("click", "#hapus_user", function() {

                Swal.fire({
                      title: 'Perhatian!',
                      text: "Anda mau menghapus User?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#d33',
                      cancelButtonColor: '#3085d6',
                      confirmButtonText: 'Hapus'
                      }).then((result) => {          
                      if (result.isConfirmed) {

                var id_user = $(this).attr("value");
                $.ajax({
                    url: 'proses.php?action=hapus_user',
                    type: 'post',
                    data: {
                        id_user:id_user
                    },
                    success: function(data) {
                        Swal.fire((data),'', 'warning')
                       data_user();
                    }
                });
               }
              });
            });
            
        })

         function data_user() {
            $.ajax({
                url: 'data_user.php',
                type: 'get',
                success: function(data) {
                    $('#data_user').html(data);
                }
            });
        } 
</script>
<script>
 $(document).ready(function() {

            //load data mahasiswa saat aplikasi dijalankan 
            data_agenda();
            data_mobile();
            data_jabatan(); 
            data_detail();                            
             
            
            //Load form detail agenda
            $("#data_mobile").on("click", "#d_agenda", function() {
                var id_agenda = $(this).attr("value");
                $.ajax({
                    url: 'mobile2.php',
                    type: 'get',
                    data: {
                        id_agenda:id_agenda
                    },
                    success: function(data) {
                        $('#data_mobile').html(data);
                    }
                });
            });
            //button batal d_agenda
            $("#data_mobile").on("click", "#batal_detail", function() {
                      data_mobile();
            });
               //Load form edit agenda
            $("#data_agenda").on("click", "#edit_agenda", function() {
                var id_agenda = $(this).attr("value");
                $.ajax({
                    url: 'data_agenda.php',
                    type: 'get',
                    data: {
                        id_agenda:id_agenda
                    },
                    success: function(data) {
                        $('#data_agenda').html(data);
                    }
                });
            });
            
            //simpan agenda
            $("#data_agenda").on("submit", "#form_tambah_agenda", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=simpan_agenda',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_agenda();
                    }
                });
            });

            //edit data agenda
            $("#data_agenda").on("submit", "#form_edit_agenda", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=edit_agenda',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_agenda();
                    }
                });
            });

             //edit data agenda
            $("#data_detail").on("submit", "#form_reset_laporan", function(e) {
                e.preventDefault();
                 Swal.fire({
                      title: 'Perhatian!',
                      text: "Anda Yakin Mereset Laporan? Laporan Anda Akan Hilang!",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#d33',
                      cancelButtonColor: '#3085d6',
                      confirmButtonText: 'Reset Laporan'
                      }).then((result) => {          
                      if (result.isConfirmed) {
                $.ajax({
                    url: 'proses.php?action=reset_laporan',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_detail();
                        }
                     });
                   }
                });
            });

            //kirim laporan
            $("#data_detail").on("submit", "#edit_laporan", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=kirim_laporan',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_detail();
                    }
                });
            });

            //kirim disposisi
            $("#data_detail").on("submit", "#edit_disposisi", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=kirim_disposisi',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_detail();
                    }
                });
            });

            //button batal agenda
            $("#data_agenda").on("click", "#batal_agenda", function() {
                      data_agenda();
            });
            //hapus agenda
            $("#data_agenda").on("click", "#hapus_agenda", function() {

                Swal.fire({
                      title: 'Perhatian!',
                      text: "Anda mau menghapus agenda?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#d33',
                      cancelButtonColor: '#3085d6',
                      confirmButtonText: 'Hapus'
                      }).then((result) => {          
                      if (result.isConfirmed) {

                var id_agenda = $(this).attr("value");
                $.ajax({
                    url: 'proses.php?action=hapus_agenda',
                    type: 'post',
                    data: {
                        id_agenda:id_agenda
                    },
                    success: function(data) {
                        Swal.fire((data),'', 'warning')
                       data_agenda();
                    }
                });
               }
              });
            });

             //Load form edit jabatan
            $("#data_jabatan").on("click", "#edit_jabatan", function() {
                var id_jabatan = $(this).attr("value");
                $.ajax({
                    url: 'data_jabatan.php',
                    type: 'get',
                    data: {
                        id_jabatan:id_jabatan
                    },
                    success: function(data) {
                        $('#data_jabatan').html(data);
                    }
                });
            });
            
            //simpan jabatan
            $("#data_jabatan").on("submit", "#form_tambah_jabatan", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=simpan_jabatan',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_jabatan();
                    }
                });
            });

            //edit data jabatan
            $("#data_jabatan").on("submit", "#form_edit_jabatan", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'proses.php?action=edit_jabatan',
                    type: 'post',
                    data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        data_jabatan();
                    }
                });
            });
            //button batal jabatan
            $("#data_jabatan").on("click", "#batal_jabatan", function() {
                      data_jabatan();
            });
            //hapus jabatan
            $("#data_jabatan").on("click", "#hapus_jabatan", function() {

                Swal.fire({
                      title: 'Perhatian!',
                      text: "Anda mau menghapus jabatan?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#d33',
                      cancelButtonColor: '#3085d6',
                      confirmButtonText: 'Hapus'
                      }).then((result) => {          
                      if (result.isConfirmed) {

                var id_jabatan = $(this).attr("value");
                $.ajax({
                    url: 'proses.php?action=hapus_jabatan',
                    type: 'post',
                    data: {
                        id_jabatan:id_jabatan
                    },
                    success: function(data) {
                        Swal.fire((data),'', 'warning')
                        data_jabatan();
                    }
                });
               }
              });
            });

            $("#data_detail").on("click","#status",function(e){
                var status = $(this).val();
                var id = $(this).data('id');
                if(status == 0){
                    status = 1;
                }else {
                    status = 0;                  
                }
                $.ajax({
                    url : "status.php",
                    type : "POST",
                    data : {status:status,id:id},
                    success : function(data){
                      data_detail();

                    }
                });
            });
            
        })

         function data_agenda() {
            $.ajax({
                url: 'data_agenda.php',
                type: 'get',
                success: function(data) {
                    $('#data_agenda').html(data);
                }
            });
        }
        function data_mobile() {
            $.ajax({
                url: 'mobile.php',
                type: 'get',
                success: function(data) {
                    $('#data_mobile').html(data);
                }
            });
        } 
        function data_detail() {
            $.ajax({
                url: 'mobile2.php?id_agenda=<?php echo $id_agenda;?>',
                type: 'get',
                success: function(data) {
                    $('#data_detail').html(data);
                }
            });
        }   

        function data_jabatan() {
            $.ajax({
                url: 'data_jabatan.php',
                type: 'get',
                success: function(data) {
                    $('#data_jabatan').html(data);
                }
            });
        }  
     
</script>xfg