<!DOCTYPE html>
<html>
<head>
	<title>Welcome to railway enquiry system(unofficial)-Live Train Status</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
	 <style>
	 table, th, td {
    border: 3px ;
    border-style: solid;
    border-collapse: collapse;
     padding: 10px;
}
h3
  {
    background-color: rgb(111, 140, 246) ;
  }
td
{
	width: 500px;
}
th
{
	width: 300px;
}
	 input[type=text] {
	 	background-color: rgb(255, 255, 209);
	 }
	.top
	{
	background-image: url("https://thumbs.dreamstime.com/t/wood-metallic-texture-background-rustic-banner-blue-tones-51204566.jpg");
        	}
	.top img
	{
		float: left;
	}

	.header
	{
		 overflow: hidden;
    background-color: #333;
	}
	.header a:hover {
    color: red;
 
}
button:hover
{
	background-color: rgb(204, 204, 185);
}
	.header a
	{
     float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;

	}
	.train input
	{
		float: left;
	}
	.footer
	{
		background-image: url("http://www.modafinilsale.com/data/out/25/229332511-backgrounds-hd-wallpapers.jpg");
		border-radius: 8px;

	}
	 </style>
	
	
</head>
<body>
       <div class="top"> 
       <img src = "data:image/png;base64,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" style="width: 100px;height: 90px">
       <pre style="color: white;font-size: 30px;padding-top: 25px;border-style: dashed;padding-bottom: 10px;font-family: Andika";background-image: url("https://thumbs.dreamstime.com/twood-metallic-texture-background-rustic-banner-blue-tones-51204566.jpg");>                                               <u><b><i> INDIAN RAILWAY TRAIN ENQUIRY</i></b> </u> </pre>
   </div>
   <div class="header">
   	    <a href = "live_train.php">LIVE TRAIN </a>
      <a href = "live_station.html">LIVE STATION</a>
      <a href = "route.php">ROUTE</a>
      <a href = "pnr_check.html">PNR STATUS</a>
      <a href = "seat_availability.html">SEAT AVAILABILITY</a>
      <a href = "fare.html">FARE</a>
      <a href = "cancelled.php">CANCELLED TRAIN</a>
      <a href = "rescheduled.php">RESCHECULED TRAIN</a>
      <a href = "https://www.irctc.co.in/nget/">TICKET BOOKING</a>
   </div>   	 
   <script type="text/javascript">
   	var hello = document.getElementByTag("check").value;
    
   </script>
   <?php 
   $GLOBALS['get_string'] = "https://api.railwayapi.com/v2/route/train/".$_POST["train_name"]."/apikey/zka0st3l0n/";
   $jsonData = file_get_contents($get_string);
   $GLOBALS['json']  =  json_decode($jsonData,true);
	    	error_reporting(E_ERROR | E_PARSE);

   ?>
   <h3 style="border-style: dotted;font-size: 30px;text-align: center;padding-top: 7px;padding-bottom: 7px;"><i>Live Train Status</i></h3>
   <br>
   <form  method="post" action="live_traincheck.php" style="background-color: rgb(183, 208, 208);margin-left: 40px;margin-right: 100px;  ">
     <fieldset >
     	<?php $GLOBALS['pass'] =$_POST["train_name"]; ?>
     	<legend style="color: blue;"><b>Live Train Information</b></legend>
   	 <p style="margin-left: 240px"><b> <span style="font-size: 25px;margin-right: 15px;font-family: Andika">Train Number :-</span></b></p>
   	 <input id="check" style="padding-left: 8px;padding-right: 8px;padding-bottom: 8px;padding-top: 8px;font-size: 15px;margin-left: 240px;" type="text" name="hello" value = <?php echo $pass ; ?>  readonly>
   	 <hr>
      <p style="padding-left: 240px;font-size: 23px;"> Select Station</p>
      <hr>
   	<select name="cars" style="margin-left:  240px;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px;font-size: 17px;">
      
   	<?php foreach ($json[route] as $character) : ?> 
   		
     <option  value= <?php echo $character['station']['code'];?>><?php echo $character['station']['name'];?></option>   

  <?php endforeach; ?>
</select>
   	<br>
   	<br>
   	<hr>
   	<hr>
    <select name ="get_date" style="margin-left: 250px;padding: 10px;font-size: 15px;margin-top: 30px; ">
    	<option value = "16-6-2018"> <?php date_default_timezone_set('Asia/Kolkata'); echo date("d-m-Y",strtotime("-1 days"));?></option>
    	<option value= <?php date_default_timezone_set('Asia/Kolkata'); echo date("d-m-Y",strtotime("0 days"));?>> <?php date_default_timezone_set('Asia/Kolkata'); echo date("d-m-Y",strtotime("0 days"));?></option>
    	<option value= <?php date_default_timezone_set('Asia/Kolkata'); echo date("d-m-Y",strtotime("1 days"));?>> <?php date_default_timezone_set('Asia/Kolkata'); echo date("d-m-Y",strtotime("1 days"));?></option>
    </select>
         	<button type="submit" style="margin-left: 10px;padding: 10px;border-radius: 50%;">Submit</button>
    <br>
    <br>
   </fieldset>
   </form>
    <br>
    </div>
       <div class="footer">
        <p style = "text-align:center;color: white;padding-top: 20px;">INDIAN RAILWAY ENQUIRY SYSTEM</p>
         <p style=" text-align: center;color: white">MADE BY SAHIL SRIVASTAVA</p>
         <p style=" text-align: center;color: white;padding-bottom: 20px;">Email-id:sahilhbti@gmail.com</p>
          </div> 
   
</body>
</html>