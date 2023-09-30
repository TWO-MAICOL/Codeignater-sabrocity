$( document ).ready( ()=> {
     
    // ============== Get Data User ================
        dataUser();
    // ============== Close session ================
        closeSesion(); 


});

//  ====================== SEND FORMDATA =====================
var formData = (form,url) => {

    var formData = new FormData(form);
        $.ajax({
        type 		:"POST",
        url  		: url,
        data 		:formData,
        cache       : false,
        contentType : false,
        processData : false,
            success: (response) => {
                swal({
                    title: response,
                    type: "success"},(e)=>{
                    if(e){ $(form).trigger('reset'); };    
                });   
                
            }
        }); 
 
  }
// ============== Get Data User ================
var dataUser = ()=> {

    $.get("index.php/login/dataUser", (response)=>{
        response = JSON.parse(response);
        $('.changeName').text(response.name);
    }); 
        
}
// ============== Close session ================
var closeSesion = ()=> {

    $('#closeSesion').on('click', (e) => {
        e.preventDefault();        
        $.post( "index.php/login/closeSesion",  ( response )=> {       
            swal({
                title: response,
                type: "success"},(e)=>{
                if(e){ location.reload(true)};    
            });            
        });        
    
    });     
        
}
// ==================== POST  =====================
var sendPost = (url,data)=> {

    $.post(url,data,(response)=>{
        response = JSON.parse(response);
        console.log(response);
    }); 
        
}