<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post project</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .welcome{
            color: black;
            background-color: #0093d0;
            text-align: center;
            padding: 10px;
        }
        .post-jop {
          max-width: 600px;
          margin: 0 auto;
          margin-top: 20px;
          margin-bottom: 20px;
          padding: 20px;
          background-color: #f9f9f9;
          box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
          border-radius: 5px;
        }

        .post-jop h1 {
          font-size: 28px;
          margin-bottom: 20px;
          text-align: center;
        }

        .post-jop label {
          font-size: 18px;
          font-weight: bold;
          display: block;
          margin-bottom: 10px;
        }

        .post-jop input[type="text"],
        .post-jop textarea {
          font-size: 16px;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          width: 100%;
          margin-bottom: 20px;
        }

        .post-jop textarea {
          height: 150px;
        }

        .post-jop .form-label {
          display: block;
          margin-bottom: 10px;
          font-size: 18px;
          font-weight: bold;
        }

        .checkbox-input {
          display: none;
        }

        .post-jop .checkbox-input {
          display: none;
        }

        .post-jop .checkbox-label {
          font-size: 16px;
          display: inline-block;
          margin-right: 10px;
          margin-bottom: 10px;
          padding: 5px 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          cursor: pointer;
        }

        .post-jop .checkbox-label:hover {
          background-color: #f2f2f2;
        }

        .post-jop input[type="submit"] {
          background-color: #0093d0;
          color: white;
          font-size: 18px;
          font-weight: bold;
          border: none;
          border-radius: 5px;
          padding: 10px 20px;
          cursor: pointer;
        }

        .post-jop input[type="submit"]:hover {
          background-color: #0069d9;
        }
        .form-input label {
          font-family: Arial, sans-serif;
          font-size: 16px;
          font-weight: normal;
          line-height: 1.5;
        }

  
        .available-jobs {
          margin-top: 50px;
          font-family: Arial, sans-serif;
          text-align: center;
        }
        
        .available-jobs h1 {
          font-size: 32px;
          font-weight: bold;
          margin-bottom: 20px;
        }
        
        .available-jobs table {
          border-collapse: collapse;
          width: 100%;
          max-width: 800px;
          margin: auto;
        }
        
        .available-jobs table td, .available-jobs table th {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
        }
        
        .available-jobs table th {
          background-color: #f2f2f2;
          font-weight: bold;
        }
        
        .available-jobs form {
          display: inline-block;
        }
        
        .available-jobs input[type="submit"] {
          background-color: #0093d0;
          color: white;
          border: none;
          padding: 8px 16px;
          cursor: pointer;
        }
        
        .available-jobs input[type="submit"]:hover {
          background-color: #0069d9;
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
      <section class="post-jop">
        <h1>Post Jop</h1>
        <form method="post" action="add.php">
            <label>Jop title: </label>
            <input type="text" name="name" Required><br>
            <label>Description:</label>
            <textarea name="description" Required></textarea><br>
            <label for="skills" class="form-label">Required Skills:</label>
            <div class="form-input" id="skills">
              <input
                type="checkbox"
                name="skills[]"
                value="Web Development"
                id="checkbox1"
                class="checkbox-input"
              />
              <label for="checkbox1" class=""
                > Web Development</label
              >
              <input
                type="checkbox"
                name="skills[]"
                value="Writing & Translation"
                id="checkbox2"
                class="checkbox-input"
              />
              <label for="checkbox2" class=""
                > Writing & Translation</label
              >
              <input
                type="checkbox"
                name="skills[]"
                value="Design"
                id="checkbox3"
                class="checkbox-input"
              />
              <label for="checkbox3" class=""> Design</label>
            </div>
            <input type="submit" value="Add">
        </form>
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
                          <input type="submit" value="delete"> 
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
