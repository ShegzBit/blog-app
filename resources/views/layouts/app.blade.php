<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mini-Blog</title>
  <!-- Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      background-color: #f8f9fa;
      color: #212529;
    }
    .navbar {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .footer {
      background-color: #343a40;
      color: #adb5bd;
    }
    .footer a {
      color: #adb5bd;
    }
    .footer a:hover {
      color: #ffffff;
      text-decoration: none;
    }
    .hero-section {
      background: url('https://via.placeholder.com/1920x600') no-repeat center center;
      background-size: cover;
      color: #ffffff;
      padding: 4rem 0;
      text-align: center;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .hero-section p {
      font-size: 1.25rem;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{ route('posts.index') }}">Mini-Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('posts.index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Welcome to Mini-Blog</h1>
      <p>Your source for the latest news and updates</p>
    </div>
  </section>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-3">
    <div class="container text-center">
      <span>&copy; Mini-Blog {{ date('Y') }}. All Rights Reserved.</span>
      <br>
      <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
