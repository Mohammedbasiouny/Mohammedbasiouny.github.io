<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Browse jops</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .welcome{
            color: black;
            background-color: #0093d0;
            text-align: center;
            padding: 10px;
        }

        .available-jobs {
          margin: 20px auto;
          max-width: 800px;
        }

        .available-jobs h1 {
          font-size: 36px;
          font-weight: bold;
          margin-bottom: 20px;
        }

        .available-jobs table {
          border-collapse: collapse;
          width: 100%;
        }

        .available-jobs td {
          border: 1px solid #ddd;
          padding: 10px;
        }

        .available-jobs td:first-child {
          width: 30%;
        }

        .available-jobs td:last-child {
          width: 20%;
          text-align: center;
        }

        .available-jobs input[type="submit"] {
          border: none;
          background-color: #0093d0;
          color: white;
          padding: 5px 15px;
          text-transform: uppercase;
          font-size: 14px;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.3s ease;
        }

        .available-jobs input[type="submit"]:hover {
          background-color: #0069d9;
        }

        .available-jobs p {
          font-size: 18px;
          font-weight: bold;
          text-align: center;
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
      <section class="available-jobs">
        <h1>Available Jobs</h1>
        <?php
                // Load the JSON data into a PHP variable
                $data = json_decode(file_get_contents('data.json'), true);
                // If items exist, display them in a table
              if(!empty($data['items'])){
                  echo '<table>';
                  foreach ($data['items'] as $item){
                      echo '<tr><td>'. $item['name'] .
                          '</td> <td>' . $item ['description'] .
                          '</td> <td>'. '<form method="post" action="delete.php"> 
                          <input type="hidden" name="id" value="'. $item['id'].'">
                          <input type="submit" value="Apply"> 
                          </form></td></tr>';
                  }
                  echo '</table>';
                  }
              else{
                  echo'<p> Data Not found</P>';
              }

        ?>
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
