// ============== session ================
$('#form').on('submit', (e) => {
    e.preventDefault();

    $('.error-message').hide();      

    const data = {
        user: $('#user').val(),
        password: $('#password').val(),
    };
// ============= sen data =================
    if ( $('#user').val() && $('#password').val())  {
        $.post( "index.php/login/startSesion", data, ( response )=> {    
      
        if (response == 1 ) {                                
                window.location = 'home ';  
        }else{  
               $('.error-message').html("Contraseña o usuario incorrectos");
               $('.error-message').show();                
                setTimeout(() => {
                    $('.error-message').hide();   
                }, 2000);
            }
            
        }); 
    }else{
        $('.error-message').html("Campos vacios");
        $('.error-message').show();                
         setTimeout(() => {
             $('.error-message').hide();   
         }, 2000);

    }
}); 


 