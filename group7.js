
// load
$(document).ready(function(){
    $("#home").click(function(){
        $("#result").load("home-group7.php");
    });
});

$(document).ready(function(){
    $("#news").click(function(){
        $("#result").load("news-group7.php");
    });
});

$(document).ready(function(){
    $("#login").click(function(){
        $("#result").load("form_login.php");
    });
});

$(document).ready(function(){
    $("#logout1").click(function(){
         
         $("#navbarSupportedContent").load("menu_awal.php");
         $("#result").load("home-group7.php");
    });
});


$(document).ready(function(){
    $("#library").click(function(){
        $("#result").load("library-group7.php");
    });
});

// ini filter
$(document).ready(function() {
    $("#btn-group7").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".book-group7").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

// ini form
$(document).ready(function(){
    $("#form1").click(function() {
        $.get("GET-group7.php", {page : "FAQ"},
        function(data){
            $("#result").html(data)
        })
    })
    $("#form2").click(function() {
        $.get("GET-group7.php", {page : "kunjungan"},
        function(data){
            $("#result").html(data)
        })
    })
    $("#form3").click(function() {
        $.get("GET-group7.php", {page : "peminjaman"},
        function(data){
            $("#result").html(data)
        })
    })
})

// ini punya library
$(document).ready(function() {
    $(".pilihbuku").click(function() {
        var judulBuku = $(".judulbuku").text();
        $("#namaBarang").val(judulBuku);
        $("#hasil").text("Hasil: " + judulBuku);
    });
});


$(document).ready(function() {
    var buku;
   for (var i = 0; i < 5; i++) {
      if(i==0){
        buku='pdf/dilan.pdf';
      }else if(i==1){
        buku='pdf/atomic.pdf';
      }else if(i==2){
        buku='pdf/Matahari.pdf';
      }else if(i==3){
        buku='pdf/bodoamat.pdf';
      }else if(i==4){
        buku='pdf/Bintang.pdf';
      }else if(i==5){
        buku='pdf/Bulan.pdf';
      }else if(i==6){
        buku='pdf/Roshidere.pdf';
      }else if(i==7){
        buku='pdf/Classroom.pdf';
      }else if(i==8){
        buku='pdf/Mindset.pdf';
      }else if(i==9){
        buku='pdf/Selena.pdf';
      }else if(i==10){
        buku='pdf/Money.pdf';
      }else if(i==11){
        buku='pdf/Hujan.pdf';
      }else if(i==12){
        buku='pdf/kebiasaan.pdf';
      }else if(i==13){
        buku='pdf/Teras.pdf';
      }else if(i==14){
        buku='pdf/Alpha.pdf';
      }else if(i==15){
        buku='pdf/Bumi.pdf';
      }
      
  $("#"+i).flipBook({
    //Layout Setting
    pdfUrl:buku,
    lightBox:true,
    layout:3,
    search:{enabled:true},
    btnSearch:{enabled:true},
    currentPage:{vAlign:"bottom", hAlign:"left"},
    // BTN SETTING
    btnShare : {enabled:false},
    btnPrint : {
      hideOnMobile:true
    },
    btnDownloadPages : {
      enabled: false,
      title: "Download pages",
      icon: "fa-download",
      icon2: "file_download",
      url: "images/pdf.rar",
      name: "allPages.zip",
      hideOnMobile:false
    },
    btnColor:'rgb(255,120,60)',
    sideBtnColor:'rgb(255,120,60)',
    sideBtnSize:60,
    sideBtnBackground:"rgba(0,0,0,.7)",
    sideBtnRadius:60,
    btnSound:{vAlign:"top", hAlign:"left"},
    btnAutoplay:{vAlign:"top", hAlign:"left"},
    // SHARING
    // btnShare : {
    //   enabled: true,
    //   title: "Share",
    //   icon: "fa-share-alt"
    // },
    // facebook : {
    //   enabled: true,
    //   url: "ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    // },
    // google_plus : {
    //   enabled: false
    // },
    // email : {
    //   enabled: true,
    //   url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf",
    //   title: "PDF KPK",
    //   description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
    // },
    // twitter : {
    //   enabled: true,
    //   url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    // },
    // pinterest : {
    // enabled: true,
    // url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    // }
    });
   }
});

// ini tema
$(document).ready(function () {
  $("#tema1").click(function () {
      $("body").removeClass("dark-mode");
      // $("#container-group7").removeClass("dark-mode");
  });
  $("#tema2").click(function () {
      $("body").addClass("dark-mode");
      $("#container-group7").addClass("dark-mode");
  });
});
