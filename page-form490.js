// $(document).ready(function(){
//     $(".kirim").click(function(){
//         alert("page");
//         var nama = $("#nama").val();
//         var judul = $("#judul").val();
//         var tanggal = $("#pinjam").val();
//         var kembali = $("#kembali").val();
//         $.get("proses490.php",
//         {
//             nama: nama,
//             judul: judul,
//             tanggal: tanggal,
//             kembali: kembali
//         },function(data){
//             $("#okta").html(data);
//         });
//     });
// });


$(document).ready(function() {
    $("input[name='radioGroup']").change(function() {
        var nilaiRadio = $("input[name='radioGroup']:checked").val();
        $("#outputRadio").text("Opsi yang dipilih: " + nilaiRadio);

        // Nonaktifkan tombol "Kirim" jika radio1490 dipilih
        if ($("input#radio1490").is(":checked")) {
            $(".kirim490").prop("disabled", true);
        } else {
            $(".kirim490").prop("disabled", false);
        }
    });

    // Tombol "Kirim" diklik
    $(".kirim490").on("click", function(event) {
        if ($("input#radio1490").is(":checked")) {
            alert("Tidak dapat mengirim karena opsi yang dipilih adalah 'iya nih, kurang'");
            event.preventDefault(); // Mencegah operasi default tombol submit
        }
    });
});


$(document).ready(function(){
    $("#kirim490").on("click", function(event){
        event.preventDefault();
        if($("#nama490").val()==""){
            $("#errornama").html("<div class='alert alert-danger' style='margin:10px'>Nama wajib diisi</div>")
        }else{
            $("#errornama").html("");
        }
        ;if($("#judul490").val()==""){
            $("#errorjudul").html("<div class='alert alert-danger' style='margin:10px'>Judul wajib diisi</div>")
        }else{
            $("#errorjudul").html("");
        } ; 
        if($("#pinjam490").val()==""){
           
            $("#errorpinjam").html("<div class='alert alert-danger' style='margin:10px'>Pinjam wajib diisi</div>")
        }else{
            $("#errorpinjam").html("");
        } ;

        if($("#kembali490").val()==""){
           
            $("#errorkembali").html("<div class='alert alert-danger' style='margin:10px'>Kembali wajib diisi</div>")
        }else{
            $("#errorkembali").html("");
        } ;
        if($("#nama490").val()!="" && $("#judul490").val()!="" && $("#pinjam490").val()!="" && $("#kembali490").val()!=""){
       
        var nama = $("#nama490").val();
        var judul = $("#judul490").val();
        var tanggal = $("#pinjam490").val();
        var kembali = $("#kembali490").val();
        
        $.get("proses490.php", {
            nama: nama,
            judul: judul,
            tanggal: tanggal,
            kembali: kembali
        }, function(data){
           
            $("#okta").html(data);
            $("#msg").html("<div class='alert alert-success' style='margin:10px'>Data Berhasil Dimasukan </div>");
        });
    }
    });
    
});


$(document).ready(function(){
    $("#btnlogin").on("click", function(event){
        
        event.preventDefault();
        if($("#username").val()==""){
            $("#errorusername").html("<div class='alert alert-danger' style='margin:10px'>Username </div>")
        }else{
            $("#errorusername").html("");
        };
     if($("#password").val()==""){
            $("#errorpassword").html("<div class='alert alert-danger' style='margin:10px'>Password wajib diisi</div>")
        }else{
            $("#errorpassword").html("");
        } ; 
      

        if($("#username").val()!="" && $("#password").val()!="" ){
            if ($("#username").val() === "user" && $("#password").val() == "user") {
                $("#navbarSupportedContent").load("menu_user.php");
                $("#msg").html("<div class='alert alert-success' style='margin:10px'>Login User Berhasil  </div>");
            }else{
                $("#msg").html("<div class='alert alert-danger' style='top:10px;margin:10px'>Login failed. Please check your username and password.</div>")
            }
         
            
         
    }
    });
    
});