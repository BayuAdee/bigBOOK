// $(document).ready(function() {
    // alert("halllo");
//     $("#kontak496",).hide();
// })

// $(document).ready(function() {
//     $("#klik496").click(function() {
//         $("#kontak496", ".kotak496").show();
//     })
// })

// $(document).ready(function() {
//     $("#klik496").click(function() {
//         $("#rubah496").text("Cieee tertarik nih");
//     });
// });

// $(document).ready(function() {
//     $("#kirim496").click(function() {
//         var pesan = $("#pesan496").val()
//         $.get("proses496.php", {pesan : pesan},
//         function(data){
//             $("#hasil496").html(data)
//         })
//     })
// })

// $(document).ready(function() {
//     $("#outtopik496").change(function() {
//         if ($(this).is(":checked")) {
//             $("#alamatForm").slideDown();
//         } else {
//             $("#alamatForm").slideUp();
//         }
//     });
// });


// $(document).ready(function() {
//     // alert("halllo");
//     $("#kontak496").hide();
// });

// $(document).ready(function() {
//     $("#klik496").click(function() {
//         $("#kontak496, .kotak496").show();
//     });
// });

// $(document).ready(function() {
//     $("#klik496").click(function() {
//         $("#rubah496").text("Cieee tertarik nih");
//     });
// });

// $(document).ready(function() {
//     $("#outtopik496").change(function() {
//         if ($(this).is(":checked")) {
//             $("#outform496").slideDown();
//         } else {
//             $("#outform496").slideUp();
//         }
//     });
// });

// $(document).ready(function() {
//     $("#kirim496").click(function() {
//         var pesan = $("#pesan496").val();
//         var bebas = $("#bebas496").val();
//         $.get("proses496.php", {pesan: pesan, bebas: bebas},
//         function(data){
//             $("#hasil496").html(data);
//         });
//     });
// });

$(document).ready(function() {
    $("#kontak496").hide();
    $("#outform496").hide();

    $("#klik496").click(function() {
        $("#kontak496, .kotak496").show();
        $("#rubah496").text("Cieee tertarik nih");
    });

    $("#kirim496").click(function(event) {
        event.preventDefault(); // Mencegah perilaku default formulir
        var pesan = $("#pesan496").val();
        var bebas = $("#bebas496").val();
        $.get("proses496.php", {pesan: pesan, bebas: bebas},
        function(data){
            $("#hasil496").html(data);
        });
    });

    $("#outtopik496").change(function() {
        if ($(this).is(":checked")) {
            $("#outform496").slideDown();
        } else {
            $("#outform496").slideUp();
        }
    });
});