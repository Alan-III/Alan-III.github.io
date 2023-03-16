<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav>
    <ul>
      <li>
        <a class="nav-link active" href="#home"><h4 class="overlay">Home</h4></a>        
      </li>
      <li>
        <a class="nav-link" href="#about"><h4 class="overlay">About</h4></a>        
      </li>
      <li>
        <a class="nav-link" href="#portfolio"><h4 class="overlay">Portfolio</h4></a>        
      </li>
      <li>
        <a class="nav-link" href="#contact"><h4 class="overlay">Contact</h4></a>        
      </li>
    </ul>
  </nav>
  
  <!-- Home section -->
  <section class="home" id="home">
    <div class="container">
      <h1>Welcome to my Portfolio</h1>
      <p>Explore my work and let's create something awesome together!</p>
      <button class="btn" onClick="document.getElementById('portfolio').scrollIntoView();">View Portfolio</button>
    </div>
  </section>

  <!-- About section -->
  <section class="about" id="about">
    <div class="container">
      <h2>About Me</h2>
      <div class="about-content">
        <div class="about-text">
          <p>Hi, my name is Alexander A. Karagiannis. I am a game developer with a passion for creating immersive experiences.</p>
          <p>My skills include:</p>
          <ul>
            <li>3D modeling and animation</li>
            <li>Web development</li>
            <li>Game development</li>
            <li>Software development</li>
          </ul><br>
          <p>Technical skills:</p>
          <ul class="list-inline">
            <li>Programming Laguages:
              <ul>
                <li> C#</li>
                <li> Java</li>
                <li> Python</li>
                <li> Javascript</li>
                <li> PHP</li>
                <li> SQL</li>
                <li> HTML</li>
                <li> CSS</li>
              </ul>
            </li>
            <li> Software:
              <ul>
                <li> Unity 3D/2D</li>
                <li> Photon Engine</li>
                <li> Blender</li>
                <li> Android Studio</li>
                <li> DaVinchi Resolve</li>
              </ul>
            </li>
            <li>Laguages:
              <ul>
                <li> Greek (native)</li>
                <li> English (C2)</li>
                <li> Japanese(N5)</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="about-image">
          <img src="ai.png" alt="My Avatar">
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2>My Work</h2>
      <div class="portfolio-grid">
        <div class="portfolio-item">
          <img src="probending.png" alt="Pro-Bending Arena">
          <div class="overlay">
            <h3>Pro-Bending Arena</h3>
            <p>A multiplayer mobile game inspired by the Legend of Korra series. Still in progress..</p>
            <button class="btn" onclick="location.href='https://alaniii.itch.io/pro-bending-arena';">View Project</button>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="divedeeper.png" alt="Dive Deeper">
          <div class="overlay">
            <h3>Dive Deeper</h3>
            <p>A game made for Triple Trijam 2022 in <strong>9 hours!</strong> with Unity Game Engine</p>
            <button class="btn" onclick="location.href='https://alaniii.itch.io/dive-deeper';">View Project</button>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="Roots.png" alt="Finding your Roots">
          <div class="overlay">
            <h3>Finding your Roots</h3>
            <p>A game made during the Global Game Jam 2023 in Athens. It is played in the Dome of the Hellenic Cosmos Cultural Center and won <strong>1st Place</strong> in the local competition</p>
            <button class="btn" onclick="https://alaniii.itch.io/finding-your-roots';">View Project</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact section -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 class="section-title">Contact</h2>
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form method="post" class="contact-form">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <script src="main.js"></script>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create the email message
    $to = 'karagiannis.alex.grt+github@gmail.com';
    $subject = 'New message from your website';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $body, $headers);
    echo "Message sent!";
    exit();
  }
  ?>

</body>
</html>
