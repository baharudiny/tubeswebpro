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
    <title><?php echo $judul; ?></title>
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
        <a class="dropdown-item text-light" href="<?= base_url(); ?>data/tambah">Input</a>
        <a class="dropdown-item text-light" href="<?= base_url(); ?>data/index">View Data</a>

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
    <a style="color: black; font-weight: bold;" class="nav-link active" href="<?= base_url(); ?>data/pasta">Recipes</a>
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
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>data/index"> Shop</a>
  </li>
  <li class="nav-item">
    <a style="color: black; font-weight: bold;" class="nav-link" href="<?= base_url(); ?>data/tambah"> Buddy Vs. Duff</a>
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

  <div class="row">
    <div  class="col-8 justify-content-start">
      <h1 style="margin-top: 20px; margin-left: 50px;">Recipes</h1>


    <div  style="background-color: white; margin-left: 50px; " class="card-body">
        <span style="display: inline; ">
    <a style="" href=""><img style=" width:450px;  height :350px; margin-left: 0px;"  src="<?php echo base_url(); ?>assets/img/Recipes.jpeg" class="card-img-top" alt="..."></a>
     <div style="float: right; width: 40%; margin-top: 80px; font-family: Arial; margin-left: 0px;">
      <div style="margin-top: 0px; height: 25px; font-size: 14px; margin-bottom: 20px;" class="badge badge-danger"> Featured Collection  </div><br>
     <a style="color: black; font-weight: bold;  font-size: 22px;" href="">30-Minutes Dinner Recipes</a>
     <p style="margin-top: 12px; font-size: 14px;">Think you only have time for takeout? Think again. Get dinner on the table in a half-hour or less with these quick and easy recipes.</p>
     </div>
     </span>
    <div class="card-title"></div>
    
    
    
   
  </div>

</div>
    
    <div style="margin-left: 30px; margin-top: 40px;" class="col justify-content-end">
      <h3>What's cooking</h3>
  <a href=""><img style="width: 360px; height: 280px; " src="<?php echo base_url(); ?>assets/img/whatscook.jpeg" class="card-img-top" alt="..."></a><br>
  <a style="color: black; font-weight: bold;" href="">Spring Weeknights<img src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-albums.svg" width="25" height="25"> </a>  
  <br><br>
  <a style="color: black;" href="">MORE RECIPES <img style="margin-top: -7px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a>

</div>

</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 80px;  margin-left: 50px;" class="card-body">
      <a style="margin-right: 10px;"  href=""><img style="width: 390px; height:350px; " src="<?php echo base_url(); ?>assets/img/food.jpeg"> </a>
      <a href=""><img style="width: 390px; height:350px;" src="<?php echo base_url(); ?>assets/img/pasta.jpeg"> </a>
   </div>

  </div>




</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <a href=""></a>
      <a style="margin-right: 10px;"  href=""><img style="width: 258px; height:220px; " src="<?php echo base_url(); ?>assets/img/spring.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 256px; height:220px; " src="<?php echo base_url(); ?>assets/img/risotto.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 256px; height:220px; " src="<?php echo base_url(); ?>assets/img/fritatta.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Spring produce at it best</a>
    <a style="color: black; font-weight: bold; margin-left: 90px;" href="">Creamy, Dreamy Spring Risotto</a>
    <a style="color: black; font-weight: bold; margin-left: 30px;" href="">Fresh Spring Fritatta</a>

</div>
</div>
    <div class="col-4">
      <div style="background-color: white; margin-top: 150px;  margin-left: 30px; width: 350px; height: 200px;" class="card-body">
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
    <div style="background-color: white; margin-top: 40px;  margin-left: 50px;" class="card-body">
     <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.foodnetwork.com/videos/baked-hawaii-5628741"></iframe>
    </div>
    <h4 style="margin-top: 13px;">Asparagus Fries<a class="btn btn-light" style="color: white; font-size: 15px; margin-left: 460px; padding-top: 9px; background-color: rgb(109, 196, 198); width: 150px; height: 40px; border-radius: 80px;" href=""> Get The Recipe</a></h4> 
    <h9>Potatoes beware, asparagus are dressing up as French fries.</h9>
      <div style="background-color: white; margin-top: 5px; margin-left: -20px;" class="card-body">
      <a href=""></a>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/spring.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/risotto.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/fritatta.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Spring produce at it best</a>
    <a style="color: black; font-weight: bold; margin-left: 90px;" href="">Creamy, Dreamy Spring Risotto</a>
    <a style="color: black; font-weight: bold; margin-left: 30px;" href="">Fresh Spring Fritatta</a>

  </div>

  </div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Cook Smarter, Not Harder</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/pot.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/pan.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/slowc.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Instant Pot Recipes</a>
    <a style="color: black; font-weight: bold; margin-left: 120px;" href="">Sheet Pan Recipes</a>
    <a style="color: black; font-weight: bold; margin-left: 130px;" href="">Slow Cooker Recipes</a>

</div>
</div>
</div>

<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Just Dinner</h3>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/familyfriendly.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/healthyweek.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/popularrecipe.jpeg"> </a>
    <br>
    <a style="color: black; font-weight: bold;" href="">Family-Friendly</a>
    <a style="color: black; font-weight: bold; margin-left: 150px;" href="">Healthy Weeknights</a>
    <a style="color: black; font-weight: bold; margin-left: 110px;" href="">Our Most-Popular Recipes</a>

</div>
</div>
</div>

  </div>
</div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 40px;  margin-left: 50px;" class="card-body">
      <h3>Latest Video <span style="padding: "><a style="margin-left: 550px; font-size: 14px; color: black; " href="">SEE ALL<img style="margin-top: -5px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a></span></h3> 
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/chocolatte.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/cadburyegg.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/hasselham.jpeg"> </a>
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <a style="color: black; font-weight: bold;" href="">Giant Chocolate Easter Bunny</a>
    <a style="color: black; font-weight: bold; margin-left: 40px;" href="">Fried Cadbury Eggs</a>
    <a style="color: black; font-weight: bold; margin-left: 120px; " href="">Stuffed Hasselback Ham</a>
   </div>
      <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/bakedhawai.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/froscato.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/pineapple.jpeg"> </a>
     <div style="margin-bottom: 10px; margin-top: 10px;">
 
    <a style="color: black; font-weight: bold;" href="">Baked Hawaii</a>
    <a style="color: black; font-weight: bold; margin-left: 160px;" href="">Sunrise Froscato</a>
    <a style="color: black; font-weight: bold; margin-left: 130px;" href="">Painkiller Pineapple Keg</a>
  
  </div>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/vegandal.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/creamjelly.jpeg"> </a>
    <a style="margin-right: 10px;"  href=""><img style="width: 250px; height:220px; " src="<?php echo base_url(); ?>assets/img/cakeicecream.jpeg"> </a>
    <br>
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <a style="color: black; font-weight: bold;" href="">Vegan Dal</a>
    <a style="color: black; font-weight: bold; margin-left: 180px;" href="">Irish Cream Jelly Shots</a>
    <a style="color: black; font-weight: bold; margin-left: 100px;" href="">No-Churn King Cake Ice Cream</a>
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
      <a style="color: black; font-weight: bold; font-size: 20px;" href="">How to Turn a Pound of Ground Turkey into Dinner</a>
      </div>
      <a style="color: red;" href="">By: Kristie Collado <p style="color: black; margin-top: 10px;">Because you can only make so many burgers.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/turkey.jpeg"></a>

  
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 20px;" href="">5 Levels of Grilled Cheese to Make This Month</a>
      </div>
      <a style="color: red;" href="">By: Colleen Park <p style="color: black; margin-top: 10px;">We've got a cheesy challenge for you.</p><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -100px; " src="<?php echo base_url(); ?>assets/img/grillcheese.jpeg"></a>

  
      
      
    
    </div>
  </div>
</div>
<div class="row">
  <div class="col-8">
    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
     <div>
      <a style="color: black; font-weight: bold; font-size: 20px;" href="">Our Top 5 Fan Favorites This Week</a>
      </div>
     <p style="color: black; margin-top: 10px;">Everything you need for Easter is right here.</p><a style="color: red;" href=""><img style="width: 240px; height:190px; margin-left: 560px; margin-top: -80px; " src="<?php echo base_url(); ?>assets/img/top5fan.jpeg"></a>

    
      
      
    
    </div>
  </div>
</div>

<a class="btn btn-light" style="color: white; font-size: 15px; margin-left: 400px; margin-top: 20px; background-color: rgb(109, 196, 198); width: 130px; height: 40px; border-radius: 80px;" href=""> Load More</a>
  
  <div class="row">
  <div class="col-8">

    <div style="background-color: white; margin-top: 20px;  margin-left: 50px;" class="card-body">
      <h3 style="margin-top: 10px; font-weight: bold;">Trending Recipes <a style="color: black; font-size: 13px; margin-left: 420px;" href="">RECIPES A TO Z <img style="margin-top: -3px;" src="<?php echo base_url(); ?>assets/svg/_ionicons_svg_md-arrow-dropright-circle.svg" width="25" height="25"></a></h3> 
      
      <ul style="margin-left: -20px;">
        <div class="text-left">
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Vegetarian Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Vegan Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Chicken Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Pancake Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Meatloaf Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Shrimp Scampi</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Banana Bread</a>
        </li>
         </div>
         <div  style="margin-left: 400px; margin-top: -170px;">
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Chicken Parmesan</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Chicken Breast Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Chocolate Chip Recipes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">French Toast</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Brussels Sprouts</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Mashed Potatoes</a>
        </li>
        <li style="color: rgb(109, 196, 198);">
            <a style="color: black;" href="">Party Food</a>
        </li>
         </div>

      </ul>
     

    </div>
  </div>
</div>

