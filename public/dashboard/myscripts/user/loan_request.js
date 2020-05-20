$(document).ready( function() {
    $('#dataTableM').dataTable({
        "fnDrawCallback": function( oSettings ) {

            $('.view_pop').click(function () {
                let image_source = $(this).data("image");
                $('#pop_img').attr('src', image_source)
                
                $('.confirm_payment-modal').addClass('hidden');
                $('.pop-modal').removeClass('hidden');
                
                //then show the modal
                $('#dialogModal').modal('show');
            
            })
        
           
        
            $('.confirm_payment').click(function () {
        
                $('#payment_id').val($(this).data("id"));
                $('.pop-modal').addClass('hidden');
                $('.confirm_payment-modal').removeClass('hidden');
                
                //then show the modal
                $('#dialogModal').modal('show');
            
            })
        
                    

        }
    });
});
