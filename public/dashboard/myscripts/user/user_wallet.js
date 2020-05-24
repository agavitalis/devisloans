$(document).ready(function() {

    $('.withdraw').click(function() {

        //check if he is even an investor
        $.ajax({
            type: 'post',
            url: '/user_wallet',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "inquary",
            },
            success: function(response) {
                if (response.message == 10) {

                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("Please complete your profile information. This will enable you make withdrawal")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 0) {

                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("You don't have any active transaction")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 1) {
                    console.log(response)
                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("You still have " + Math.abs(response.days) + " day(s): (" + Math.abs(response.hours) + " hours) (" + Math.abs(response.minutes) + " minutes) to withdraw your brokerage")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 2) {

                    $('.message-modal').addClass('hidden');
                    $('.options-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');
                } else {
                    //
                }


            }
        })

    })

    $('.proceed_withdraw').click(function() {

        let cashout_mode = $('#cashout_mode option:selected').val()
        let withdraw_by = $('#withdraw_by').val()


        //alert(value)
        //check if his days are over
        $.ajax({
            type: 'post',
            url: '/user_wallet',
            data: {
                '_token': $('input[name=_token]').val(),
                'cashout_mode': cashout_mode,
                'withdraw_by': withdraw_by,
                'action': "proceed"
            },
            success: function(response) {

                if (response.message == 1) {

                    $('.success-message').text("Your loan request is now being processed. Kindly exercise patience until you are matched. Follow us on media tell your friends about us")
                    $('.success-div').removeClass('hidden');

                }

            }
        })


    })

    $('.withdraw-bonus').click(function() {

        $('.options-modal').addClass('hidden');
        $('.message-modal').addClass('hidden');
        $('.withdrawal-message').text("You don't have any active transaction")
        $('.bonus-modal').removeClass('hidden');
        //then show the modal
        $('#dialogModal').modal('show');

    })

    $('.withdraw_by_referal').click(function() {

        //check if he is even an investor
        $.ajax({
            type: 'post',
            url: '/withdraw_by_referal',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "inquary",
            },
            success: function(response) {

                if (response.message == 10) {

                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("Please complete your profile information and picture. This will enable you make withdrawal")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 0) {

                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("You don't have any active transaction")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 1) {
                    console.log(response)
                    $('.options-modal').addClass('hidden');
                    $('.withdrawal-message').text("For each level, you need at least 3 paid referrals to withdraw before maturity")
                    $('.message-modal').removeClass('hidden');
                    //then show the modal
                    $('#dialogModal').modal('show');

                } else if (response.message == 2) {

                    $('.message-modal').addClass('hidden');
                    $('.options-modal').removeClass('hidden');
                    $('#withdraw_by').val('referral');

                    //then show the modal
                    $('#dialogModal').modal('show');
                } else {
                    //
                }


            }
        })

    })


});