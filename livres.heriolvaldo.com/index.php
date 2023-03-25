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

   
	<title>Bibliothèque en ligne - Accueil</title>
   <meta name="description" content="Swapping your used books with other book lovers is a great way to discover new books!"><br/><br/>
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
                <a class="nav-link" href="#propos" style="margin-left: 10px;" >About</a>
            </li>
           
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="empt.php" style="margin-left: 10px;">Borrow</a>
            </li>
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="#news" style="margin-left: 10px;">News</a>
            </li>
            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="#carouseldark" style="margin-left: 10px;">Our-books</a>
            </li>

             <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="contact.php#contact" style="margin-left: 10px;">Contact</a>
            </li>

            <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                <a class="nav-link" href="blog.php" style="margin-left: 10px;">blog</a>
            </li>
           
           
               <li class="nav-item" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
      
                <div style="display: flex;flex-direction: row; margin-left:10px; background-color:white;" class="dropdown  ">
                  <a class="btn btn-secondary dropdown-toggle bg-light"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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
   


   <div  class="divhome" id="propos">
      <p  class="about">  Would you like    </p>	
       <p class="about1">more about us?</p>
       <a class="card-link" style="color:white; text-decoration: none;" 
       href="about.html">
       <a class="card-link" style="color:white; text-decoration: none;" 
       href="about.php">
      <button type="button" class="btn btn-primary" 
       style="height:40px; margin-left:15px; margin-top: 10px;">
       Click here</button></a>

    </div>



    


 <div id="news" class="carousel slide" data-bs-ride="carousel" style="margin-right:15px;margin-top: 70px;margin-bottom: 20px; height: 20px;">
<div class="tf-work-section">
  <div class="container" >
    <h1 class="h1">Here are our latest books received</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/heriol2.jpg" alt="image de livre"/>
          <div class="card-body">
            <p class="text-muted">
                This book explains the concepts and programming techniques of the PHP language in particular. It is composed of several chapters which cover the different aspects of this language, such as syntax, data structures, functions and basic operations.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/heriol3.jpg" alt="3-start-simple"/>
          <div class="card-body">
            <p class="text-muted">This book is about the daily life of the homeless. It describes the experiences and challenges homeless people face on a daily basis. It includes testimonials from homeless people themselves.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/heriol2.jpg" alt="4-start-simple"/>
          <div class="card-body">
            <p class="text-muted">This romance novel is meant to entertain and move the reader by following the adventures and emotions of the main characters on their love journey.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="carouseldark" style="height:100px">
        </div>
 <div style="display:flex; flex-direction:row;">
   <h2 style="margin-left:15px; margin-bottom: 10px;"> Our-books</h2>
  <a href="empt.php"> <i class="fa fa-plus" style="font-size:20px; margin-left:10px;" title="Voir plus"></i></a>
  
 </div>
 

 <div id="carouseldark" class="carousel slide" data-bs-ride="carousel" style="margin-right:15px;">
 	
        

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouseldark" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
     <img src="images/heriol4.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Requiem</h5>
        <p>the ultimate forgiveness.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/heriol3.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>cold case</h5>
        <p>Monique adams case 1980.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/heriol2.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>the world of    <span translate="no">C's</span> </h5>
        <p>parallel universe where all men are equal.</p>
      </div>
    </div>
     <div class="carousel-item">
       <img src="images/heriol1.jpg" class="d-block w-100" alt="..." style="height:350px;width: 1500px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>the point of view of the weak</h5>
        <p>stand on the other side of the mirror.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouseldark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouseldark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  
    <div class="page-content">
    	<div id="work" style="height:100px;">
    	
    	</div>
     

<div class="tf-work-section">
  <div class="container" >
    <h1 class="h1">other activites</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/2.jpg" alt="2-start-simple"/>
          <div class="card-body">
            <p class="text-muted">
               The cinematographic or television adaptations of your works with authors who can transmit the emotions of your writings.</p><a class="card-link" href="#" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/3.jpg" alt="3-start-simple"/>
          <div class="card-body">
            <p class="text-muted">you can contact authors who can help you write your books or entrust them with all the writing according to your ideas.</p><a class="card-link" href="#" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 pt-2">
        <div class="card"><img class="img-fluid card-img-top" src="images/4.jpg" alt="4-start-simple"/>
          <div class="card-body">
            <p class="text-muted">Selling copyrights, Authors can sell the rights to their book to publishers for a sum of money up front, or receive royalties from the sales of their book.</p><a class="card-link" href="#" style="color:blue;">Learn More</a>
          </div>
        </div>
      </div>
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