$(document).ready(function(){

    $('.make-payments').click(function () {

        //grab the investor email
        let email = $(this).data("email");

         //check if he is even an investor
         $.ajax({
            type: 'post',
            url: '/get_investor_details',
            data: {
                '_token': $('input[name=_token]').val(),
                'email': email,
            },
            success: function(response) {
               
                console.log(response)
               $('#b_name').val(response.details.account_name);
               $('#l_bank').val(response.details.bank);
               $('#l_ac').val(response.details.account_number);
               $('#l_phone').val(response.details.phone);
               $('#l_email').val(response.details.email);


                $('.pop-modal').addClass('hidden');
                $('.cancel-modal').addClass('hidden');
                $('.pay-modal').removeClass('hidden');
                
                //then show the modal
               $('#dialogModal').modal('show');
            }
        })

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
