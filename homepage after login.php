<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOUIS VUITTON - Official International Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="homepage.js"></script>
    <link rel="icon" href="video/Louis_Vuitton_LV_logo.png">
</head>
<body>
    <header>
        <div class="content">
          <nav>
            <ul>
              <i class="fa-solid fa-bars" id="icon1" style="color: #fcfcfc;"></i> <!-- <i class="fa-solid fa-xmark"></i> -->
              <i><a href="" class="Menu" onclick="toggleMenuOptions()">Menu</a>
                <div id="menuOptions" class="hidden">
                 <a href="men ready to wear.php">Ready to wear</a>
                  

                </div>
              </i>
              <li id="search">
                <a href="test.html"><i class="fa-solid fa-magnifying-glass" id="icon2" style="color: #ffffff;" ></i></a>
                <button id="searchLV">Search</button>
                <input type="text" id="searchInput" class="hidden">
                <!-- <button class="searchbutton" type="submit">Search ?</button> -->
              </li>
              <span class="logo">LOUIS VUITTON</span>
              <li>
                <a href="#">Wishlist</a>
            </li>
              <li>
                <a href="#"onclick="toggleLVTable()"><?php session_start();
                                                          if (isset($_SESSION["username"])) {
                                                            $username = $_SESSION["username"];
                                                            echo "$username";
                                                          } else {
                                                            echo "You are not logged in.";
                                                          }                                                         
                                                      ?>

              </a>
              <a href="homepage.php">Logout</a>
              </li>
              
            </ul>
          </nav>
        </div>
      </header>
      
      <div class="body">
       <section>
        
        <div class="video-container">
          <video id="bg-video" autoplay muted loop>
            <source src="video/CGeZoh65FV_HD.mp4" type="video/mp4">
          </video> 
          <div class="title">
            <a href="" class="title1">SUMMER 2024 SHOW</a>
            <p><button class="button1" onclick="DiscoverCampaign()">Discover the campaign</button></p>
        </div>
      </div>
       
      </div>
       </section>
       <section>
        
        <div class="video-container" style="margin-top: -8px;position: relative;">
          <video id="bg-video" autoplay muted loop>
            <source src="video/video2.mp4" type="video/mp4">
          </video> 
          <div class="title">
            <a href="" class="title1">MEN'S SPRING-SUMMER 2024 SHOW</a>
            <p><button class="button1" onclick="redirectToCampaign()">Watch the full show</button></p>
        </div>
      </div>
       
      </div>
       </section>
       
       
      
      
       <div class="service">
        SERVICES BY LOUIS VUITTON
      </div>
      

      <div class="SERVICES">
        <div class="container">
          <div class="row">
              <div class="col-sm-4 px-2 mx-auto">
                 <img src="video/HP_Services_Push_Contact_Us_DI3.webp" class="hinh1" alt="">
                 <div class="hinhanh1title">
                  How can we help you?
                 </div>
                 <div class="hinhanh1title1">
                  Wherever you are, Louis Vuitton Client Advisors will be delighted to assist you.
                 </div>
                 <div class="hinhanh1title2">
                  <a href="#" class="">Contact Us</a>
                 </div>
              </div>
              <div class="col-sm-4 px-2 mx-auto">
                  <img src="video/HP_Services_Push_Art_Of_Gifting_DI3.webp " class="hinh2" alt="">
                  <div class="hinhanh2title">
                    Art of Gifting
                   </div>
                   <div class="hinhanh2title1">
                    Choose the perfect gift from our specially curated selection of products.
                   </div>
                   <div class="hinhanh2title2">
                    <a href="">Gifts For Her</a><a href="#" class="gh">Gifts For Him</a>
                   </div>
              </div>
              <div class="col-sm-4 px-2 mx-auto">
                  <img src="video/HP_Services_Push_Personalization_DI3.webp" class="hinh3" alt="">
                  <div class="hinhanh3title">
                    Personalization
                   </div>
                   <div class="hinhanh3title1">
                    Louis Vuitton’s personalization offer spans a wide range of services.
                   </div>
                   <div class="hinhanh3title2">
                   <a href="#">Explore our Collections</a>
                   </div>
                   
              </div>
              
          </div>
          
      </div>
      
</div>

      
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
            <div class="cot1footer">
              HELP
            </div>
            <div class="cot2footer">
              You can <a href="">call</a> or <a href="">email us.</a>
            </div>
            <div class="cot3footer">
              FAQ's
            </div>
            <div class="cot4footer">
              Product Care
            </div>
            <div class="cot5footer">
              Stores
            </div>
            </div>
            <div class="col-md-3">
            <div class="cot1footer">
              SERVICES
            </div>
            <div class="cot2footer">
              Repairs
            </div>
            <div class="cot3footer">
              Personalization
            </div>
            <div class="cot4footer">
              Art of Gifting
            </div>
            <div class="cot5footer">
              Download our Apps
            </div>
            </div>
            <div class="col-md-3">
            <div class="cot1footer">
              ABOUT LOUIS VUITTON
            </div>
            <div class="cot2footer">
              Fashion Shows
            </div>
            <div class="cot3footer">
              Arts & Culture
            </div>
            <div class="cot4footer">
              La Maison
            </div>
            <div class="cot5footer">
              Sustainability
            </div>
            <div class="cot6footer">
              Latest News
            </div>
            <div class="cot7footer">
              Careers
            </div>
            <div class="cot8footer">
              Foundation Louis Vuitton
            </div>
            </div>
            <div class="col-md-3">
             <div class="cot1footer">
              CONNECT
            </div>
            <div class="cot2footer">
             <a href=""> Sign up</a> for first access to latest collections, campaigns and videos.
            </div>
            <div class="cot3footer">
              Follow Us
            </div>
            </div>
          </div>
        </div>  
      </footer>
     
      
      
</body>
<script src="homepage.js">

  
</script>
</html>