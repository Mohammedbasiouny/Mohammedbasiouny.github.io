<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>How it works</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="kordy.css">
    <style>
        .welcome{
            color: black;
            background-color: #0093d0;
            text-align: center;
            padding: 10px;
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
    <section>
      <div class="a">
        <div class="b">
          <div class="diva">
            <h1 class="head"> We are the global services provider for your external workforce</h1>
          </div>
          <div class="divb">
            <h1 class="h1"> OUR MISSION </h1>
            <h2 class="h2"> #WEAREALLCHANGEMAKERS</h2>
            <p class="p1">We help companies manage their transformation by connecting them with the best freelance
              experts
              or highly-specialised SMEs
              We manage their extended workforce from start to finish, from people to projects and billing.
              Our goal is to bring together large organisations, pure-player SMEs, start-ups and freelancers and
              help
              them
              to become change makers</p>
            <img class="ph" alt="1" src="https://2bonline.net/wp-content/uploads/2022/06/freelancer-logo-open-graph.webp">
          </div>
        </div>
        <div class="divc">
          <h1 class="h3"><span class="span1">People</span> management</h1>
          <p class="p2">We help companies to build their community of external talents and these talents to integrate
            into teams. Our goal is to break down barriers between internal talent and external talent.</p>
          <span class="dot"></span>
          <img class="img1 " alt="1"
            src="https://en.freelance.com/wp-content/uploads/2021/05/illustration_consultants_v1-1-54.svg">
          <h1 class="h4"><span class="span2">Project</span> management</h1>
          <p class="p3">We follow up on all projects carried out by external talents. We rely on our innovative
            digital solutions. We are committed to delivering.</p>
          <span class="dot1"></span>
          <img class="img2" alt="1" src="	https://en.freelance.com/wp-content/uploads/2021/05/Fichier-31.svg">
          <h1 class="h5"><span class="span3">Payment</span> management</h1>
          <p class="p4">We develop innovative and secure supplier invoicing, umbrella employment and payroll
            management solutions for our key account customers and for our freelance partners. We ensure fair
            remuneration for external talents.</p>
          <span class="dot2"></span>
          <img class="img3" alt="1" 
            src="https://en.freelance.com/wp-content/uploads/2021/05/illustration_consultants_v8-1-98.svg">
        </div>
        <div class="divd">
          <h1 class="h6">Our services</h1>
          <img class="img4" alt="1" 
            src="https://en.freelance.com/wp-content/webp-express/webp-images/uploads/2021/05/young-woman-freelance2.png.webp">
          <h3 class="h7">FIND THE FUTURE TALENTS</h3>
          <p class="p5">Our job is to respond to your challenges of tomorrow thanks to our sourcing model, which
            offers a return within 48 hours of your request, and to delegate your research to our specialists,
            saving you time at all stages of the process.</p>
          <button class="butt1">CONTACT US</button>
          <img class="img5" alt="1" 
            src="https://en.freelance.com/wp-content/webp-express/webp-images/uploads/2021/04/image2.png.webp">
          <h3 class="h8">INTERNATIONAL MOBILITY</h3>
          <p class="p6">As a consultant, you may be called upon to work on international assignments. Wage portage
            allows you to secure your assignment, even abroad. We have more than 20 years’ experience in providing
            support to consultants all over the world to facilitate their secondment or expatriation.</p>
          <button class="butt2">FIND OUT MORE</button>
          <img class="img6" alt="1" 
            src="https://en.freelance.com/wp-content/webp-express/webp-images/uploads/2023/04/Sans-titre-5.png.webp">
          <h3 class="h9">HIRING IN Egypt</h3>
          <p class="p7">You want to recruite teams or manage contractors in Egypt? We take care of all the
            administrative and salary aspects, in compliance with Egyption legislation.</p>
          <button class="butt3">FIND OUT MORE</button><br>
          <span class="dot3"></span>
        </div>
        <div class="dive">
          <h1 class="h10">Investors</h1><br>
          <span class="dot4"></span><br>
          <img class="img7" alt="1" 
            src="https://en.freelance.com/wp-content/webp-express/webp-images/uploads/2021/04/image3.png.webp">
          <h2 class="h11">FREELANCE.COM, MARKET LEADER FOR INTERMEDIATION BETWEEN COMPANIES AND INTELLECTUAL SERVICE
            PROVIDERS</h2>
          <p class="p8">Freelance.com facilitates structured and reliable collaborations between private and public
            organisations and freelancers/innovative SMEs. Full details are available on our investors site: share
            price, statutory information, calendar as well as presentation of the board.</p>
          <button class="butt4">FIND OUT MORE</button>
        </div>
        <div class="divf">
          <h1 class="h12">Table freelancer system</h1><br>
          <span class="dot5"></span><br>
          <table class="table">
            <thead>
              <tr>
                <th class="td"><span class="tab">Freelancer ID</span></td>
                <th class="td"><span class="tab">Freelancer Name</span></td>
                <th class="td"><span class="tab">Hourly Rate</span></td>
                <th class="td"><span class="tab">Total Hours Worked</span></td>
                <th class="td"><span class="tab">Total Earnings</span></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="td">1</td>
                <td class="td">Mohamed</td>
                <td class="td">$50</td>
                <td class="td">80</td>
                <td class="td">$4,000</td>
              </tr>
              <tr>
                <td class="td">2</td>
                <td class="td">kordy</td>
                <td class="td">$75</td>
                <td class="td">120</td>
                <td class="td"> $9,000</td>
              </tr>
              <tr>
                <td class="td">3</td>
                <td class="td">Mahmoud</td>
                <td class="td">$60</td>
                <td class="td">50</td>
                <td class="td"> $3,000</td>
              </tr>
              <tr>
                <td class="td">4</td>
                <td class="td">Zizo</td>
                <td class="td">$65</td>
                <td class="td">90</td>
                <td class="td"> $5,850</td>
              </tr>
              <tr>
                <td class="td">5</td>
                <td class="td">Ahmed</td>
                <td class="td">$80</td>
                <td class="td">60</td>
                <td class="td"> $4,800</td>
              </tr>
              <tr>
                <td class="td">6</td>
                <td class="td">Ezz ELdien</td>
                <td class="td">$40</td>
                <td class="td">80</td>
                <td class="td"> $3,200</td>
              </tr>
              <tr>
                <td class="td">7</td>
                <td class="td">Saif</td>
                <td class="td">$55</td>
                <td class="td">70</td>
                <td class="td"> $3,850</td>
              </tr>
              <tr>
                <td class="td">8</td>
                <td class="td">Boda</td>
                <td class="td">$20</td>
                <td class="td">100</td>
                <td class="td"> $2,000</td>
              </tr>
              <tr>
                <td class="td">9</td>
                <td class="td">Youssef</td>
                <td class="td">$85</td>
                <td class="td">55</td>
                <td class="td"> $4,675</td>
              </tr>
              <tr>
                <td class="td">10</td>
                <td class="td">Ziad</td>
                <td class="td">$100</td>
                <td class="td">65</td>
                <td class="td"> $6,500</td>
              </tr>
            </tbody>
          </table>
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
