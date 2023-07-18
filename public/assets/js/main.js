function lelang(token){
  // Set the date we're counting down to 
  
  

  var tanggalTujuan = new Date("march 11, 2023 09:30:00").getTime();
  var hari;
  var jam;
  var menit; 
  var detik; 
  var point;
  var id_barangs = []
  // Update the count down every 1 second 
  var x = setInterval(function() { 
  
    // Get today's date and time 
    var sekarang = new Date().getTime(); 
  
    // Find the distance between now and the count down date 
    var selisih = tanggalTujuan - sekarang;
    // console.log(selisih)
  
    // Time calculations for days, hours, minutes and seconds 
    hari = Math.floor(selisih / (1000 * 60 * 60 * 24)); 
    jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); 
    menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60)); 
    detik = Math.floor((selisih % (1000 * 60)) / 1000); 

    var total = document.getElementsByClassName("demo").length;
    for(let i = 0;i < total;i++){
      // console.log(i);
      // Display the result in the element with id="demo" 
      document.getElementsByClassName("demo")[i].innerHTML = hari + "d " + jam + "h " 
      + menit + "m " + detik + "s ";
    }
    
    // If the count down is finished, write some text 
    if (selisih <= 0) { 
      clearInterval(x);
      var total = document.getElementsByClassName("demo").length;
      for(let i = 0;i < total;i++){
        // console.log(i);
        document.getElementsByClassName("demo")[i].innerHTML = "MAAF WAKTU HABIS"; 
      } 
    }
  
  }, 1000);

}