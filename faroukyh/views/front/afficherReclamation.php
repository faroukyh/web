<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Blog Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="index.html">Accueil</a></li>

                                <li><a href="blog.html">Formulaire</a></li>

                                <li><a href="about-us.html">achats</a></li>

                                <li><a href="team.html">Commande en ligne</a></li>

                                <li><a href="contact.html">Abonnements</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top" style="background-image: url(img/homepage-banner-image-1920x700.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Bienvenue .</h2>
                        <div class="blue-button">
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <h1>List des reclamations</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                        <a href="reclamationajout.html" class="btn btn-success">Ajouter une reclamation</a>
                    <hr>
                                            
                    <div class="container">
                        
                        <table class="table">
                            <thead class="-dark">
                                    <tr>
                                        <th>Date de reclamation</th>
                                        <th>Heure de reclamation</th>
                                        <th>message</th>
                                       
                                        
                                        <th scope="col">#</th>
                                    </tr>
                        </thead >
                        
                                    <?PHP
                                    include '../../../controller/ReclamationController.php';
                                  
                                    $ReclamationController=new ReclamationController();
                                    $ReclamationC=$ReclamationController->AfficherReclamation();
                                        foreach($ReclamationC as $ReclamationController){
                                    ?>
                                        <tr>
                                            <td><?PHP echo $ReclamationController['datereclamation']; ?></td>
                                            <td><?PHP echo $ReclamationController['heurereclamation']; ?></td>
                                            <td><?PHP echo $ReclamationController['messages']; ?></td>
                                            
                                            
                                            <td> <a class=" btn btn-primary m-1" href="modifierReclamation.php?id=<?php echo $ReclamationController["id"]; ?>" >modifier</a>
                                                <a class="btn btn-danger m-1" href="supprimerReclamation.php?id=<?php echo $ReclamationController["id"]; ?>" >supprimer</a>
                                            </td>
                                        </tr>
                                    <?PHP
                                        }
                                    ?>
                                </table>
                                    </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Authors</span>
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                    </div> 
                </div> 

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-1-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>CEO</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-2-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Jane Doe</h4>
                                <span>Marketing Manager</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-3-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Paula Jeorge</h4>
                                <span>Customer Service</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-4-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Dan Blatan</h4>
                                <span>Customer Service</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.png" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellustea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="inde.html"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="about.html"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="team.html"><i class="fa fa-stop"></i>Team</a></li>
                                    <li><a href="contact.html"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="faq.html"><i class="fa fa-stop"></i>FAQ</a></li>
                                    <li><a href="testimonials.html"><i class="fa fa-stop"></i>Testimonials</a></li>
                                    <li><a href="blog.html"><i class="fa fa-stop"></i>Blog</a></li>
                                    <li><a href="terms.html"><i class="fa fa-stop"></i>Terms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                            <li><span>Email:</span><a href="#">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>