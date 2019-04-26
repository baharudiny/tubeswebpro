<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      .dropbtn {

  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropup content */
.dropup {
  position: relative;
  display: inline-block;
}

/* Dropup content (Hidden by Default) */
.dropup-content {
  display: none;
  position: absolute;
  bottom: 50px;
   background-color: white;
  min-width: 172px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropup */
.dropup-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropup links on hover */
.dropup-content a:hover {background-color: #ddd}

/* Show the dropup menu on hover */
.dropup:hover .dropup-content {
  display: block;
}

/* Change the background color of the dropup button when the dropup content is shown */
.dropup:hover .dropbtn {
  background-color: #2980B9;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="http://example.com/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title></title>
  </head>
  <body style="background-color: rgb(237, 236, 251);">
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  

  <!-- Links -->
  <div class="container">
    
  <ul class="navbar-nav">
   
      <li style="margin-left: -70px;" class="nav-item dropdown">
      <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
        <div class="navbar-toggler-icon"></div>
      </a>
      <a href=""></a>
      <div class="dropdown-menu bg-dark text">
        <a class="dropdown-item text-light" href="#">Recipes</a>
        <a class="dropdown-item text-light" href="#">Shows</a>
        <a class="dropdown-item text-light" href="#">Chefs</a>
        <a class="dropdown-item text-light" href="#">Restaurant</a>
        <a class="dropdown-item text-light" href="#">Chefs</a>
        <p style="margin-left: 10px;" class="text-light">........................................</p>
        <div style="margin-top: -10px;">
        <a class="dropdown-item text-light" href="#">Sweeps</a>
        <a class="dropdown-item text-light" href="#">TV Schedule</a>
        <a class="dropdown-item text-light" href="#">Blog</a>
        <a class="dropdown-item text-light" href="#">App</a>
        <a class="dropdown-item text-light" href="#">Shop</a>
        <a class="dropdown-item text-light" href="#">Shows A-Z</a>
        </div>
        <p style="margin-left: 10px;" class="text-light">........................................</p>
       <span style="display: inline; color: white;">
          <a style="margin-left: 20px; margin-right: 10px; color: white;" href="">Login</a><span style="color: white; margin-right: 12px;">l</span><a style="color: white;" href="">Sign Up</a>
        </span>
      </div>
      </li>

     
  
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse" id="navbarToggleExternalContent">
  
  </div>
  </nav>

   
  
    <li style="margin-left: -1px; padding-top: 6px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/fb.jpg" class="rounded-circle" width="25" height="25"> </a> 
      </li>
    <li style="padding-top: 6px; padding-left: 3px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/twitter.jpg" class="rounded-circle" width="25" height="25"> </a> 
    </li>
    <li style="padding-top: 6px; padding-left: 3px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/path.jpg" class="rounded-circle" width="25" height="25"> </a> 
    </li>
    <li style="padding-top: 6px; padding-left: 3px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/snapchat.jpg" class="rounded-circle" width="25" height="25"> </a> 
    </li>
     <li style="padding-top: 6px; padding-left: 3px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/ig.png" class="rounded-circle" width="25" height="25"> </a> 
    </li>
     <li style="padding-top: 6px; padding-left: 3px;" class="nav-item">
       <a href=""><img src="<?php echo base_url(); ?>assets/img/yt.png" class="rounded-circle" width="27" height="27"> </a> 
    </li>
    <li style="padding-left: 20px; padding-top: 6px;">
      <a class="text-light" href="">Magazine</a>
    </li>
    <li style="padding-left: 20px; padding-top: 6px;">
      <a class="text-light" href="">Newsletter</a>
    </li>
    <li style="padding-left: 150px; padding-top: 6px; margin-bottom: -30px; z-index: 3;">
      <a href=""><img src="<?php echo base_url(); ?>assets/img/logofn.png" class="rounded-circle" width="70" height="70"> 
    </li>
    <li style="padding-top: 10px; margin-left: 168px; color: black;" class="nav-item">
       <a style="color: white;" href=""><img src="<?php echo base_url(); ?>assets/svg/sharp-bookmark_border-24px.svg"  width="25" height="25">Saves </a> 
    </li>
  
 
    
    <li style="margin-left: 32px; padding-top: 6px;">
      <form>          
        <div class="input-group ">
          <input style="width: 230px; height: 35px; border-radius: 100px;" type="text" class="form-control" placeholder="Find Recipe, Video and more" name="keyword"><img src="<?php echo base_url(); ?>assets/svg/baseline-search-24px.svg"  style="margin-top: 3px;" width="25" height="25">


        </div>
        </form>

    </li>
    



    <!-- Dropdown -->
  
  </ul>
</nav>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
	<div class="container">
    <ul style="margin-left: 60px; color: black;" class="nav justify-content-center">
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link active" href="<?= base_url(); ?>">Recipes</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link active" href="<?= base_url(); ?>home/healthy">Healthy</a>

  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link active" href="<?= base_url(); ?>home/partyfood">Party Food</a>

  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;"  class="nav-link" href="#">Easter</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>"> Shop</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>"> Buddy Vs. Duff</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>"> Chopped</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>"> Shows</a>
  </li>
  <li class="nav-item">
    <a  style="color: black; margin-top: -2px; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>"><img style="margin-top: -7px;" src="<?php echo base_url(); ?>assets/svg/outline-live_tv-24px.svg" width="25" height="25"> Watch Full Season</a>
  </li>
</ul>
  

</div>
</nav>
  <a style="margin-left: 50px; margin-bottom: : -30px; color: black; font-size: 13px; font-weight: bold;" href="<?= base_url(); ?>home/index">Home</a>
  <div class="row">

    <div  class="col-8 justify-content-start">

      <h1 style="margin-top: 10px; margin-left: 50px; margin-bottom: -25px;">Party Food</h1>

    <div  style="background-color:none; margin-left: 50px; " class="card-body"  >

    <div class="card-title"></div>
    
   <a style="" href="" > <img style=" width:800px; margin-top:-150px; margin-bottom: -20px;  height :400px; margin-left: -20px; margin-right: -0px; margin-bottom:-520px;"  src="<?php echo base_url(); ?>assets/img/parmesanchicken.jpeg" class="card-img-top" alt="..."></span></a>
   <p class="badge badge-danger" style="margin-left: -800px; margin-top: -800px; width: 170px;height: 25px; font-size: 12px;">INA'S PARMESAN CHICKEN</p>
   
  
  </div>

</div>
    
    <div style="margin-left: 0px; margin-top: 40px; display: inline;" class="col justify-content-end">
      <h3>What's cooking</h3>
  
  <a href=""><img style="width: 180px; height: 120px; " src="<?php echo base_url(); ?>assets/img/partyfood.jpeg" class="card-img-top" alt="..."></a>
  <a style="color: black; font-weight: bold; font-size: 14px;" href="">
48 Dinner Party Recipes<img src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-albums.svg" width="25" height="25"> </a>  

  <br><br>
  <a style="color: black;" href="">MORE RECIPES <img style="margin-top: -7px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a>

</div>

</div>


<div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: 280px;  margin-left: 50px;" class="card-body">
      <h2 style="font-weight: bold; margin-left: -10px; margin-bottom: 20px; ">Passover Greats</h2>
      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/feast.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/lotsa.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">Recipes for a Passover Feast</a>
    <a style="color: black; margin-left: 200px; font-size: 20px; font-weight: bold;" href="">Lotsa Mazo</a>
   </div>

  </div>


  <div class="col" style="background-color: none;">
  	<h3 style="margin-top: 60px; margin-bottom: -10px;">Latest Stories</h3>
  	<div style="background-color: none; margin-top: 0px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/saladlunch.jpeg"></a>
  	 <div style="float: right; width: 50%;">
      <a style="color: lightblue; margin-top: " href=""><h4>Yesterday</h4></a>
  	 <a style="color: black; font-weight: bold;" href="">
Anyone Who Packs a Salad for Lunch Needs These Genius Products</a>
  	 <p>By :<a style="color: red;" href="">Lauren Saxe</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  	<div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/majorearth.jpeg"></a>
  	 <div style="float: right; width: 50%;">
      <a style="color: lightblue; margin-top: " href=""><h4>Yesterday</h4></a>
  	 <a style="color: black; font-weight: bold;" href="">Our Top 5 Picks from Amazon's Major Earth Day Sale</a>
  	 <p>By : <a style="color: red;" href=""> Leah Scalzadonna</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  	<div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/pickless.jpeg"></a>
  	 <div style="float: right; width: 50%;">
      <a style="color: lightblue; margin-top: " href=""><h4>Yesterday</h4></a>
     <a style="color: black; font-weight: bold;" href="">Pickless Are (Still) Having a Moment</a>
  	
  	 <p>By : <a style="color: red;" href="">Army Reiter</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/Fries.jpeg"></a>
  	 <div style="float: right; width: 50%;">
      <h4 style="color: lightblue; margin-top: " href="">Yesterday</h4>
  	 <a style="color: black; font-weight: bold;" href="">Do You Want Fries with That</a>
  	 <p>By : <a style="color: red;" href="">Amy Reiter</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/foodscrap.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">5 Creative Ways to Reuse Food Scraps This Earth Day</a>
  	 <p>By : <a style="color: red;" href="">Xenia Fong</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <a href="#"><button style="margin-left: 150px; margin-top: 0px; height: 43px; border-radius: 110px; background-color: rgb(74, 75, 74);" type="submit" class="btn btn-dark"><span>Load More</span></button></a>
</div>
</div>
<div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: -300px;  margin-left: 50px;" class="card-body">
      <h2 style="font-weight: bold; margin-left: -10px; margin-bottom: 20px; ">Celebrate Mom</h2>
      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/brunch.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/motherday.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">30+ Mother's Day Brunch Recipes</a>
    <a style="color: black; margin-left: 100px; font-size: 20px; font-weight: bold;" href="">Mother's Day Desserts</a>
   </div>

  </div>
  </div>
  <div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: 0px;  margin-left: 50px;" class="card-body">
      <h2 style="font-weight: bold; margin-left: -10px; margin-bottom: 20px; ">Spring Into Dessert</h2>
      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/springdessert.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/lemondessert.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">Spring Desserts for Entertaining</a>
    <a style="color: black; margin-left: 100px; font-size: 20px; font-weight: bold;" href="">Bright + Fresh Lemon Desserts</a>
   </div>

  </div>

  <div class="col-4">

      <div style="background-color: none; margin-top: 0px;  margin-left: 30px; width: 350px; height: 200px;" class="card-body">
        <h3>Recipe Of The Day</h3>
          <form style="padding-top: 30px;" method="" action="">
      <div  class="form-group">
      <label style="position: center;" for="inputemail">Get an editor-picked recipe delivered to your inbox daily.<a style="color: silver;"href=""> Privacy Policy</a> 
    </label>
      <input style="width: 290px; height: 45px; border-radius: 110px;"  type="text" id="inputemail" placeholder="  Enter Email Address">
     <button style="margin-left: -70px; margin-top: -7px; height: 43px; border-radius: 110px;" type="submit" class="btn btn-dark"><span> Submit</span></button>
    </div>
    
    </form>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: 0px;  margin-left: 50px;" class="card-body">
      <h2 style="font-weight: bold; margin-left: -10px; margin-bottom: 20px; ">Cheers!</h2>
      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/sangria.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/moscowmules.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">Showstopping Sangria Recipes</a>
    <a style="color: black; margin-left: 120px; font-size: 20px; font-weight: bold;" href="">Moscow Mules + More Spring Cocktails</a>
   </div>

  </div>
  </div>
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 0px;  margin-left: 50px;" class="card-body">
      <h2 style="font-weight: bold; margin-left: -10px; margin-bottom: 20px; ">Company-Worthy</h2>
      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/foolproof.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/destceleb.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">Impressive + FoolProof</a>
    <a style="color: black; margin-left: 200px; font-size: 20px; font-weight: bold;" href="">Destination: Celebration</a>
   </div>

  </div>
  </div>
  <div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Latest Video <span style="padding: "><a style="margin-left: 550px; font-size: 14px; color: black; " href="">SEE ALL<img style="margin-top: -5px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a></span></h3> 
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/gumball.jpeg"></a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/cherrycoke.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/honeycomb.jpeg"> </a>
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <a style="color: black; font-weight: bold;" href="">Giant Gumball Machine Keg</a>
    <a style="color: black; font-weight: bold; margin-left: 40px;" href="">Cherry Coke Cake</a>
    <a style="color: black; font-weight: bold; margin-left: 120px; " href="">Honeycomb Pan Dessert</a>
   </div>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/winepie.jpeg"></a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chocolatte.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/cadburyegg.jpeg"> </a>
     <div style="margin-bottom: 10px; margin-top: 10px;">
 
    <a style="color: black; font-weight: bold;" href="">Bottle of Wine Pie</a>
    <a style="color: black; font-weight: bold; margin-left: 130px;" href="">Giant Chocolate Easter Bunny</a>
    <a style="color: black; font-weight: bold; margin-left: 40px;" href="">Fried Cadbury Eggs</a>
  
  </div>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/upsidedown.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/wafercake.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chickslice.jpeg"> </a>
    <br>
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <a style="color: black; font-weight: bold;" href="">Four-Flavor Upside Down</a>
    <a style="color: black; font-weight: bold; margin-left: 80px;" href="">Sugar Wafer Cake</a>
    <a style="color: black; font-weight: bold; margin-left: 120px;" href="">No-Churn King Cake Ice Cream</a>
    </div>
  
      <a class="btn btn-light" style="color: white; font-size: 15px; margin-left: 350px; margin-top: 20px; background-color: rgb(109, 196, 198); width: 130px; height: 40px; border-radius: 80px;" href=""> Load More</a>
   

</div>
</div>

</div>



<nav style="margin-top: 50px;" class="navbar navbar-expand-lg navbar-light bg-dark">
  
  
    <ul style="margin-left: 120px; color: white; margin-top: 20px;" class="nav justify-content-center">
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px; " class="nav-link active" href="../templates/tambah.php">Site Map</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link active" href="<?= base_url(); ?>">Term of Use</a>

  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link active" href="<?= base_url(); ?>">AdChoices</a>

  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px; "  class="nav-link" href="#">Privacy Policy</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> About</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Newsroom</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Advertise</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Help</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Contact Us</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Online Close Captioning</a>
  </li>
  <li class="nav-item">
    <a style="color: white; font-weight: bold; font-size: 12px;" class="nav-link" href="<?= base_url(); ?>"> Discovery, Inc</a>
  </li>
</ul>

</nav>
<nav style="" class="navbar navbar-expand-lg navbar-light bg-dark">
  
 
</div>
    <ul style="margin-left: 20px; color: white; margin-top: 0px;" class="nav justify-content-center">
  <li class="nav-item">
<div style="margin-top: -10px; margin-left: 220px;" class="dropup">
  <button class="dropbtn bg-dark" style=" font-size: 13px; color: silver;">International Edition <img style="width: 20px; height:20px;  " src="<?php echo base_url(); ?>assets/svg/outline-keyboard_arrow_up-24px.svg"></button>
  <div class="dropup-content">
   
      <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
  
  </li>
  <li>
  	<img style="width: 20px; height:20px; margin-top: 8px; " src="<?php echo base_url(); ?>assets/svg/outline-more_vert-24px.svg">
  </li>
  <li class="nav-item">
    <div style="margin-top: -10px;" class="dropup">
  <button class="dropbtn bg-dark" style=" font-size: 13px; color: silver;">See all Scripps Networks Digital  <img style="width: 20px; height:20px;  " src="<?php echo base_url(); ?>assets/svg/outline-keyboard_arrow_up-24px.svg"></button>
  <div class="dropup-content" style="min-width: 235px;">
     <a href="#">Cooking Channel</a>
    <p style="color: black; margin-left: 17px; margin-top: -13px;">.........................................................<p>

    <a style="margin-top: -21px;" href="#">GeniusKitchen.com</a>
    <p style="color: black; margin-left: 17px; margin-top: -28px;">.........................................................<p>
    <a style="margin-top: -21px;" href="#">HGTV</a>
    <p style="color: black; margin-left: 17px; margin-top: -28px;">.........................................................<p>
    <a style="margin-top: -21px;" href="#">DIY Network</a>
    <p style="color: black; margin-left: 17px; margin-top: -28px;">.........................................................<p>
    <a style="margin-top: -21px;" href="#">Travel Channel</a>
    <p style="color: black; margin-left: 17px; margin-top: -28px;">.........................................................<p>
  </div>
</div>
  </li>
  <li>
  	<img style="width: 20px; height:20px; margin-top: 8px; " src="<?php echo base_url(); ?>assets/svg/outline-more_vert-24px.svg">
  </li>

</div>
  </li>
  <li>
  	<p  style="font-size: 13px; color: silver; margin-left: 10px; margin-top: 6px;">&copy 2019 Television Food Network, G.P. All rights reserved.</p>
  </li>

  

</ul>
 

</nav>
 
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


