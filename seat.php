<!--

<Ticket-Booking>
Copyright (C) <2013>  
<Abhijeet Ashok Muneshwar>
<openingknots@gmail.com>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
 any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-->

<!DOCTYPE HTML>

<?php
	include('db_login.php');
	session_start();
	$connection = mysqli_connect($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysqli_select_db($connection,'book');
?>

<HTML>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bus Ticket Booking</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/designstyle1.css">
      <link rel="stylesheet" href="css/designstyle.css"><!--db wali-->
	</HEAD>

	<BODY>
		<br /><br /><br />
		<div class="container">
			<div class="row well">
				<div class="span10">
					<form action="book.php" method="POST" onsubmit="return validateCheckBox();">
						<center>
							<label>Date of Journey</label>
							<?php
								$date = strip_tags( utf8_decode( $_POST['doj'] ) );
								echo "<input type='text' class='span2' name='doj' value='". $date ."' readonly/>";
							?>
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="./index.php" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
						</center>


						<!--<ul class="thumbnails">-->
						<?php
							$date = strip_tags( utf8_decode( $_POST['doj'] ) );
							$query = "select * from seat where date = '" . $date . "'";
							$result = mysqli_query($connection,$query);
							//AVAILABLE
							if ( mysqli_num_rows($result) == 0 )
							{
								/*for($i=2; $i<51; $i++)
								{

								echo "<li class='seat'>";
										echo "<a href='#' class='thumbnail' title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox'>";
												echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
											echo "</label>";
										echo "</a>";
									echo "</li>";								
								}*/


								echo '<div class="plane">
								<div class="cockpit">
								<h1> Select seat</h1>
								</div>
								<div class="exit exit--front fuselage">
								</div>
								<ol class="cabin fuselage">
								<!-- <li class="row row--1">-->
								<ol class="seats" type="A">
								<li class="seat">
								<input type="checkbox" disabled id="TC" />
								<label for="TC">TC</label>
								</li>
								<li class="seat">
          
        </li>
        <li class="seat">
       
        </li>
        <li class="seat">
          <input type="checkbox" id="1" name="1"/>
          <label for="1">1</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2" name="2"/>
          <label for="2">2</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3" name="3"/>
          <label for="3">3</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4" name="4"/>
          <label for="4">4</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5" name="5"/>
          <label for="5">5</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="6" name="6"/>
          <label for="6">6</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7" name="7"/>
          <label for="7">7</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8" name="8"/>
          <label for="8">8</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9" name="9"/>
          <label for="9">9</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10" name="10"/>
          <label for="10">10</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          <input type="checkbox" id="11" name="11"/>
          <label for="11">11</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="12" name="12"/>
          <label for="12">12</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="13" name="13"/>
          <label for="13">13</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="14" name="14"/>
          <label for="14">14</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="15" name="15"/>
          <label for="15">15</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="16" name="16"/>
          <label for="16">16</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="17" name="17"/>
          <label for="17">17</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="18" name="18"/>
          <label for="18">18</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="19" name="19"/>
          <label for="19">19</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="20" name="20"/>
          <label for="20">20</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="21" name="21"/>
          <label for="21">21</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="22" name="22"/>
          <label for="22">22</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="23" name="23"/>
          <label for="23">23</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="24" name="24"/>
          <label for="24">24</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="25" name="25"/>
          <label for="25">25</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="26" name="26"/>
          <label for="26">26</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="27" name="27"/>
          <label for="27">27</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="28" name="28"/>
          <label for="28">28</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="29" name="29"/>
          <label for="29">29</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="30" name="30"/>
          <label for="30">30</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          <input type="checkbox" id="31" name="31"/>
          <label for="31">31</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="32" name="32"/>
          <label for="32">32</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="33" name="33"/>
          <label for="33">33</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="34" name="34"/>
          <label for="34">34</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="35" name="35"/>
          <label for="35">35</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="36" name="36"/>
          <label for="36">36</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="37" name="37"/>
          <label for="37">37</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="38" name="38"/>
          <label for="38">38</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="39" name="39"/>
          <label for="39">39</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="40" name="40"/>
          <label for="40">40</label>
        </li>
        <li class="seat">
        
        </li>
        <li class="seat">
          <input type="checkbox" id="41" name="41"/>
          <label for="41">41</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="42" name="42"/>
          <label for="42">42</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="43" name="43"/>
          <label for="43">43</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="44" name="44"/>
          <label for="44">44</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="45" name="45"/>
          <label for="45">45</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="46" name="46"/>
          <label for="46">46</label>
        </li>
	
        <li class="seat">
          <input type="checkbox" id="47" name="47"/>
          <label for="47">47</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="48" name="48"/>
          <label for="48">48</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="49" name="49"/>
          <label for="49">49</label>
        </li>
      </ol>
    </li>
  </ol>
 
</div>';


							}
							//RESERVED
							else
							{
								$seats = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
								while($row = mysqli_fetch_array($result))
								{
									$pnr = explode("-", $row['PNR']);
									$pnr[3] = intval($pnr[3]) - 1;
									$seats[$pnr[3]] = 1;
								}
								



								echo '<div class="plane">
  	<div class="cockpit">
    <h1> Select seat</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div> 
  <ol class="cabin fuselage">
   <!-- <li class="row row--1">-->
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" disabled id="TC" name="tc"/>
          <label for="TC">Tx</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
       
        </li>';

        if($seats[0]==1){

        echo '<li class="seat">
          <input type="checkbox" id="1" name="1" disabled/>
          <label for="1">1</label>
        </li>';
    	}
        else{
        		echo '<li class="seat">
          <input type="checkbox" id="1" name="1" />
          <label for="1">1</label>
        </li>';
        }

        if($seats[1]==1){
        echo '<li class="seat">
          <input type="checkbox" id="2" name="2" disabled/>
          <label for="2">2</label>
        </li>';}
        else{
        	echo '<li class="seat">
          <input type="checkbox" id="2" name="2"/>
          <label for="2">2</label>
        </li>';
        }


        if($seats[2]==1){
        echo '<li class="seat">
          <input type="checkbox" id="3" name="3" disabled/>
          <label for="3">3</label>
        </li></ol></li>';
    	}
    	else{
    		echo '<li class="seat">
          <input type="checkbox" id="3" name="3"/>
          <label for="3">3</label>
        </li></ol></li>';
    	}


    	
    	if($seats[3]==1){
    echo '
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4" name="4" disabled/>
          <label for="4">4</label>
        </li>';}
        else{
        	echo '
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4" name="4"/>
          <label for="4">4</label>
        </li>';
        }


        if($seats[4]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="5" name="5" disabled/>
          <label for="5">5</label>
        </li>
        <li class="seat">
          
        </li>';
    	}
    	else{
    		echo '
        <li class="seat">
          <input type="checkbox" id="5" name="5"/>
          <label for="5">5</label>
        </li>
        <li class="seat">
          
        </li>';
    	}


    	if($seats[5]==1){
    		echo '
        <li class="seat">
          <input type="checkbox" id="6" name="6" disabled/>
          <label for="6">6</label>
        </li>';}
        else{
        	echo '<li class="seat">
          <input type="checkbox" id="6" name="6"/>
          <label for="6">6</label>
        </li>';
        }

        if($seats[6]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="7" name="7" disabled/>
          <label for="7">7</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="7" name="7"/>
          <label for="7">7</label>
        </li>';
        }


        if($seats[7]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="8" name="8" disabled/>
          <label for="8">8</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="8" name="8"/>
          <label for="8">8</label>
        </li>
      </ol>
    </li>';
    }

     if($seats[8]==1){
     	echo '
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9" name="9" disabled/>
          <label for="9">9</label>
        </li>';}
        else{
        	echo '
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9" name="9"/>
          <label for="9">9</label>
        </li>';

        }


        if($seats[9]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="10" name="10" disabled/>
          <label for="10">10</label>
        </li>
        <li class="seat">
         
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="10" name="10"/>
          <label for="10">10</label>
        </li>
        <li class="seat">
         
        </li>';

        }


        if($seats[10]==1){
        echo '
        <li class="seat">
          <input type="checkbox" id="11" name="11" disabled/>
          <label for="11">11</label>
        </li>';
    }else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="11" name="11"/>
          <label for="11">11</label>
        </li>';
    }
        
    	if($seats[11]==1){
    		echo '
        <li class="seat">
          <input type="checkbox" id="12" name="12" disabled/>
          <label for="12">12</label>
        </li>';}
        else{

        	echo '
        <li class="seat">
          <input type="checkbox" id="12" name="12"/>
          <label for="12">12</label>
        </li>';
        }

        if($seats[12]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="13" name="13" disabled/>
          <label for="13">13</label>
        </li>
      </ol>
    </li>';}
    else{

    	echo '
        <li class="seat">
          <input type="checkbox" id="13" name="13"/>
          <label for="13">13</label>
        </li>
      </ol>
    </li>';
    }

    if($seats[13]==1){
    	echo '
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="14" name="14" disabled/>
          <label for="14">14</label>
        </li>';}
        else{
        	echo '
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="14" name="14"/>
          <label for="14">14</label>
        </li>';
        }

        if($seats[14]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="15" name="15" disabled/>
          <label for="15">15</label>
        </li>
        <li class="seat">
          
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="15" name="15"/>
          <label for="15">15</label>
        </li>
        <li class="seat">
          
        </li>';
        }

        if($seats[15]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="16" name="16" disabled/>
          <label for="16">16</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="16" name="16"/>
          <label for="16">16</label>
        </li>';
        }


        if($seats[16]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="17" name="17" disabled/>
          <label for="17">17</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="17" name="17"/>
          <label for="17">17</label>
        </li>';
        }

        if($seats[17]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="18" name="18" disabled/>
          <label for="18">18</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="18" name="18"/>
          <label for="18">18</label>
        </li>
      </ol>
    </li>';
    }

    if($seats[18]==1){
    	echo '
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="19" name="19" disabled/>
          <label for="19">19</label>
        </li>';}
        else{
        	echo '
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="19" name="19"/>
          <label for="19">19</label>
        </li>';
        }


        if($seats[19]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="20" name="20" disabled/>
          <label for="20">20</label>
        </li>
        <li class="seat">
          
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="20" name="20"/>
          <label for="20">20</label>
        </li>
        <li class="seat">
          
        </li>';
        }


        if($seats[20]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="21" name="21" disabled/>
          <label for="21">21</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="21" name="21"/>
          <label for="21">21</label>
        </li>';
        }


        if($seats[21]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="22" name="22" disabled/>
          <label for="22">22</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="22" name="22"/>
          <label for="22">22</label>
        </li>';
        }


        if($seats[22]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="23" name="23" disabled/>
          <label for="23">23</label>
        </li>
      </ol>
    </li>';}
    else{

    	echo '
        <li class="seat">
          <input type="checkbox" id="23" name="23"/>
          <label for="23">23</label>
        </li>
      </ol>
    </li>';
    }



    if($seats[23]==1){
    	echo '
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="24" name="24" disabled/>
          <label for="24">24</label>
        </li>';}
        else{
        	echo '
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="24" name="24"/>
          <label for="24">24</label>
        </li>';
        }

        if($seats[24]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="25" name="25" disabled/>
          <label for="25">25</label>
        </li>
        <li class="seat">
          
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="25" name="25"/>
          <label for="25">25</label>
        </li>
        <li class="seat">
          
        </li>';
        }

        if($seats[25]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="26" name="26" disabled/>
          <label for="26">26</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="26" name="26"/>
          <label for="26">26</label>
        </li>';
        }

        if($seats[26]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="27" name="27" disabled/>
          <label for="27">27</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="27" name="27"/>
          <label for="27">27</label>
        </li>';
        }

        if($seats[27]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="28" name="28" disabled/>
          <label for="28">28</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="28" name="28"/>
          <label for="28">28</label>
        </li>
      </ol>
    </li>';
    }


    if($seats[28]==1){
    	echo '
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="29" name="29" disabled/>
          <label for="29">29</label>
        </li>';}
        else{
        	echo '
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="29" name="29"/>
          <label for="29">29</label>
        </li>';
        }


        if($seats[29]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="30" name="30" disabled/>
          <label for="30">30</label>
        </li>
        <li class="seat">
         
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="30" name="30"/>
          <label for="30">30</label>
        </li>
        <li class="seat">
         
        </li>';
        }


        if($seats[30]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="31" name="31" disabled/>
          <label for="31">31</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="31" name="31"/>
          <label for="31">31</label>
        </li>';
        }


        if($seats[31]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="32" name="32" disabled/>
          <label for="32">32</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="32" name="32"/>
          <label for="32">32</label>
        </li>';
        }

        if($seats[32]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="33" name="33" disabled/>
          <label for="33">33</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="33" name="33"/>
          <label for="33">33</label>
        </li>
      </ol>
    </li>';
    }

    if($seats[33]==1){
    	echo '
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="34" name="34" disabled/>
          <label for="34">34</label>
        </li>';}
        else{
        	echo '
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="34" name="34"/>
          <label for="34">34</label>
        </li>';
        }


        if($seats[34]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="35" name="35" disabled/>
          <label for="35">35</label>
        </li>
        <li class="seat">
          
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="35" name="35"/>
          <label for="35">35</label>
        </li>
        <li class="seat">
          
        </li>';
        }

        if($seats[35]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="36" name="36" disabled/>
          <label for="36">36</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="36" name="36"/>
          <label for="36">36</label>
        </li>';
        }


        if($seats[36]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="37" name="37" disabled/>
          <label for="37">37</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="37" name="37"/>
          <label for="37">37</label>
        </li>';
        }

        if($seats[37]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="38" name="38" disabled/>
          <label for="38">38</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="38" name="38"/>
          <label for="38">38</label>
        </li>
      </ol>
    </li>';
    }


    if($seats[38]==1){
    	echo '
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="39" name="39" disabled/>
          <label for="39">39</label>
        </li>';}
        else{
        	echo '
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="39" name="39"/>
          <label for="39">39</label>
        </li>';
        }

        if($seats[39]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="40" name="40" disabled/>
          <label for="40">40</label>
        </li>
        <li class="seat">
        
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="40" name="40"/>
          <label for="40">40</label>
        </li>
        <li class="seat">
        
        </li>';
        }


        if($seats[40]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="41" name="41" disabled/>
          <label for="41">41</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="41" name="41"/>
          <label for="41">41</label>
        </li>';
        }

        if($seats[41]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="42" name="42" disabled/>
          <label for="42">42</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="42" name="42"/>
          <label for="42">42</label>
        </li>';
        }


        if($seats[42]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="43" name="43" disabled/>
          <label for="43">43</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="43" name="43"/>
          <label for="43">43</label>
        </li>
      </ol>
    </li>';
    }


    if($seats[43]==1){
    	echo '
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="44" name="44" disabled/>
          <label for="44">44</label>
        </li>';}
        else{
        	echo '
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="44" name="44"/>
          <label for="44">44</label>
        </li>';
        }

        if($seats[44]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="45" name="45" disabled/>
          <label for="45">45</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="45" name="45"/>
          <label for="45">45</label>
        </li>';
        }

        if($seats[45]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="46" name="46" disabled/>
          <label for="46">46</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="46" name="46"/>
          <label for="46">46</label>
        </li>';
        }
	
		if($seats[46]==1){
			echo '
        <li class="seat">
          <input type="checkbox" id="47" name="47" disabled/>
          <label for="47">47</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="47" name="47"/>
          <label for="47">47</label>
        </li>';
        }

        if($seats[47]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="48" name="48" disabled/>
          <label for="48">48</label>
        </li>';}
        else{
        	echo '
        <li class="seat">
          <input type="checkbox" id="48" name="48"/>
          <label for="48">48</label>
        </li>';
        }

        if($seats[48]==1){
        	echo '
        <li class="seat">
          <input type="checkbox" id="49" name="49" disabled/>
          <label for="49">49</label>
        </li>
      </ol>
    </li>';}
    else{
    	echo '
        <li class="seat">
          <input type="checkbox" id="49" name="49"/>
          <label for="49">49</label>
        </li>
      </ol>
    </li>';
    }
  echo '</ol>
 
</div>';




								/*for($i=1; $i<50; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
									else
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}*/									
								
							}
						?>
						</ol>
						</ol>
						
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>