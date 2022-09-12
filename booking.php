<?php
  session_start(); 
  include('connect.php');

  $sql="select * from movie where movie_name='{$_GET['id']}' ";
  $query=mysqli_query($conn, $sql);
  $row=mysqli_fetch_object($query);
  $movie_name=$row->movie_name;
  $_SESSION['movie_name'] = $movie_name;

  if(isset($_POST['submit'])) 
  {
    $datee=$_POST['datee'];
    $location=$_POST['location']; 
    $showtime=$_POST['showtime'];

    $_SESSION['datee'] = $datee;
    $_SESSION['location']= $location;
    $_SESSION['showtime']=$showtime;

    header("Location: seat.php"); 
  }
?> 

<html>

  <head>
   <!--search-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--search-->
     <link rel="stylesheet" href="style.css">
  </head>

  <style>

    /*button*/
    [type=radio] { 
      position: absolute;
      opacity: 0;
      width: 0;
      height: 0;
    }

    /* IMAGE STYLES */
    [type=radio] + img {
      cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked + img {
      outline: 2px solid #9324ac;
    }
    /*search*/
    input[type=text] {
      width: 130px;
      height: 40px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('searchicon.png');
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
      width: 100%;
    }

    /*the container must be positioned relative:*/
    .custom-select {
      position: relative;
      font-family: Arial;
    }

    .custom-select select {
      display: none; /*hide original SELECT element:*/
    }

    .select-selected {
      background-color: black;
      height:45px;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
      position: absolute;
      content: "";
      top: 55px;
      right: 10px;
      width: 0;
      height: 0;
      border: 6px solid transparent;
      border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
      border-color: transparent transparent #fff transparent;
      top: 50px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
      color: #ffffff;
      padding: 8px 16px;
      border: 1px solid transparent;
      border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
      cursor: pointer;
      user-select: none;
    }

    /*style items (options):*/
    .select-items {
      position: absolute;
      background-color: black ;
      top: 100%;
      left: 0;
      right: 0;
      z-index: 99;
    }

    /*hide the items when the select box is closed:*/
    .select-hide {
      display: none;
    }

    .select-items div:hover, .same-as-selected {
      background-color: rgba(0, 0, 0, 0.1);
    }

  </style>

  <body style="background-color:#161417;color:white;">

    <ul>
    	<li><a href="usermovies.php"><img src="img/logo.jpg" alt=logo style="margin-left: 80px;margin-top: 10px"></a></li>
      <li><a class="active" href="usermovies.php" style="margin-top: 30px;">Movies</a></li>
      <!--li><a href="showtime.php">Showtime</a></li-->
      <li><a href="location.html" >Cinemas</a></li>
      <li><a href="FoodMenu.php">Food</a></li>
    </ul>

    <a href="usermovies.php" class="button" style="width:127px;padding-left: 18px; margin-left: 30px;margin-top: 40px">CANCEL</a>
    <h2 style= "margin-left: 29px; margin-top: 80px"> MOVIES : <?php echo $movie_name; ?></h2>
    <h2 style= "margin-left: 29px; margin-top: 40px"> CHOOSE DATE</h2>

    <hr class="new1">

    <form method="POST">
      <center>
        <center><p style="letter-spacing: 8px; color: #9324ac;font-size: 40px">DATE</p></center>

        <label><input type="date" name="datee">
        <!--img src="img/111.png"></label-->
        <!--label><input type="radio" name="datee" value="2 Dec 2019" checked>
        <img src="img/2.png"></label>
        <label><input type="radio" name="datee" value="3 Dec 2019" checked>
        <img src="img/3.png"></label>
        <label><input type="radio" name="datee" value="4 Dec 2019" checked>
        <img src="img/4.png"></label>
        <label><input type="radio" name="datee" value="5 Dec 2019" checked>
        <img src="img/5.png"></label>
        <label><input type="radio" name="datee" value="6 Dec 2019" checked>
        <img src="img/6.png"></label>
        <label><input type="radio" name="datee" value="7 Dec 2019" checked>
        <img src="img/7.png"></label-->
      </center>

      <h2 style= "margin-left: 29px">LOCATION</h2>

      <hr class="new1">

      <center>

        <div class="custom-select" style="width:300px; padding-top: 40px;">
          <select name="location" id="location">
            <option value="0">SELECT LOCATION</option>
            <option value="MID VALLEY">MID VALLEY</option>
            <option value="MESRA MALL">MESRA MALL</option>
            <option value="SUNWAY PYRAMID">SUNWAY PYRAMID</option>
            <option value="NU SENTRAL">NU SENTRAL</option>
            <option value="PAVILLION">PAVILLION</option>
            <option value="TOPPEN JB">TOPPEN JB</option>
          </select>
        </div>
      </center>

      <h2 style= "margin-left: 29px">SHOWTIME</h2>

      <hr class="new1">

      <h2 style= "margin-left: 29px">&emsp;</h2>

      <center>
        <label>
        <input type="radio" name="showtime" value="10:00 AM" checked>
        <img src="img/1000.png"></label>&emsp;
        <label> <input type="radio" name="showtime" value="12:00 PM" checked>
        <img src="img/1200.png"> </label>&emsp;
        <label><input type="radio" name="showtime" value="4:00 PM" checked>
        <img src="img/400.png"></label>&emsp;
        <label><input type="radio" name="showtime" value="8:00 PM" checked>
        <img src="img/8000.png"></label>      
      </center>

      <h2>&emsp;</h2>
      <button input type="submit" name="submit" class="button" style="width:135px;padding-left: 18px; margin-left: 1200px">CONTINUE </button>
    </form>


    <hr class="new1">

    <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Follow us : </p>
    <p style="text-align: right;color: white;letter-spacing: 2px;font-size: 11px"> Copyright Reserved © 2019 iMad Cinemas Sdn Bhd. All Rights Reserved.</p>
  </body>

  <script>
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");

    for (i = 0; i < x.length; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");

    for (j = 1; j < selElmnt.length; j++) {
      /*for each option in the original select element,create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
      /*when an item is clicked, update the original select box, and the selected item:*/
      var y, i, k, s, h;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      h = this.parentNode.previousSibling;
          
    for (i = 0; i < s.length; i++) {
      if (s.options[i].innerHTML == this.innerHTML) {
        s.selectedIndex = i;
        h.innerHTML = this.innerHTML;
        y = this.parentNode.getElementsByClassName("same-as-selected");
              
        for (k = 0; k < y.length; k++) {
          y[k].removeAttribute("class");
        }
          this.setAttribute("class", "same-as-selected");
          break;
      }
    }
      h.click();
      });
      b.appendChild(c);
    }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes, and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }

    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document, except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");

      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }

      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box, then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
  </script>
</html>
