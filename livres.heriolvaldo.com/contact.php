<?php session_start(); 

 
?>


<!Doctype html>

<html lang="en-US">
	
<head>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="google-site-verification" content="1OKYykgt7lCk3E6zvrLMaMSuIDhy7qDn1Nnnhzz1uT8" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      
  

   <link href="css/font-awesome/css/all.css" rel="stylesheet">
    <link href="css/font-awesome/materiel/materielindigo.min.css?ver=1.3.0" rel="stylesheet">
   <link href="css/toastr/toastr.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
   <link href="css/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   
	<title>Contact Us - Online Library</title>
   <meta name="description" content="We would love to hear from you! If you have any questions, comments or suggestions regarding our book exchange site, please do not hesitate to contact us. We're here to help and welcome your feedback to keep improving our site.

You can contact us by filling out our online contact form. Be sure to provide your contact details so that we can respond to you. You can also email us at our email address or call us at the phone number listed on this page. We try to respond to all requests as soon as possible.

We're committed to quality customer service and we're here to help with any issues or questions you may have. Do not hesitate to contact us for any request for information, support or suggestion. We are here for you."><br/><br/>
</head>

<body>
	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top" id="nav">
     <header class="container-fluid">
    	<a class="navbar-brand text-uppercase fw-bold" href="">
         <span class="bg-primary bg-gradient p-1 rounded-3 text-light" translate="no">Relive</span >
         <span translate="no" style="font-weight: bold">Me</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        	 <ul class="navbar-nav bg-light navbar-light" style="background-color:white ;">
          
            <li class="nav-item active ">
                <a class="nav-link" href="index.php#propos" style="margin-left: 10px;" >Home</a>
            </li>
            
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="empt.php" style="margin-left: 10px;">Borrow</a>
            </li>
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="index.php#news" style="margin-left: 10px;">News</a>
            </li>
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="index.php#carouseldark" style="margin-left: 10px;">Our-books</a>
            </li>

             <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="#contact" style="margin-left: 10px;">Contact</a>
            </li>

             <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="blog.php" style="margin-left: 10px;">blog</a>
            </li>
           
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
      
                  <div style="display: flex;flex-direction: row; margin-left:10px; background-color:white;" class="dropdown  ">
                  <a class="btn btn-secondary dropdown-toggle bg-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  <i class="fa fa-user"  style="font-size:35px; color:blue;"data-bs-toggle="tooltip" data-bs-placement="top" title="Connection">
                      </i>
                  </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink  bg-dark">
                            <a class="dropdown-item" href="data.php">Se connecter</a>
                            <a class="dropdown-item" href="inscription.php">S'inscrire</a>
                            
                          </div>

                 
                </div>
                
            </li>
        </ul>
         </div>
     </header>
    </nav>
   




  
<div class="tf-contact-section">
  <div class="container" id="contact">
    <h2 class="h4">More informations</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h3 class="h5">Contact us</h3>
        <form method="POST" onsubmit="return sendData();">
          <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 tf-contact-col">
              <input class="bg-light form-control" type="text" name="name" id="name" placeholder="*Name" required="required"/>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pb-2">
              <input class="bg-light form-control" type="email" name="email" id="email" placeholder="*Your Email Address" required="required"/>
            </div>
          </div>
          <div class="row pb-2 no-gutters">
            <div class="col-md-12 col-sm-12">
              <textarea class="bg-light mb-2 form-control" name="message" id="message" placeholder="*Your Message" rows="5" required="required"></textarea>

            </div>
          </div>
          <input value="submit" class="btn btn-primary" type="submit"/>
        </form>
      </div>
      <div class="col-md-6 col-sm-12 float-right text-right">
        <h3 class="h5">Address</h3><span> 75 Rue Vincent Fayo,Châtenay-Malabry 92290<br/>France</span>
        <p></p>
        <h3 class="h5" id="div">Phone</h3>
        <p>+33753868021</p>
        <h3 class="h5">Email</h3>
        <p>zeufackheriol@gmail.com</p>
        <i class="bi bi-airplane-engines"></i>

      </div>
    </div>
  
    <div  id="res">
    	
    	
    </div>
   
  </div>
</div>

    

	<footer class="bg-dark py-4 mt-5 tf-footer">
      <div class="container text-light">
        <div class="row">
          <div class="col-md-6 col-sm-12">&copy; Gestionnaires.</div>
           <div class="col-md-6 col-sm-12">
             <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/ZHeriol" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x" ></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/heriol-valdo-zeufack-fiemo-85bba3258" title="Linkedin" target="_blank"><i class="fab fa-linkedin fa-2x" ></i><span class="menu-title sr-only">Linkedin</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://instagram.com/heriolvado1?igshid=YWJhMjlhZTc=" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/heriol-valdo" target="_blank" title="Github"><i class="fab fa-github fa-2x" ></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
           
          </div>
         </div>
      </div>
    </footer>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">excerpt from the book bachïrou</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <p style="text-align: justify;">
          Being a child without landmark in a developing country is not thing easy, the circumstances of life are must hardly common to others, everything seems difficult besides it is difficult for the children of people and sons of nothing, it reminds me of one of my anecdotes in my past life I forgot before I started it's bachïrou commonly called  <span translate="no">pull-over</span>  maybe because I only had that this outfit like clothes. .You know being a child of nothing and persons can seem worse, but despite all that we can still bring out a positive aspect, we have the ability to see things in a different way because we are satisfied with the little that 'we  managed to have during the day, I say this with a smile because sometimes we spent days without having something to eat, we often called each other my comrades and I the survivors of modern times.
        </p>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">exit</button>
      </div>
    </div>
  </div>
</div>



    
     <script src="js/script.js" type="text/javascript"></script>
    <script src="css/js/bootstrap.bundle.min.js?ver=1.2.0"></script>
     <script src="css/js/bootstrap.bundle.js?ver=1.2.0"></script>
       <script src="css/js/bootstrap.js?ver=1.2.0"></script>
         <script src="css/js/bootstrap.min.js?ver=1.2.0"></script>
           <script src="css/js/bootstrap.esm.js?ver=1.2.0"></script>
             <script src="css/js/bootstrap.esm.min.js?ver=1.2.0"></script>
   
   
</body>
</html>