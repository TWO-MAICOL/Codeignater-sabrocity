   
     
// Get info ingredients
    $.get("index.php/products/getCategory", (response)=>{
        response = JSON.parse(response);
        response.forEach(category => {
            $(" .category").append('<option value="'+category.id+'">'+category.categoria+'</option>');
            
        });
    }); 
// Get info ingredients
$.get("index.php/products/getIngredients", (response)=>{
    response = JSON.parse(response);
    response.forEach(ingredient => {
        $(" .ingredients").append('<option value="'+ingredient.id+'">'+ingredient.ingredientes+'</option>');
        
    });
}); 



// save a product 
$('.save').on('click', (e) => {
    e.preventDefault();     

    if ( $('.name').val() == ""||  $('.ingredients').val() == "" ||  $('.imageProduct').val() == "" ||  $('.category').val() == "" || $('.price').val()== "") {
        
        $(".required").css("color","red");
        $('input[type=text]').css("border-color","red");
        $('select').css("border-color","red"); 

        setTimeout(() => {
            $(".required").removeAttr("style");
            $('input[type=text]').removeAttr("style");
            $('select').removeAttr("style"); 
        }, 2000);
         
    } else {
        var form = document.getElementById('formSaveProduct')
        var url = "index.php/products/insertProducts";
        formData(form,url);
        
                 
    }    
}); 































//  // A $( document ).ready() block.
// $( document ).ready(function() {
   

//     // swal({
//     //     title:"Logo",
//     //     text: "borrado",
//     //     type: "success"
//     //     });
//     setTimeout(() => {
           
//         alert('hole');
//       }, 3000);
// }); 
 