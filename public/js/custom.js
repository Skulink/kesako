jQuery(document).ready(function(){

  var div_connexion = $('#id-connexion');

  $(div_connexion).hide();
  $("#connexion").click(function(){
    $(div_connexion).fadeToggle('fast');
  });


  setTimeout(function(){
    $('#msgIdConnexion').hide('fast');
  }, 3000);

  setTimeout(function(){
    $('#msgIdErreur1').hide('fast');
  }, 3000);

});
