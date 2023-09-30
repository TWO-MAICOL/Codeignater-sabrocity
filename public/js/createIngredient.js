$( document ).ready( ()=> {
     
    // ============== Get Data User ================
        dataUser();
    // ============== Close session ================
        closeSesion();   
         
    
    
    
});



$('.saveIngredient').on('click', (e) => {
    e.preventDefault();  

    $('.repeater').repeater();       
         
    var data = $(".repeater").repeaterVal();
     
    console.log(data);
 

     var url = "index.php/products/insertIngredient";

    sendPost(url,data);   

}); 