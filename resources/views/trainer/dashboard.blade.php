<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trainer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{ URL::asset('css/styles.css'); }} rel="stylesheet" />
        <link href={{ URL::asset('css/profiles.css'); }} rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../assets/img/GET FIT LOGO.png" alt="..." height="300px" width="100px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#video">Video Workout</a></li>
                        <li class="nav-item"><a class="nav-link" href="#trainee">Trainee</a></li>
                        <li class="nav-item"><a class="nav-link" href="tracking">Trainees' Sessions Tracking</a></li>
                        <li class="nav-item"><a class="nav-link" href="profiles">Trainees' Profiles</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('profile.show') }}">Account</a></li>
                         <!-- Authentication -->
                         <form method="POST" action="{{ route('logout') }}">
                         @csrf
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        Sign Out</a></li></form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        
          <!-- Video Grid-->
          <section class="page-section bg-light" id="video">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Workout Videos</h2>
                    <h3 class="section-subheading text-muted">Recommended and Verified by Qualified Trainers.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- trainee item 1-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/lWXhih3xbVc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- trainee item 2-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/xqolRM2_HTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- trainee item 3-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/3irVy7zN47w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- trainee item 4-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/IcHek6FRbsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- trainee item 5-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/cXzglB3l-sE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- trainee item 6-->
                        <div class="trainee-item">
                            <a class="trainee-link" data-bs-toggle="modal" href="#traineeModal1">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/pzhzS7FDFQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; GetFit 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- trainee Modals-->
        <!-- trainee item 1 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <!-- <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!- <div class="modal-body"> -->
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Trainee Gym Profile</h2>
                                    <div class="row-profile">
                                        <div class="column-profile" style=" width: 30%; background-image: url('../assets/img/team/1.jpg'); background-repeat: no-repeat;  background-size:cover;">
                                      
                                        </div>
                                        <div class="column-profile" style="background-color:#c8cccc; width:70%;">
                                          <table style="width:100%">
                                              <tr>
                                                <td class="td-profile"><b>Username</b></td>
                                                <td class="td-profile">Tobias</td>
                                      
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Email</b></td>
                                                <td class="td-profile">Tobias</td>
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Gender</b></td>
                                                <td class="td-profile">
                                                <input type="radio" name="gender" value="man" required>
                                                <label for="gender">Man</label>
                                                <input type="radio" name="gender" value="woman" required>
                                                <label for="gender">Woman</label>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Health Problem</b></td>
                                                <td class="td-profile">
                                                <form action="/action_page.php"> 
                                                    <input type="checkbox" id="health1" name="health1" value="Scolosis">
                                                    <label for="health1"> Scolosis</label><br>
                                                    <input type="checkbox" id="health2" name="health2" value="Cervical spndylosis">
                                                    <label for="health2"> Cervical spndylosis</label><br>
                                                    <input type="checkbox" id="health3" name="health3" value="Kyphosis">
                                                    <label for="health3"> Kyphosis</label><br>
                                                    <input type="checkbox" id="health4" name="health4" value="Hearth Problem">
                                                    <label for="health4"> Hearth Problem</label><br>
                                                    <input type="checkbox" id="health5" name="health5" value="Ligament ruptures">
                                                    <label for="health5"> Ligament ruptures</label><br>
                                                    <input type="checkbox" id="health6" name="health6" value="Respitory problems">
                                                    <label for="health6"> Respitory problems</label><br>
                                                    <input type="checkbox" id="health7" name="health7" value="Humeral neck fracture">
                                                    <label for="health7"> Humeral neck fracture</label><br>
                                                </form>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Purpose</b></td>
                                                <td class="td-profile"><form action="/action_page.php">
                                              <input type="checkbox" id="purpose1" name="purpose1" value="Loose Fat">
                                              <label for="purpose1"> Loose Fat</label><br>
                                              <input type="checkbox" id="purpose2" name="purpose2" value="Maintanance">
                                              <label for="purpose2"> Maintanance</label><br>
                                              <input type="checkbox" id="purpose3" name="purpose3" value="Muscle Building">
                                              <label for="purpose3"> Muscle Building</label><br>
                                              <input type="checkbox" id="purpose4" name="purpose4" value="Health">
                                              <label for="purpose4"> Health</label><br>
                                              
                                            </form></td>
                                            
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Location</b></td>
                                                <td class="td-profile">
                                                <input type="radio" name="location" value="home" required>
                                                <label for="location">Home</label>
                                                <input type="radio" name="location" value="gym" required>
                                                <label for="location">Gym</label>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="td-profile"><b>Work certain muscle group(optional)</b></td>
                                                <td class="td-profile">Tobias</td>
                                              </tr>
                                              
                                            </table>
                                            <br>
                                            <a class="button2" href="file:///C:/xampp/htdocs/GetFit/trainer/traineetrackingsession.html">Tracking Session</a>
                                            <a class="button1" data-bs-dismiss="modal" >Cancel</a>
                                        </div>
                                      </div>
                                      <br>
                                <!-- </div> 
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- trainee item 2 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/trainee/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trainee item 3 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/trainee/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trainee item 4 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/trainee/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trainee item 5 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/trainee/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trainee item 6 modal popup-->
        <div class="trainee-modal modal fade" id="traineeModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/trainee/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src={{ URL::asset('js/scripts.js'); }}></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @include('sweetalert::alert')

    </body>
</html>
