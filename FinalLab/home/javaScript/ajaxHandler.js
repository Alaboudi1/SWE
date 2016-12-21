

function checkUser(user){
  if (!user) return;
  var request =$.ajax(
    {
     method: 'GET',
     url: '../php/checkExistingUser.php',
     data: {usercheck:user}
   }
  );
  
  request.done(function (message){
    var used = JSON.parse(message);
    if(used){
      $('.used').show();
      $('.notUsed').hide();
    }
    else{
     $('.notUsed').show();
     $('.used').hide();
    
    }
  })
}
   