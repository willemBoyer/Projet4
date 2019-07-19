//initialisation des variables
var i = 0;
var adminRegButton = $("#adminCo");
var adminRegForm = $("#formCo");
adminRegForm.fadeOut();

//Connexion au backoffice adminsitrateur
if(i == 0) {
  adminRegButton.on('click', function () {
    adminRegButton.fadeOut();
    adminRegForm.fadeIn();
  });
}
