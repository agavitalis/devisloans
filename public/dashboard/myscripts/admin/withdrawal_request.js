$(document).ready(function(){

    $('.mark-paid').click(function () {

        $('#complete_id').val($(this).data("id"));
        $('.cancel-modal').addClass('hidden');
        $('.complete-modal').removeClass('hidden');
        
        //then show the modal
        $('#dialogModal').modal('show');
    
    })

    $('.mark-delete').click(function () {

        $('#delete_id').val($(this).data("id"));
        $('.complete-modal').addClass('hidden');
        $('.cancel-modal').removeClass('hidden');
        
        //then show the modal
        $('#dialogModal').modal('show');
    
    })

})
