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

      <h1 style="margin-top: 10px; margin-left: 50px; margin-bottom: -25px;">Healthy</h1>

    <div  style="background-color:none; margin-left: 50px; " class="card-body"  >

    <div class="card-title"></div>
    
   <a style="" href="" > <img style=" width:800px; margin-top:-150px; margin-bottom: -20px;  height :400px; margin-left: -20px; margin-right: -0px; margin-bottom:-520px;"  src="<?php echo base_url(); ?>assets/img/quinoasalad.jpeg" class="card-img-top" alt="..."></span></a>
   <p class="badge badge-danger" style="margin-left: -800px; margin-top: -800px; width: 100px;height: 25px; font-size: 14px;">Quinoa Salad</p>
   
  
  </div>

</div>
    
    <div style="margin-left: 0px; margin-top: 40px; display: inline;" class="col justify-content-end">
      <h3>What's cooking</h3>
  
  <a href=""><img style="width: 180px; height: 120px; " src="<?php echo base_url(); ?>assets/img/choc.jpeg" class="card-img-top" alt="..."></a>
  <a style="color: black; font-weight: bold; font-size: 14px;" href="">
65+ Healthy Dessert Ideas <img src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-albums.svg" width="25" height="25"> </a>  

  <br><br>
  <a style="color: black;" href="">MORE RECIPES <img style="margin-top: -7px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a>

</div>

</div>

<div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: 280px;  margin-left: 50px;" class="card-body">

      <a style="margin-right: 10px; margin-left: -20px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/weeknight.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px; margin-left: 15px;" src="<?php echo base_url(); ?>assets/img/less40minute.jpeg"> </a>
      <br>
    <a style="color: black;font-size: 20px; font-weight: bold; margin-left: -10px;" href="">Weeknight Dinner</a>
    <a style="color: black; margin-left: 240px; font-size: 20px; font-weight: bold;" href="">40 Minutes or Less</a>
   </div>

  </div>

  <div class="col" style="background-color: none;">
  	<h3 style="margin-top: 60px; margin-bottom: -10px;">Latest Stories</h3>
  	<div style="background-color: none; margin-top: 0px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/diet.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">I'm A Dietitian and I've Always Followed the Mediterranean Diet</a>
  	 <p>By :<a style="color: red;" href=""> Toby Amidor, M.S., R.D., C.D.N.</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  	<div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/duke.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">The Duke and Duchess Of Sussex May Raise The Royal Baby Vegan</a>
  	 <p>By : <a style="color: red;" href=""> Aly Walansky</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  	<div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/easystep.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">5 Easy Steps for Living a More Sustainable Life</a>
  	 <p>By : <a style="color: red;" href="">Lauren Seib</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/oprah.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">Oprah Noticed Avocados Got Super Expensive — and Bought an Orchard</a>
  	 <p>By : <a style="color: red;" href="">Aly Walansky</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <div style="background-color: none; margin-top: -30px;  margin-left: 0px;" class="card-body">
  		<span style="display: inline; ">
  	 <a  style="margin-right: 10px; margin-left: -30px;"  href=""><img style="width: 200px; height:140px; " src="<?php echo base_url(); ?>assets/img/drink.jpeg"></a>
  	 <div style="float: right; width: 50%;">
  	 <a style="color: black; font-weight: bold;" href="">This Is the Drink Everyone Will Be Sipping All Summer</a>
  	 <p>By : <a style="color: red;" href="">Leah Scalzadonna</a></p>
  	 </div>
  	 </span>
  	 <hr size='100px' width="100%" style="margin-left: -30px; background-color: silver;" >
  </div>
  <a href="#"><button style="margin-left: 150px; margin-top: 0px; height: 43px; border-radius: 110px; background-color: rgb(74, 75, 74);" type="submit" class="btn btn-dark"><span>Load More</span></button></a>
</div>
</div>
<div class="row">
  <div class="col-8">

    <div style="background-color: none; margin-top: 100px;  margin-left: 40px;" class="card-body">
    	<h3 style="margin-top: -400px;">Build a Better Breakfast</h3>

      <a style="margin-right: 10px;"  href=""><img style="width: 258px; height:220px; " src="<?php echo base_url(); ?>assets/img/easyhealthy.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 256px; height:220px; " src="<?php echo base_url(); ?>assets/img/300calorie.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 256px; height:220px; " src="<?php echo base_url(); ?>assets/img/superfood.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Easy + Healthy</a>
    <a style="color: black; font-weight: bold; margin-left: 160px;" href="">300-Calorie Breakfasts</a>
    <a style="color: black; font-weight: bold; margin-left: 100px;" href="">Start with Superfoods</a>

</div>
</div>
    <div class="col-4">

      <div style="background-color: white; margin-top: 150px;  margin-left: 30px; width: 350px; height: 200px;" class="card-body">

          <form style="padding-top: 30px;" method="" action="">
      <div  class="form-group">
      <label style="position: center;" for="inputemail">Get an editor-picked recipe delivered to your inbox daily.<a style="color: silver;"href=""> Privacy Policy</a> 
    </label>
      <input style="width: 290px; height: 45px; border-radius: 110px;"  type="text" id="inputemail" placeholder="  Enter Email Address">
     <button style="margin-left: -70px; margin-top: -7px; height: 43px; border-radius: 110px; background-color: rgb(74, 75, 74);" type="submit" class="btn btn-dark"><span> Submit</span></button>
    </div>
    
    </form>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
    
    <h3 style="margin-top: -320px;">Healthy Habits</h3> 
      <div style="background-color: none; margin-top: 5px; margin-left: -20px;" class="card-body">
      <a href=""></a>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/lowcarb.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/healthyvege.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/lunch.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">35 Low-Cab Recipes</a>
    <a style="color: black; font-weight: bold; margin-left: 110px;" href="">Healthy + Vegetarian</a>
    <a style="color: black; font-weight: bold; margin-left: 100px;" href="">Look Forward to Lunch</a>

  </div>

  </div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Something Healthy On the Side</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/healthyside.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/potato.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/sweetpotato.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold; margin-left: 10px;" href="">Healthy Sides</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Potatoes Lightened Up</a>
    <a style="color: black; font-weight: bold; margin-left: 100px;" href="">Satisfying Sweet Potatoes</a>

</div>
</div>
</div>

<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Hearty + Healthy</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/classiccomfort.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/betterpasta.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/salad.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Classic Comfort</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Better For You Pasta</a>
    <a style="color: black; font-weight: bold; margin-left: 110px;" href="">Salads That Don't Disapoint</a>

</div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Eat Your Veggies</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/greenbean.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/avocado.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/beet.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Green Beans</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Avocado</a>
    <a style="color: black; font-weight: bold; margin-left: 110px;" href="">Beets</a>

</div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Chicken</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chickenfinger.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chickenparm.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chickenbroccoli.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Homemade Chicken Fingers</a>
    <a style="color: black; font-weight: bold; margin-left: 50px;" href="">Ligher Chicken Parms</a>
    <a style="color: black; font-weight: bold; margin-left: 100px;" href="">Chicken & Broccoli Casserole</a>

</div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Salmon</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/roastsalmon.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/bakesalmon.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/searsalmon.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Roasted Salmon</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Foil Baked Salmon</a>
    <a style="color: black; font-weight: bold; margin-left: 110px;" href="">Seared Salmon</a>

</div>
</div>
</div>
	<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Shrimp</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/shrimptaco.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/coconutshrimp.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/shrimpfry.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Shrimp Tacos</a>
    <a style="color: black; font-weight: bold; margin-left: 160px;" href="">Coconut Shrimp</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Shrimp Stir-Fry</a>

</div>
</div>
</div>
 
<div class="row">
  <div class="col-8">
    <div style="background-color: none; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>What's News<span style="padding: "><a style="margin-left: 550px; font-size: 14px; color: black; " href="">SEE ALL<img style="margin-top: -5px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a></span></h3> 
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/worstcook.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/bestbaker.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/adorablewedding.jpeg"> </a>
    <div style="margin-bottom: 10px; margin-top: 10px;">
     <a style="color: black; margin-left: -10px; font-weight: bold;" href="">Worst Cooks in America, Season 16</a>
    <a style="color: black; font-weight: bold; margin-left: 20px; " href="">Best Baker in America</a>
    <a style="color: black; font-weight: bold; margin-left: 75px; " href="">3 Adorable Wedding Cake Toppers</a>
   </div>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/giftmom.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/handmixer.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/foodprocessor.jpeg"> </a>
     <div style="margin-bottom: 10px; margin-top: 10px;">
 
    <a style="color: black; font-weight: bold;" href="">25+ Gifts Mom Will Love</a>
    <a style="color: black; font-weight: bold; margin-left: 60px; " href="">Our Guide to the Best Hand Mixers</a>
    <a style="color: black; font-weight: bold; margin-left: 20px;" href="">Guide to Best Food Processors</a>
  
  </div>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/celebrityrecruit.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/dufftake.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/besttoast.jpeg"> </a>
    <br>
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <a style="color: black; font-weight: bold;" href="">Meet the Celebrity Recruits</a>
    <a style="color: black; font-weight: bold; margin-left: 70px;" href="">Meet the Baking Team</a>
    <a style="color: black; font-weight: bold; margin-left: 90px;" href="">Guide to The Best Toast</a>
    </div>
  
      <a class="btn btn-light" style="color: white; font-size: 15px; margin-left: 350px; margin-top: 20px; background-color: rgb(109, 196, 198); width: 130px; height: 40px; border-radius: 80px;" href=""> Load More</a>
   

</div>
</div>
</div>

<div class="row">
  <div class="col-8">
    <h2 style="margin-top: 30px; margin-left: 50px; font-weight: bold;">Latest Stories</h2>
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 18px;" href="">I'm A Dietitian and I've Always Followed the Mediterranean Diet</a>
      </div>
      <a style="color: red;" href="">By: Toby Amidor, M.S., R.D., C.D.N. <p style="color: black; margin-top: 10px;">And it's worked for 20 years.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/diet.jpeg"></a>

  
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 18px;" href="">The Duke and Duchess Of Sussex May Raise The Royal Baby Vegan</a>
      </div>
      <a style="color: red;" href="">By: Aly Walansky <p style="color: black; margin-top: 10px;">But is a plant-base diet safe for babies?</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/duke.jpeg"></a>

  
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 18px;" href="">5 Easy Steps for Living a More Sustainable Life</a>
      </div>
      <a style="color: red;" href="">By: Lauren Seib<p style="color: black; margin-top: 10px;">You can make simple swaps to help save the planet.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/easystep.jpeg"></a>

    
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 18px;" href="">Oprah Noticed Avocados Got Super Expensive — and Bought an Orchard</a>
      </div>
      <a style="color: red;" href="">By: Aly Walansky<p style="color: black; margin-top: 10px;">Well, that’s one way to handle the situation.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/oprah.jpeg"></a>

    
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 18px;" href="">This Is the Drink Everyone Will Be Sipping All Summer</a>
      </div>
      <a style="color: red;" href="">By: Leah Scalzadonna<p style="color: black; margin-top: 10px;">Nope, it's not rosé.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/drink.jpeg"></a>

    
      
      
    
    </div>
  </div>
</div>


<a class="btn btn-light" style="color: white; font-size: 15px; margin-left: 400px; margin-top: 20px; background-color: rgb(109, 196, 198); width: 130px; height: 40px; border-radius: 80px;" href=""> Load More</a>
  
  <div class="row">
  <div class="col-8">

    <div style="background-color:none; margin-top: 20px;  margin-left: 50px;" class="card-body">
      <h3 style="margin-top: 10px; font-weight: bold;">Trending Recipes</h3> 
      
      <ul style="margin-left: -20px;">
        <div class="text-left">
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Vegetarian Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Vegan Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Healthy Snacks</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Smoothie Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Healthy Breakfast</a>
        </li>      
         </div>
         <div  style="margin-left: 400px; margin-top: -120px;">
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Fruit Salads</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Vegetarian Meals</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">High-Fiber Foods</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Low-Carb Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Iron-Rich Foods</a>
        </li>
         </div>
      </ul>   
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


