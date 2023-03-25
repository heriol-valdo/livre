<?php session_start(); 

 
?>


<!Doctype html>

<html lang="en-US">
	
<head>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      
  

   <link href="css/font-awesome/css/all.css" rel="stylesheet">
    <link href="css/font-awesome/materiel/materielindigo.min.css?ver=1.3.0" rel="stylesheet">
   <link href="css/toastr/toastr.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
   <link href="css/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

   
	<title>Authentification</title>
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


    <div class="cover shadow-lg bg-white" style="margin-top:10%; height:300px;width: 350px; margin-left:40%;">
      
     
         <form onsubmit="return sendData3();" method="POST">
          <div class="row">
             <div class="col-6">
                 <h1 style="margin-left: 80px;margin-top:20px;" translate="no">Connexion</h1>
            </div>
          </div>

           <div class="row">
             <div class="col-6" style="margin-left:45px;margin-top: 20px; width:300px;height: 60px;">
              <input class="form-control" type="email" id="email" name="email" placeholder="Your Email" rows="6" required>
            </div>
          </div>
            
         <div class="row">
           
            <div class="col-6" style="margin-left:45px;margin-top: 20px; width:300px;height: 60px;">
              <input class="form-control" type="password" id="mdp" name="mdp" placeholder="Your password" required>
            </div>
          </div>
          
          <div class="row">
          <button class="btn btn-primary" style=" width:200px;margin-bottom: 20px;margin-top: 30px; margin-left:80px;" type="submit">Send</button>
       </form>

      
     


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