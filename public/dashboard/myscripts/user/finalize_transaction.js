$(document).ready(function(){

    $('.make-payments').click(function () {

        $('.pop-modal').addClass('hidden');
        $('.cancel-modal').addClass('hidden');
        $('.pay-modal').removeClass('hidden');
        
        //then show the modal
       $('#dialogModal').modal('show');
    
    })

    $('.upload-pop').click(function () {

         //grab the id
         let id = $(this).data("id");
         $('#pop_id').val(id);

        $('.pay-modal').addClass('hidden');
        $('.cancel-modal').addClass('hidden');
        $('.pop-modal').removeClass('hidden');
        
        //then show the modal
       $('#dialogModal').modal('show');
    
    })

    $('.cancel-series').click(function () {

        //grab the id
        let id = $(this).data("id");
        $('#delete_id').val(id);


        $('.pay-modal').addClass('hidden');
        $('.pop-modal').addClass('hidden');
        $('.cancel-modal').removeClass('hidden');
        
        //then show the modal
        $('#dialogModal').modal('show');
    
    })



})
