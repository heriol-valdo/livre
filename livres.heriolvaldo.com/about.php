<!Doctype html>

<html lang="en-US">
	
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
   <link href="css/font-awesome/css/all.css" rel="stylesheet">
    <link href="css/font-awesome/materiel/materielindigo.min.css?ver=1.3.0" rel="stylesheet">
   <link href="css/toastr/toastr.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
   <link href="css/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	<title>About our online library</title>
 <meta name="description" content="Welcome to our online book exchange community! We are a group of book enthusiasts who have created this platform to allow book lovers to share and exchange their favorite readings. We believe that reading is one of the best ways to escape reality, discover new ideas and connect with others.

Our website has been designed to make book exchange among our community members easy and seamless. You can browse our online catalog, search for specific books, and request to exchange books with other members. We also have features that help users find book exchange matches and communicate with other members of the community.

We are committed to providing an exceptional user experience and promoting reading and book exchange. We hope you enjoy your time on our website and discover new books to love. If you have any questions or comments, please don't hesitate to contact us. We are here to help">
</head>

<body>
	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top" id="nav">
     <header class="container-fluid">
    	<a class="navbar-brand text-uppercase fw-bold" href="">
         <span class="bg-primary bg-gradient p-1 rounded-3 text-light" translate="no">Relive</span>
          <span translate="no" style="font-weight: bold">Me</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        	 <ul class="navbar-nav bg-light navbar-light" style="background-color:white ;">
             <li class="nav-item active ">
                <a class="nav-link" href="index.php#" style="margin-left: 10px;" >Home</a>
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
   


 
   <div class="presentation">

    <div>
        <figure>
            <img src="images/home1.jpg" alt="image presentation" class="presentationimage">
            
        </figure>
    </div>
     
    <div>
        <div  class="reli">
             <h1 style="margin-left:15px;"> <span class="rounded-3 p-1" style="font-weight: bold; font-style: oblique; border: solid blue;background-color:blue;color: white;" translate="no">ReLive</span><span style="font-weight: bold" translate="no" >Me</span></h1>
        </div>
       
        <p style="font-style: italic; text-align:justify; margin-left:10px;"> 
         Is a structure which exercises in the writing, the publication of the books, accompanies you in your steps of memories going from the idea to the concretization. Founded in 2022 by Mr Heriol Zeufack, its objective is to introduce young people, passionate or not, to the benefits of reading, by offering them the possibility thanks to tailor-made advice to bring their dreams to life through memorial writing. According to a method and a schedule adapted to different people. <br/>

           
         Concerned about how it is looked at and taking into account technological advances,
outside the world of books, it offers services in various fields, in particular that of computing. 
        </p>
    </div>   

   </div>

  <div id="contact"></div>
<div class="mb-3" style="margin:auto;" >
    <h5 style="margin-top:30px;font-style: oblique;font-weight: bold;">
Want to join us?</h5>
<form method="POST" onsubmit="return sendAbout();">
<div >
  <label for="ControlInput1" class="form-label" style="margin-top:10px ;">Email address</label>
  <input type="email" class="form-control" id="email" placeholder="name@example.com"
  style="width:500px" required="required" name="email">
</div>
<div class="mb-3">
  <label for="ControlTextarea1" class="form-label" style="margin-top:10px ;">Your  Message</label>
  <textarea class="form-control" id="message" rows="3" placeholder="Tell us why?"
  style="width:500px" required="required" name="message"></textarea>
</div>
<div>
     <button class="btn btn-primary" type="submit"  >Submit</button>
</div>
</form>

</div>


	<footer class="bg-dark   tf-footer" style="width:100%">
      <div class="container text-light">
        <div class="row">
          <div class="col-md-6 col-sm-12">&copy; Gestionnaires.</div>
           <div class="col-md-6 col-sm-12">
                <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/ZHeriol" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x" ></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/heriol-valdo-zeufack-fiemo-85bba3258?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BdigBKflBTteJMQ3ObI3a9A%3D%3D" title="Linkedin" target="_blank"><i class="fab fa-linkedin fa-2x" ></i><span class="menu-title sr-only">Linkedin</span></a>
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
    <script src="js/script.js" type="text/javascript"></script>
  <script src="css/js/bootstrap.bundle.min.js?ver=1.2.0"></script>
     <script src="css/js/bootstrap.bundle.js?ver=1.2.0"></script>
       <script src="css/js/bootstrap.js?ver=1.2.0"></script>
         <script src="css/js/bootstrap.min.js?ver=1.2.0"></script>
           <script src="css/js/bootstrap.esm.js?ver=1.2.0"></script>
             <script src="css/js/bootstrap.esm.min.js?ver=1.2.0"></script>
    
   
</body>
</html>