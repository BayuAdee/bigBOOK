// $(document).ready(function() {
//     $('#btn468').click(function(event) {
//       event.preventDefault();
//       $('#myForm').submit();
      
//       var nama = $("#nama").val();
//       $.get("proses468.php", {
//         nama: nama,
//         }, function(data){
//         $("#output468").html(data);
    
//         var currentDate = new Date();
//         var formattedDate = currentDate.getDate() + '/' + (currentDate.getMonth() + 1) + '/' + currentDate.getFullYear();
//         $('#tglKunjungan').html('Tanggal Kunjungan: ' + formattedDate).show();
//       });
//     });
//   });
  
//     Peristiwa change untuk mendeteksi perubahan konten formulir
//     $('#myForm').change(function() {
//       Ganti tampilan ke output pada div dengan class "pendaftaran"
//       $('.pendaftaran').hide();
//       $('#output').html("Formulir sedang diisi...").show();
//     });


// $(document).ready(function() {
//     $("#btn468").click(function(event) {
//         event.preventDefault();
//         var nama = $("#nama468").val();
  
//         $.get("proses468.php", {
//             nama: nama
//         }, function(data){
//             $("#output468").html(data);
  
//             var tanggalKunjungan = new Date().toLocaleDateString();
//             $("#tglKunjungan").text("Terimakasih Sudah Mampir Pada " + tanggalKunjungan);
//         });
//     });
//   });

  $(document).ready(function() {
    function changeBodyBackgroundColor(color) {
      $("body").css("background-color", color);
    }
  
    $("#colorPicker").on("input", function() {
      var color = $(this).val();
      changeBodyBackgroundColor(color);
    });
  
    $("#btn468").click(function(event) {
      event.preventDefault();
      var nama = $("#nama468").val();
  
      $.get("proses468.php", {
        nama: nama
      }, function(data) {
        $("#output468").html(data);
  
        var tanggalKunjungan = new Date().toLocaleDateString();
        $("#tglKunjungan").text("Terimakasih Sudah Mampir Pada " + tanggalKunjungan);
      });
    });
  });

// $(document).ready(function() {
//   $("#btn468").click(function(event) {
//       event.preventDefault();
//       var nama = $("#nama468").val();

//       $.get("proses468.php", {
//           nama: nama
//       }, function(data){
//           $("#output468").html(data);

//           var tanggalKunjungan = new Date().toLocaleDateString();
//               $("#tglKunjungan").text("Tanggal Kunjungan: " + tanggalKunjungan);
//       });
//   });
// });