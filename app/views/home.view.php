<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple framework for PHP utilizing the MVC Structure">
    <meta name="author" content="Jan Ramirez">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Simple PHP Framework Homepage</title>


    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
        <h3 class="float-md-start mb-0">Simple PHP Framework</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="<?=ROOT?>">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="<?=ROOT?>/login">Login</a>
            <a class="nav-link fw-bold py-1 px-0" href="<?=ROOT?>/logout">Logout</a>
        </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>A simple PHP Framework.</h1>
        <h3 class="text-white-50">Welcome, <strong class="text-white"><?=$username?>!</strong></h3>
        <p class="lead">This is a minimal framework template for building simple and beautiful php apps. Fork, clone, edit, and add your own code to make it your own.</p>
        <p class="lead">
        <a href="http://localhost/simple-php-framework/README.md" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Homepage template for <a href="<?=ROOT?>" class="text-white">simple-php-framework</a>, by <a href="https://instagram.com/janmrmrz" target="_blank" class="text-white">@janmrmrz</a>.</p>
    </footer>
    </div>


    
  </body>
</html>
