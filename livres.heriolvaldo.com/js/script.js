




$('.navbar-nav>li').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

function sendData3()
{
  var mdp = document.getElementById("mdp").value;
  var email = document.getElementById("email").value;
  $.ajax({
    type: 'post',
    url: 'php/con.php',
    data: {
      mdp:mdp,
      email:email,
     
    },
    success: function (response) {
     
     if(response == ""){

         toastr.options.timeOut = 1500;
         toastr.error("vous allez etre rediriger vers la page correspondante", "success", {"iconClass": 'customer-success'});
        
        
     }else if(response != ""){
          toastr.options.timeOut = 1500;
          toastr.success("l'utilisateur n'existe pas", "Error", {"iconClass": 'customer-error'});
         
     }
      
    },
  });

  return false;
}

function sendData2()
{
  var mdp = document.getElementById("mdp").value;
  var email = document.getElementById("email").value;
  $.ajax({
    type: 'post',
    url: 'php/inscription.php',
    data: {
      mdp:mdp,
      email:email,
     
    },
    success: function (response) {
     
     if(response == ""){

         toastr.options.timeOut = 1500;
         toastr.error(response+"ok", "success", {"iconClass": 'customer-success'});
        
        
     }else if(response != ""){
          toastr.options.timeOut = 1500;
          toastr.success( response+"probleme", "error", {"iconClass": 'customer-error'});
         
     } 
      
    },
  });

  return false;
}

function sendData()
{
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
   var message = document.getElementById("message").value;

         

  $.ajax({
    type: 'post',
    url: 'php/formulaire.php',
    data: {
      name:name,
      email:email,
      message:message,
    },
    success: function (response) {
     
     if(response == ""){

         toastr.options.timeOut = 1500;
         toastr.error(response, "Error", {"iconClass": 'customer-error'});
          reset();
        
     }else if(response != ""){
        


          toastr.options.timeOut = 1500;
          toastr.success("une equipe reviendra vers vous  dans quelques instants.Merci pour votre confiance", "success", {"iconClass": 'customer-success'});
          reset();
     }
      
    

    },
  });


          //  toastr.options.timeOut = 1500; // 1.5s 
            //toastr.success('Success messages');
    




  return false;
}

function sendAbout()
{
 
   var email = document.getElementById("email").value;
   var message = document.getElementById("message").value;

         

  $.ajax({
    type: 'post',
    url: 'php/about.php',
    data: {
      email:email,
      message:message,
    },
    success: function (response) {
     
     if(response == ""){

         toastr.options.timeOut = 1500;
         toastr.error(response, "Error", {"iconClass": 'customer-error'});
          reset();
        
     }else if(response != ""){
        


          toastr.options.timeOut = 1500;
          toastr.success("une equipe reviendra vers vous  dans quelques instants.Merci pour votre confiance", "success", {"iconClass": 'customer-success'});
          resetAbout();
     }
      
    

    },
  });
  return false;
}



function resetAbout(){
 var email = document.getElementById("email").value="";
 var message = document.getElementById("message").value="";
}


function reset(){
 var email = document.getElementById("email").value="";
  var name = document.getElementById("name").value="";
  var message = document.getElementById("message").value="";
}
