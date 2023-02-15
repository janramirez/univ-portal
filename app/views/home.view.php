<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPU Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="<?=ROOT?>/assets/css/general.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <section class="bg-red d-none d-md-block">
      <div class="container-fluid">
        <div class="row px-5 pt-3 pb-2">
          <div class="col-9">
            <div>
              <img src="<?=ROOT?>/assets/images/banner-desktop.png" class="mb-4" style="width: 40%;" />
              <p class="mb-0 text-white" style="font-size: 1.8rem;">
                  Ahoy! Welcome to the
                  <strong class="text-red text-xbold">LPU Pirates'</strong>
                    PORT.
              </p>
              <p class="intro-text text-white-med w-75 mb-4">
                A directory of online applications and services for the Lycean community.
              </p>
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

                            <button data-filter=".faculty" class="button btn btn-outline-secondary mb-2" id="faculty">Administrator &amp; Faculty</button>

                            <button data-filter=".staff" class="button btn btn-outline-secondary mb-2" id="staff">Support Staff</button>

                            <button data-filter=".parent" class="button btn btn-outline-secondary mb-2" id="parent">Parent/Guardian</button>

                            <button data-filter=".alumni" class="button btn btn-outline-secondary mb-2" id="alumni">Alumni</button>

                            <button data-filter=".admission" class="button btn btn-outline-secondary mb-2" id="admission">Admission</button>

                            <button data-filter=".services" class="button btn btn-outline-secondary mb-2" id="services">University Sites, Services and Resources</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light px-5 pt-4 pb-5">
        <div class="container-fluid">
            <div class="grid row">
              <div class="col-lg-2 col-md-4 col-sm-6  mb-4 category-item student" data-category="student">
                  <a href="https://mrooms.lpu.edu.ph/" target="_blank">
                    <div class="card h-100">
                        <div class="card-body p-3 d-flex flex-column justify-content-between">
                            <div>
                                <img src="<?=ROOT?>/assets/images/bgleftbottom.png" class="w-25"/>

                                <h6 class=" name mt-2 mb-1 text-semibold text-dkgold">
                                    <strong>AIMS</strong>
                                </h6>
                                <p class="mb-0 text-black">
                                    Student Information System for College and Senior High School.
                                </p>
                            </div>

                            <small class="text-muted">
                                <i class="fas fa-tag"></i>
                                &nbsp;STUDENT
                            </small>
                        </div>
                    </div>
                  </a>
              </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>