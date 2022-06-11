<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:pink;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/img1.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body >
	
		<div class="logo">
			<img src="img/logo.png">
	</div>
	<div id="header">
       <br>
       <h1 style=" font-family: Times New Roman ; font-size: 70px; color:yellow;text-shadow: 3px 3px black;"> Basic Banking System</h1>
       <h2 style=" font-family:Arial; font-size: 45px;color:white;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #GRIPDEC20 </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>