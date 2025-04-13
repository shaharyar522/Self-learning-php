<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f9f9f9;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 600;
  color: #2c3e50;
}

a {
  text-decoration: none;
  color: #3498db;
  transition: color 0.3s ease;
}

a:hover {
  color: #2980b9;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.btn {
  padding: 10px 20px;
  font-size: 1rem;
  border-radius: 50px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary {
  background-color: #3498db;
  border: none;
  color: white;
}

.btn-primary:hover {
  background-color: #2980b9;
  transform: scale(1.05);
}

.btn-secondary {
  background-color: #ecf0f1;
  border: 1px solid #bdc3c7;
  color: #333;
}

.btn-secondary:hover {
  background-color: #bdc3c7;
  color: white;
}

/* Hero Section */
#hero {
  height: 100vh;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

#hero h1 {
  font-size: 4rem;
  margin-bottom: 20px;
}

#hero .lead {
  font-size: 1.5rem;
  margin-bottom: 30px;
}

#hero .btn {
  padding: 15px 30px;
  font-size: 1.2rem;
  border-radius: 50px;
}

#hero .btn:hover {
  transform: scale(1.1);
}

/* About Section */
#about {
  background-color: #fff;
  padding: 60px 0;
}

#about img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

#about .lead {
  font-size: 1.2rem;
  line-height: 1.8;
}

/* Portfolio Section */
#portfolio {
  padding: 60px 0;
}

#portfolio .card {
  border: none;
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#portfolio .card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

#portfolio .card-img-top {
  height: 200px;
  object-fit: cover;
}

#portfolio .card-title {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

#portfolio .card-text {
  font-size: 1rem;
  margin-bottom: 15px;
}

/* Skills Section */
#skills {
  background-color: #ecf0f1;
  padding: 60px 0;
}

#skills .progress {
  height: 10px;
  border-radius: 5px;
  overflow: hidden;
}

#skills .progress-bar {
  background-color: #3498db;
  transition: width 0.5s ease;
}

/* Contact Section */
#contact {
  background-color: #fff;
  padding: 60px 0;
}

#contact label {
  font-weight: bold;
  margin-bottom: 5px;
}

#contact input,
#contact textarea {
  border: 1px solid #bdc3c7;
  border-radius: 5px;
  padding: 10px;
  transition: border-color 0.3s ease;
}

#contact input:focus,
#contact textarea:focus {
  border-color: #3498db;
  outline: none;
  box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

/* Footer */
footer {
  background-color: #2c3e50;
  color: white;
  padding: 30px 0;
  text-align: center;
}

footer p {
  margin-bottom: 15px;
}

footer .social-icons a {
  color: white;
  font-size: 1.5rem;
  margin: 0 10px;
  transition: color 0.3s ease;
}

footer .social-icons a:hover {
  color: #3498db;
}

footer .btn-outline-light {
  border: 1px solid white;
  color: white;
  padding: 10px 20px;
  border-radius: 50px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

footer .btn-outline-light:hover {
  background-color: white;
  color: #2c3e50;
}
    </style>
</head>
<body>
   <!-- Hero Section -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container text-center">
      <h1 class="display-4">Hi, I'm [Your Name]</h1>
      <p class="lead">A passionate Web Developer specializing in HTML, CSS, JavaScript, PHP, and Laravel.</p>
      <a href="#portfolio" class="btn btn-primary btn-lg">View My Work</a>
    </div>
  </section> 
  <section id="about" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">About Me</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="your-photo.jpg" alt="Profile Picture" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col-md-6">
          <p class="lead">
            I am a skilled web developer with expertise in HTML, CSS, JavaScript, PHP, MySQL, AJAX, jQuery, and Laravel. 
            I love creating responsive, user-friendly websites and solving complex problems with clean code.
          </p>
          <ul class="list-unstyled">
            <li><strong>Experience:</strong> 2+ years</li>
            <li><strong>Technologies:</strong> HTML, CSS, Bootstrap, JavaScript, PHP, MySQL, AJAX, jQuery, Laravel</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">My Projects</h2>
      <div class="row">
        <!-- Project 1 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="project1.jpg" class="card-img-top" alt="Project 1">
            <div class="card-body">
              <h5 class="card-title">Project Title</h5>
              <p class="card-text">Description of the project and technologies used.</p>
              <a href="https://example.com" target="_blank" class="btn btn-primary">Live Demo</a>
              <a href="https://github.com/your-repo" target="_blank" class="btn btn-secondary">GitHub</a>
            </div>
          </div>
        </div>
        <!-- Repeat for other projects -->
      </div>
    </div>
  </section>

  <section id="skills" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">My Skills</h2>
      <div class="row">
        <div class="col-md-6">
          <h5>HTML</h5>
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
          <h5>CSS</h5>
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
          </div>
          <!-- Repeat for other skills -->
        </div>
        <div class="col-md-6">
          <h5>JavaScript</h5>
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
          </div>
          <h5>PHP & Laravel</h5>
          <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Me</h2>
      <form id="contactForm">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </section>


  <footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p>&copy; 2023 [Your Name]. All rights reserved.</p>
    <div class="social-icons">
      <a href="https://linkedin.com/in/your-profile" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/your-profile" target="_blank"><i class="fab fa-github"></i></a>
    </div>
    <a href="#hero" class="btn btn-outline-light mt-3">Back to Top</a>
  </div>
</footer>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
      
        fetch('send_email.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          alert(data.message);
        })
        .catch(error => {
          console.error('Error:', error);
        });
      });
</script>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send email logic here
  echo json_encode(['message' => 'Message sent successfully!']);
}
?>

</body>
</html>