<?php
// Load the products JSON file
$data = json_decode(file_get_contents('products.json'), true);

// Initialize the search results array
$results = array();

// Check if the query parameter is set
if(isset($_GET['q'])){
    $query = strtolower($_GET['q']);
    foreach ($data as $products){
        if (strpos(strtolower($products['name']), $query) !== false){
           $results[] = $products;
        }
    }
}

?>
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
        h2 {
          font-size: 24px;
          padding-bottom: 20px;
        }
        div {
          border: 1px solid #ccc;
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
        <div id="results">
          <?php if (!empty($results)): ?>
            <?php foreach ($results as $product): ?>
            <div>
              <h2><?php echo $product['name']; ?></h2>
              <p><?php echo $product['description']; ?></p>
            </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>No results found.</p>
          <?php endif; ?>
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


