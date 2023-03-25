

//ecoute de la soummission
/*
document.getElementById('envoyer').addEventListener('click',function(e){
    e.preventDefault();
    if(document.getElementById('name').value!="" &&  document.getElementById('email').value!="" && document.getElementById('message').value!=""){
     
     formulaire();

     
   
     //e.stopPropagation();

   }else{
    document.getElementById('name').style.size='50%';
    document.getElementById('res').innerHTML="<div><h3>heriol</h3></div>";
     //window.alert('veuillez remplir tout le fourmulaire');
   }

});


function formulaire(){
$('#formulaire').submit(function(e){

  e.preventDefault(); //empêcher une action par défaut
  var form_url = $(this).attr("action"); //récupérer l'URL du formulaire
  var form_method = $(this).attr("method"); //récupérer la méthode GET/POST du formulaire
  var form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
  
  $.ajax({
    url : form_url,
    type: form_method,
    data : form_data
  }).done(function(response){ 
       $("#res").html(response);
  });
});

}
 
   
  */


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
