<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cool Homepage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <nav>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="auth-btns">
            <div class="login-btn">
                <button class="login-btn" id="loginBtn">Login</button>
                <button class="type" id="SignBtn">Register</button>
                <div class="overlay" id="overlay"></div>
                <div class="popup" id="popup">
                    <h2>Login</h2>
                    <form action="welcome.php" method="post">
                        <input type="email" placeholder="Email" name="email">
                        <br>
                        <input type="password" placeholder="Password" name="pword">
                        <br>
                        <div class="log">
                        <input type="submit" value="Login">
                        <button id="closeBtn">Close</button>
                        </div>
                    </form>  
                    <p>Don't have an account?
                    <button id="register">Register</button>    
                    </p>                                        
               </div> 
               <div id="signIn">
                <div class="registerBtn">
                <h3>Register</h3>
                <form action="">
                  <input type="text" placeholder="Username">
                  <br>
                  <input type="email" placeholder="email address">
                  <br>
                  <input type="password" placeholder="password">
                  <br>
                  <input type="submit" value="Submit">
                </form>
              </div>    
            </div>
          </li>
        </ul>
      </nav>
    <h1>Welcome to My Cool Homepage!</h1>
    <p>Explore and Enjoy! Dowwnloading series and movies inside my page</p>
  </header>
  <main>
    <section class="features">
      <h2>Awesome Features</h2>
      <div class="feature-card" id="feature1">
        <h3>Feature 1</h3>
        <p>Description of Feature 1</p>
      </div>
      <div class="feature-card" id="feature2">
        <h3>Feature 2</h3>
        <p>Description of Feature 2</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Cool Homepage</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="main.js"></script>
</body>
</html>
