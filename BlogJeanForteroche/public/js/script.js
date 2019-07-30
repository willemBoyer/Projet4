//initialisation des variables
var i = 0;
var adminRegButton = $("#adminCo");
var adminRegForm = $("#formCo");
var commentButton = $("#toComment");
var commentForm = $("#formComment");
var stopComment = $("#stopComment");
adminRegForm.hide();
commentForm.hide();


//Connexion au backoffice adminsitrateur
adminRegButton.on('click', function () {

  adminRegForm.fadeIn();
  adminRegButton.fadeOut();
  console.log("heloo");
})

commentButton.on('click', function () {
  commentButton.fadeOut();
  commentForm.fadeIn();
  })

stopComment.on('click', function () {
  commentButton.fadeIn();
  commentForm.fadeOut();
})
