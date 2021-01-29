<!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <style>
    
    h1,h2{
      font-family: Georgia, 'Times New Roman', Times, serif;
      text-align: center;
    }
    
   body{
        background-color: #9CF75C;
} 
   
             body{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            .nav-link{
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            h3{
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
           .main_menu{        background-color: #9CF75C;

            color:whitesmoke;
           }
           .nav-link:hover{
           color: yellow;
           }
           
        </style>
        <div class="main_menu">
            

            <nav class="navbar navbar-expand-lg navbar-bg ">
                <div class="container-fluid">
                    <a href="index.php"><img src="images/oss_logo.png" alt="LOGO" height="50px" width="70px"> </a>
                   <a class="navbar-brand" href="index.php">OLD STAREHIAN SOCIETY</a>
                    
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button> 
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#">
                    <span class="navbar-toggler-icon">Menu</span>
                    </button> -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
<?php
                //         $domain = $_SERVER['HTTP_HOST'];
                //     $url = 'http://' . $domain .'/alumni_website/index.php';
                //     $geturl= 'http://' . $domain . $_SERVER['REQUEST_URI'];
                //     if($url===$geturl){
                //     echo'<li class="nav-item "style="color:yellow;">
                //        <a  class="nav-link"  href="index.php"> Home </a>
                // </li>';
                //     }
                //     else{
                //         echo'<li class="nav-item">
                //         <a  class="nav-link"  href="index.php"> Home </a>
                //  </li>';
                //     }
                    ?>
                         <li class="nav-item " ><a class="nav-link active" href="index.php">Home</a></li>
                         
                        <li class="nav-item "><a class="nav-link" href="aboutus.php">About Us</a></li>
                        
                        <li class="nav-item text-white "><a class="nav-link" href="contactUS.php">Contact Us</a></li>
                        
                            <li class="nav-item active"><a class="nav-link" href="login.php">Sign in</a></li>
                            <li class="nav-item text-white"><a class="nav-link" href="register.php">Sign Up</a></li>
                          
                        </ul>
                    </div>
                </div>
        </div>
    </header>
  