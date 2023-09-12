<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Flights</title>
  <link rel="stylesheet" href="Tickets_Style.css">
</head>
<body class="bg_reg">

<div class="grid">
  
  <button class = "button hover"  onclick = "clickbutton('top3','mid')" ondblclick = "Javascript:alert('Flight 1 - Booked')">
        <!-- <div class="whitetab white">.</div> -->

        <div id="top">Flight:</div>
        <div id="top2">Destination:</div>
        <div id="top3">Passenger:</div>

        <div id="mid">Passenger</div>
        <div id="mid2">Gate</div>
        <div id="mid3">Departure</div>
        <div id="mid4">Ticket Code</div>
        <div id="mid5">Seat</div>
        <div id="mid6">Price: 450</div>

          <img class="wing" src="wing.png" width="150" height="125">
          <img class="barcode" src="barcode.png" width="50" height="27.875">
          <img class="logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <!-- <div class="whitetab2 white2">...</div> -->
  </button>

  <button class = "button hover" onclick = "clickbutton('t2top3','t2mid')" ondblclick="Javascript:alert('Flight 2 - Booked')">

        <div class="t2whitetab white">.</div>

        <div id="t2top">Flight:</div>
        <div id="t2top2">Destination:</div>
        <div id="t2top3">Passenger:</div>

        <div id="t2mid">Passenger</div>
        <div id="t2mid2">Gate</div>
        <div id="t2mid3">Departure</div>
        <div id="t2mid4">Ticket Code</div>
        <div id="t2mid5">Seat</div>

          <img class="t2wing" src="wing.png" width="150" height="125">
          <img class="t2barcode" src="barcode.png" width="50" height="27.875">
          <img class="t2logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t2logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t2whitetab2 white2">...</div>

  </button>

  <button class = "button hover" onclick = "clickbutton('t3top3','t3mid')"  ondblclick="Javascript:alert('Flight 3 - Booked')">

        <div class="t3whitetab white">.</div>

        <div id="t3top">Flight:</div>
        <div id="t3top2">Destination:</div>
        <div id="t3top3">Passenger:</div>

        <div id="t3mid">Passenger</div>
        <div id="t3mid2">Gate</div>
        <div id="t3mid3">Departure</div>
        <div id="t3mid4">Ticket Code</div>
        <div id="t3mid5">Seat</div>

          <img class="t3wing" src="wing.png" width="150" height="125">
          <img class="t3barcode" src="barcode.png" width="50" height="27.875">
          <img class="t3logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t3logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t3whitetab2 white2">...</div>

  </button>

  <button class = "button hover" onclick = "clickbutton('t4top3','t4mid')" ondblclick="Javascript:alert('Flight 4 - Booked')">

        <div class="t4whitetab white">.</div>

        <div id="t4top">Flight:</div>
        <div id="t4top2">Destination:</div>
        <div id="t4top3">Passenger:</div>

        <div id="t4mid">Passenger</div>
        <div id="t4mid2">Gate</div>
        <div id="t4mid3">Departure</div>
        <div id="t4mid4">Ticket Code</div>
        <div id="t4mid5">Seat</div>

          <img class="t4wing" src="wing.png" width="150" height="125">
          <img class="t4barcode" src="barcode.png" width="50" height="27.875">
          <img class="t4logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t4logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t4whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t5top3','t5mid')" ondblclick="Javascript:alert('Flight 5 - Booked')">

        <div class="t5whitetab white">.</div>

        <div id="t5top">Flight:</div>
        <div id="t5top2">Destination:</div>
        <div id="t5top3">Passenger:</div>

        <div id="t5mid">Passenger</div>
        <div id="t5mid2">Gate</div>
        <div id="t5mid3">Departure</div>
        <div id="t5mid4">Ticket Code</div>
        <div id="t5mid5">Seat</div>

          <img class="t5wing" src="wing.png" width="150" height="125">
          <img class="t5barcode" src="barcode.png" width="50" height="27.875">
          <img class="t5logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t5logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t5whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t6top3','t6mid')" ondblclick="Javascript:alert('Flight 6 - Booked')">

        <div class="t6whitetab white">.</div>

        <div id="t6top">Flight:</div>
        <div id="t6top2">Destination:</div>
        <div id="t6top3">Passenger:</div>

        <div id="t6mid">Passenger</div>
        <div id="t6mid2">Gate</div>
        <div id="t6mid3">Departure</div>
        <div id="t6mid4">Ticket Code</div>
        <div id="t6mid5">Seat</div>

          <img class="t6wing" src="wing.png" width="150" height="125">
          <img class="t6barcode" src="barcode.png" width="50" height="27.875">
          <img class="t6logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t6logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t6whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t7top3','t7mid')" ondblclick="Javascript:alert('Flight 7 - Booked')">

        <div class="t7whitetab white">.</div>

        <div id="t7top">Flight:</div>
        <div id="t7top2">Destination:</div>
        <div id="t7top3">Passenger:</div>

        <div id="t7mid">Passenger</div>
        <div id="t7mid2">Gate</div>
        <div id="t7mid3">Departure</div>
        <div id="t7mid4">Ticket Code</div>
        <div id="t7mid5">Seat</div>

          <img class="t7wing" src="wing.png" width="150" height="125">
          <img class="t7barcode" src="barcode.png" width="50" height="27.875">
          <img class="t7logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t7logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t7whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t8top3','t8mid')" ondblclick="Javascript:alert('Flight 8 - Booked')">

        <div class="t8whitetab white">.</div>

        <div id="t8top">Flight:</div>
        <div id="t8top2">Destination:</div>
        <div id="t8top3">Passenger:</div>

        <div id="t8mid">Passenger</div>
        <div id="t8mid2">Gate</div>
        <div id="t8mid3">Departure</div>
        <div id="t8mid4">Ticket Code</div>
        <div id="t8mid5">Seat</div>

          <img class="t8wing" src="wing.png" width="150" height="125">
          <img class="t8barcode" src="barcode.png" width="50" height="27.875">
          <img class="t8logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t8logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t8whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t9top3','t9mid')" ondblclick="Javascript:alert('Flight 9 - Booked')">

        <div class="t9whitetab white">.</div>

        <div id="t9top">Flight:</div>
        <div id="t9top2">Destination:</div>
        <div id="t9top3">Passenger:</div>

        <div id="t9mid">Passenger</div>
        <div id="t9mid2">Gate</div>
        <div id="t9mid3">Departure</div>
        <div id="t9mid4">Ticket Code</div>
        <div id="t9mid5">Seat</div>

          <img class="t9wing" src="wing.png" width="150" height="125">
          <img class="t9barcode" src="barcode.png" width="50" height="27.875">
          <img class="t9logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t9logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t9whitetab2 white2">...</div>
        
  </button>

  <button class = "button hover" onclick = "clickbutton('t10top3','t10mid')" ondblclick="Javascript:alert('Flight 10 - Booked')">

        <div class="t10whitetab white">.</div>

        <div id="t10top">Flight:</div>
        <div id="t10top2">Destination:</div>
        <div id="t10top3">Passenger:</div>

        <div id="t10mid">Passenger</div>
        <div id="t10mid2">Gate</div>
        <div id="t10mid3">Departure</div>
        <div id="t10mid4">Ticket Code</div>
        <div id="t10mid5">Seat</div>

          <img class="t10wing" src="wing.png" width="150" height="125">
          <img class="t10barcode" src="barcode.png" width="50" height="27.875">
          <img class="t10logo-one"src="logo_transparent.png"width="94.0625" height="19.1875">
          <img class="t10logo-one-two"src="logo_transparent.png"width="94.0625" height="19.1875">

        <div class="t10whitetab2 white2">...</div>
        <script>
            var codes = ['FGKFO34','FMGOE355','FCKAL8K','FKGKR6','FKVMK10','FKGOSM3','FABC345K','FMXLW23','FMALWOF34','FMVLFP10'];
            var destinations = ['Manila','Karachi','Berlin','Paris','New York City','Tokyo','New Delhi','London','Bangkok','Beirut'];
            var gates = ['GA24','GA5','GA12','GA26','GA31','GA46','GA50','GA56','GA10','GA7','GA48'];
            var seats  = ['1A','1B','1C','2A','2B','2C','3A','3B','3C','4A'];
            function changeText(str,strtwo,strthree,strfour,strfive,strsix){
              for(var c = 0; c < codes.length; c++){
              var randomize = Math.floor(Math.random() * 10 * 1);   
              document.getElementById(str).innerText = " Ticket Code: \n" + codes[randomize];
              document.getElementById(strtwo).innerText = "Gate: \n" + gates[randomize];
              document.getElementById(strthree).innerText = "Seat: \n" + seats[randomize];   
              document.getElementById(strfour).innerText = "Departure: \n" + destinations[randomize]; 
              document.getElementById(strfive).innerText = "Destination:  " + destinations[randomize]; 
              document.getElementById(strsix).innerText = "Flight:  " + codes[randomize]; 
            }
          }
          //ticketone 
          changeText("mid4","mid2","mid5","mid3","top2","top")
          //tickettwo
          changeText("t2mid4","t2mid2","t2mid5","t2mid3","t2top2","t2top")
          //ticketthree
          changeText("t3mid4","t3mid2","t3mid5","t3mid3","t3top2","t3top")
          //ticketfour
          changeText("t4mid4","t4mid2","t4mid5","t4mid3","t4top2","t4top")
          //ticketfive
          changeText("t5mid4","t5mid2","t5mid5","t5mid3","t5top2","t5top")
          //ticketsix
          changeText("t6mid4","t6mid2","t6mid5","t6mid3","t6top2","t6top")
          //ticketseven
          changeText("t7mid4","t7mid2","t7mid5","t7mid3","t7top2","t7top")
          //ticketeight
          changeText("t8mid4","t8mid2","t8mid5","t8mid3","t8top2","t8top")
          //ticketnine
          changeText("t9mid4","t9mid2","t9mid5","t9mid3","t9top2","t9top")
          //ticketten
          changeText("t10mid4","t10mid2","t10mid5","t10mid3","t10top2","t10top")

          var name = '<?php echo $_SESSION['Username']; ?>'
          function clickbutton(str,str2){ 
              document.getElementById(str).innerHTML = 'Passenger: ' + ' ' +  name
              document.getElementById(str2).innerHTML = 'Passenger: ' + ' ' +  name  
          }
        </script>   
      </button>
    </div>
  </body>
</html>
