 $(document).ready(function() {
    
    $('.uploadImage input[type=radio]').click( function() {
        
        if( $(this).val() == 1 ) {
            $('.selectImage').hide();   
            $('.uploadFile').show();               
        } else {
            $('.selectImage').show();   
            $('.uploadFile').hide();                           
        }
    });
    
 });