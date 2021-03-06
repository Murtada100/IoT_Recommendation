 
   <?php
   session_start();
   
   ?> 
   <!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>IoT Recommendation</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
         <script src="jquery-3.5.1.js"></script>
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
 
    <script src="treelist.js"></script>
</head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Cloud Computing</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Recommender</a>
                        </li>   
                         <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Criteria1">Criteria</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image<img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt=""> -->
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">IoT Recommendation</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <!-- <p class="pre-wrap masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> -->
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <!-- <form>
                <input name="submit" type="submit" value="Submit">
              </form> -->
              <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Recommender</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
               
                

                <div id="accordion" class="border">
                    <div id="cloud1" style="padding-top: 15px; padding-left: 15px;" class="collapse show" data-parent="#accordion">
                      
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-cloud"></i></span>
                                </div>
                                 <a class="card-link" data-toggle="collapse" href="#fogs"> <button type="button" class="btn btn-outline-primary cloud"> Cloud</button> </a>  

                                <div class="input-group-prepend">
                                    <span class="input-group-text addfog cloud1"><i class="fa fa-plus"></i></span>
                                </div>                
                            </div>
                                     
                        <div id="fogs" class="panel-collapse collapse" data-parent="#cloud1">
                        </div>
                    </div>
                </div>
            </div>


        </div>
            </section>
            

            <br>
            <br>
            <br>
            <section class="page-section portfolio" id="Criteria1">

            <div class="container">
                <!-- Criteria Section Heading-->
                <div class="text-center" >
                        <a class="card-link"  class="collapse show"  data-toggle="collapse" href="#Criteria">
                                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Criteria</h2>
                         </a>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div id="accordion" class="border">
                    <div id="Criteria" class="panel-collapse collapse">
                    <div class="form-group" style="background: aliceblue;">
                        <label for="Frequency">Frequency:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Frequency">
                        <label for="FrequencyPriority">Priority:  </label><select name="FrequencyPriority" id="FrequencyPriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                      </div> 
                      <div class="form-group" style="background: aliceblue;">
                        <label for="Sensitivity">Sensitivity:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Sensitivity">
                        <label for="SensitivityPriority">Priority:  </label><select name="SensitivityPriority" id="SensitivityPriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                    </div>
                      <div class="form-group" style="background: aliceblue;">
                        <label for="Freshness">Freshness:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Freshness">
                        <label for="FreshnessPriority">Priority:  </label><select name="FreshnessPriority" id="FreshnessPriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                    </div>
                      <div class="form-group" style="background: aliceblue;">
                        <label for="Time">Time:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Time">
                        <label for="TimePriority">Priority:  </label><select name="TimePriority" id="TimePriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                    </div>
                      <div class="form-group" style="background: aliceblue;">
                        <label for="Volume">Volume:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Volume">
                        <label for="VolumePriority">Priority:  </label><select name="VolumePriority" id="VolumePriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                    </div>
                      <div class="form-group" style="background: aliceblue;">
                        <label for="Criticality">Criticality:</label>
                        <input type="range"  class="form-control" min="1" max="100" value="50" id="Criticality">
                        <label for="CriticalityPriority">Priority:  </label><select name="CriticalityPriority" id="CriticalityPriority" class="custom-select-sm"> <option value="0">Un Classified</option> <option value="1" selected>1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option><option value="6">6</option> </select>
                    </div>
                    </div>
                </div> 
                      


            </div>
        </section>
        <br>
        <br>
  <!-- <div  id="Criteria_hidden"  ></div>
            <div   id="cloud_hidden" ></div>   -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="text-align: center;">
            <input type="hidden" id="Criteria_hidden" name="Criteria_hidden" value="wwww">

            <input type="hidden" id="cloud_hidden" name="cloud_hidden" value="wwww">

<!-- <input  type="text" name="fname"> -->
              <button type="submit"   name="submit" id="submit" class="btn btn-primary">Submit</button>
      

             </form>
                                <?php
                              
                    //           echo ('1111111111111');

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    //  echo ('22222222222222222');
                    
                    // print_r(json_decode($_POST['cloud_hidden'], true));// json_decode($_POST['cloud_hidden'], true);
                    // echo json_decode($_POST['Criteria_hidden'], true);

                    $_SESSION["cloud_hidden"] =json_decode($_POST['cloud_hidden'], true);
                    $_SESSION["Criteria_hidden"] =json_decode($_POST['Criteria_hidden'], true);
                     if (isset( $_SESSION["cloud_hidden"]))
                    {
                    
                        echo "<script>location.href='php/reciver.php';</script>";

                    }
                
                    }
                        // collect value of input field
                        // $name = $_POST['custId'];
                        // $json = json_decode(file_get_contents("php://input", true));
                        // // $dom = new DOMDocument();
                        // echo $json;
                        // $dom->loadHTML($html);
                        
                        // $xpath = new DOMXPath($dom);
                        // $divContent = $xpath->query('div[id=Criteria_hidden]');
                        // echo   $divContent;
                    //     if (empty($name)) {
                    //         //echo $_POST['cloud_hidden'];
                    //     } else {
                    //         echo $name;
                    //     }
                    // }
                    ?>
      
              
        <br>
        <br>
        <!-- Portfolio Modal-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="Log Cabin"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="Tasty Cake"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="Circus Tent"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="Controller"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="Locked Safe"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="Submarine"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container"> 
          <!--        <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">ABOUT</h2>
                </div> 
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> 
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">(555) 555-5555</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:name@example.com">name@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">LOCATION</h4>
                        <p class="pre-wrap lead mb-0">UK
Reading</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com/sbootstrap"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.dribble.com/#"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">ABOUT</h4>
                        <p class="pre-wrap lead mb-0">IoT Recommendation</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright © Your Website 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <!-- <script src="assets/mail/jqBootstrapValidation.js"></script> -->
        <!-- <script src="assets/mail/contact_me.js"></script> -->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>