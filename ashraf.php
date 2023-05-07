<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Specializations</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .welcome{
            color: black;
            background-color: #0093d0;
            text-align: center;
            padding: 10px;
        }

        * {
          margin: 0;
          padding: 0;
        }

        body{
            background-color: rgb(212, 206, 206);
            overflow: auto;
            position: relative;
        }

        .sec1{
            width: 90%;
            margin: auto;
            display: flex;
        }

        .content{
            background-color: rgb(255, 255, 255);
            width: 70%;
            align-items: end;
            
            


        }

        .block{
            background-color: transparent;    
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
        }
        .blockcontent{
            width: 80%;
            text-align: end;
        }

        .sidebar{
          margin-left: auto;
          text-align: right;
          padding-right: 20px;
        }

        .footer {
            width: 100%;
            position: relative;
            height: auto;
            background-color: #070617;
          }
          .footer .col {
            width: 190px;
            height: auto;
            float: left;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            padding: 0px 20px 20px 20px;
          }
          .footer .col h1 {
            margin: 0;
            padding: 0;
            font-family: inherit;
            font-size: 12px;
            line-height: 17px;
            padding: 20px 0px 5px 0px;
            color: rgba(255,255,255,0.2);
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 0.250em;
          }
          .footer .col ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
          }
          .footer .col ul li {
            color: #999999;
            font-size: 14px;
            font-family: inherit;
            font-weight: bold;
            padding: 5px 0px 5px 0px;
            cursor: pointer;
            transition: .2s;
            -webkit-transition: .2s;
            -moz-transition: .2s;
          }
          .social ul li {
            display: inline-block;
            padding-right: 5px !important;
          }
          
          .footer .col ul li:hover {
            color: #ffffff;
            transition: .1s;
            -webkit-transition: .1s;
            -moz-transition: .1s;
          }
          .clearfix {
            clear: both;
          }

        button {
            appearance: button;
            background-color: #1899D6;
            border: solid transparent;
            border-radius: 16px;
            border-width: 0 0 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: .8px;
            line-height: 20px;
            margin: 0;
            outline: none;
            overflow: visible;
            padding: 13px 19px;
            text-align: center;
            text-transform: uppercase;
            touch-action: manipulation;
            transform: translateZ(0);
            transition: filter .2s;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: middle;
            white-space: nowrap;
          }
          
          button:after {
            background-clip: padding-box;
            background-color: #1CB0F6;
            border: solid transparent;
            border-radius: 16px;
            border-width: 0 0 4px;
            bottom: -4px;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: -1;
          }
          
          button:hover:not(:disabled) {
            filter: brightness(1.1);
          }
          
          button:disabled {
            cursor: auto;
          }
          
          button:active:after {
            border-width: 0 0 0px;
          }
          
          button:active {
            padding-bottom: 10px;
          }

          .clr{
            clear: both;
          }

          ul{
            list-style: none;
          }

          .navbar{
            background-color: #1899D6;
            padding: 0px 35px;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            
          
          }
            .navbar li{
                float: left;
                margin-right: 15px;
                margin-top: 10px;
            }

            .navbar a{
                text-decoration: none;
                color: white;
            }

            .navbar h2{
                float: left;
                color: white;
                font-style: oblique;
            }

            .navbar ul{
                float: left;
            }

    


    </style>
  </head>
  <body>
    <header class="header">
      <!--Logo-->
      <div class="logo">
        <a href="dashboard.php">
          <img src="image/Logo.png" alt="Logo" />
        </a>
      </div>

      <!--Search-->
      <div class="search">
        <form method="get" action="search.php">
        <label for="query"></label>
        <input
          type="text"
          id="query"
          name="q"
          value="<?php echo isset($query) ? htmlspecialchars($query) : ''; ?>"
        />
        <button type="submit">Search</button>
        </form>
      </div>

      <!--Navigator-->
      <nav class="header-navigation">
        <ul>
          <li>
            <a href="browse-jop.php" class="browse-jops">Browse jops</a>
            <ul class="dropdown-menu">
              <li><a href="">IT & Software</a></li>
              <li><a href="">Writing & Translation</a></li>
              <li><a href="">Design</a></li>
              <li><a href="">Sales & Marketing</a></li>
              <li><a href="ashraf.php">See all specializations</a></li>
            </ul>
          </li>
          <li><a href="post-project.php">Post project</a></li>
          <li><a href="how-it-work.php" class="how-it-work-after">How it works</a></li>
          <?php
            if (isset($_SESSION['name'])) { 
              echo '<li><a href="logout.php" class="logout">Logout</a></li>'; 
            } else {
              echo '<li><a href="login.html" class="login">Log in</a></li>'; 
              echo '<li><a href="signup.html" class="signup">Sign up</a></li>';}
          ?>
        </ul>
      </nav>
    </header>
    <main>
      <section class="welcome">
        <?php
          if (isset($_SESSION['name'])) { 
            echo '<h1>Welcome, ' . $_SESSION['name'] . '</h1>'; 
          } else { 
            echo '<h1>Welcome, Guest</h1>';}
        ?>
      </section>
      <section class="sec1 py-5">

          <div class="content">
              <div class="block">
                  
                  <div class="blockbtn">
                      <button>  
                          similar project <i class="fa-solid fa-plus"></i>
                      </button>
                  </div>

                  <div class="blockcontent">
                      <h5>A report is required to be translated from Arabic into English</h3>
                          <i class="fa-solid fa-bolt fa-2xs px-2">عروض</i>
                          <i class="fa-regular fa-clock fa-2xs px-2">منذ 20 دقيقه</i>
                          <i class="fa-solid fa-user fa-2xs px-2">Abeer A.</i>
                          
                      <p>I would like to translate a report from Arabic into English without relying on electronic translation.</p>
              
                  </div>

              </div>

              <div class="block">
                  
                  <div class="blockbtn">
                      <button>  
                          similar project <i class="fa-solid fa-plus"></i>
                      </button>
                  </div>

                  <div class="blockcontent">
                      <h5>Development of an electronic platform (application and website) is required</h3>
                          <i class="fa-solid fa-bolt fa-2xs px-2">عروض</i>
                          <i class="fa-regular fa-clock fa-2xs px-2">منذ 20 دقيقه</i>
                          <i class="fa-solid fa-user fa-2xs px-2">sabry A.</i>
                      <p>We are looking for professional programmers to complete the electronic platform with the following specifications in general and first, an integrated electronic platform that allows the exchange of products and services. There is a service provider party and the client party supports multilingualism and several categories, including digital products. Products / services, customers and other details (day, week, month, from date to date of orders) The appearance of all...</p>
              
                  </div>

              </div>
              <div class="block">
                  
                  <div class="blockbtn">
                      <button>  
                          similar project                    <i class="fa-solid fa-plus"></i>
                      </button>
                  </div>

                  <div class="blockcontent">
                      <h5>content writer</h3>
                          <i class="fa-solid fa-bolt fa-2xs px-2">عروض</i>
                          <i class="fa-regular fa-clock fa-2xs px-2">منذ 20 دقيقه</i>
                          <i class="fa-solid fa-user fa-2xs px-2">moaaz A.</i>
                      <p>I need a specialist in writing scientific research to write a scientific research chapter in history and all sources are present. The chapter is between 30 to 50 pages, font size 14</p>
              
                  </div>

              </div>


              

          </div>

          <div class="sidebar">
              <div>
                  <h2 class="my-3">Open projects</h2>
              
              
                  
              
              
                  <h6 class="my-4">Category</h6>
                  
                  
                  <label for="vehicle1"> business management</label>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>
                  <label for="vehicle1"> marketing</label>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>
                  <label for="vehicle1"> translation</label>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>
                  <label for="vehicle1"> Design</label>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>
                  <label for="vehicle1"> web development</label>
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><br>

              </div>
              

          </div>



      </section>
    </main>
    <footer>
      <div class="footer-links">
        <a href="dashboard.php">Home</a>
        <a href="how-it-work.php">How it works</a>
      </div>
      <p>© 2023 Freelance System. All rights reserved.</p>
    </footer>
  </body>
</html>
