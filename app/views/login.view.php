<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jan Ramirez">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Simple PHP Framework Sign-in</title>

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
    <link href="<?=ROOT?>/assets/css/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
    <form method="post">
        <img class="mb-4" src="<?=ROOT?>/assets/images/bootstrap-logo.svg" alt="" width="72" height="57">

        <?php if(!empty($errors)):?>
        <div class="alert alert-danger">
            <?= implode("<br>",$errors)?>
        </div>
        <?php endif;?>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p>Not a member? <a class="py-1 px-0" href="<?=ROOT?>/signup">Create new account</a></p>
        <a class="py-1 px-0" href="<?=ROOT?>">Go Home</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
    </form>
    </main>


    
  </body>
</html>