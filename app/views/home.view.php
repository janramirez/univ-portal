<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPU Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="<?=ROOT?>/assets/css/general.css" rel="stylesheet" >


  </head>
  <body class="bg-light">
    <section class="bg-red header d-none d-md-block">
      <div class="container-fluid">
        <div class="row px-5 pt-3 pb-2">
          <div class="col">
            <div class="d-flex align-items-center justify-content-between">
              <img src="<?=ROOT?>/assets/images/banner-desktop.png" class="mb-4" style="width: 40%;" />
              <div>
                <p class="mb-0 text-white w-75" style="text-align:end;font-size: 1.8rem;">
                    Ahoy, <?=$username?>! Welcome to <br>
                    <strong class="text-red text-xbold">The PORT</strong>!
                </p>
                <p class="intro-text text-white-med w-75 mb-4" style="text-align:right">
                  A directory of online applications and services for the Lycean community.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-transparent px-5 pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mt-4">
                        <input type="text" placeholder="Searching for ..." title="Type in a name" class="quicksearch form-control form-control-sm"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters d-sm-none d-lg-block d-md-block d-none">
                        <div class="mt-3 form-group  gx-1 button-group js-radio-button-group" data-filter-group="category">
                          <button data-filter="*" class="button btn btn-danger mb-2" style="background-color: darkred" id="all">Show All</button>

                          <button data-filter=".student" class="button btn btn-outline-secondary mb-2" id="student">Student</button>

                          <button data-filter=".faculty" class="button btn btn-outline-secondary mb-2" id="faculty">Alumni</button>

                          <button data-filter=".staff" class="button btn btn-outline-secondary mb-2" id="staff">Faculty</button>

                          <button data-filter=".parent" class="button btn btn-outline-secondary mb-2" id="parent">Parent</button>

                          <button data-filter=".alumni" class="button btn btn-outline-secondary mb-2" id="alumni">Admin</button>

                          <button data-filter=".admission" class="button btn btn-outline-secondary mb-2" id="admission">Library Services</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light px-5 pt-4 pb-5">
        <div class="container-fluid">
            <div class="grid row">

            <?php
              foreach($categories as $key) {
                echo "<h4 class='text-semibold text-secondary'>".ucfirst($key)."</h4>";
                foreach($services as $row) {
                  echo "<div class='col-lg-2 col-md-4 col-sm-6  mb-4 category-item student' data-category='student'>
                  <a href=".$row->url." target='_blank'>
                    <div class='card h-100'>
                      <div class='card-body p-3 d-flex flex-column justify-content-between'>
                        <div>
                            <img src='".ROOT."/assets/images/".$row->icon_location."' class='w-25'/>
  
                            <h6 class=' name mt-2 mb-1 text-semibold text-dkgold'><strong>".$row->name."</strong>
                            </h6>
                            <p class='mb-0 text-black'>".$row->description."
                            </p>
                        </div>
  
                        <small class='text-muted'>
                            <i class='fas fa-tag'></i>
                            &nbsp;".$row->category."
                        </small>
                      </div>
                    </div>
                  </a>
                </div>";
                }
              }
            ?>
            <!-- loop through array from Services model
          rendered as card widget using HTML and CSS styling -->
            <?php
              
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>