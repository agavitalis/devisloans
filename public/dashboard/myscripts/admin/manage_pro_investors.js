

$(document).ready(function () {
    $('#dataTableM').dataTable({
        "fnDrawCallback": function (oSettings) {

            $('.match_to_investor').click(function () {

                let pro_investor_id = $(this).data("id");
                $('#lender_id').val(pro_investor_id)

                $.ajax({
                    type: 'post',
                    url: '/pro_investor_details',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'pro_investor_id': pro_investor_id,
                    },
                    success: function (response) {
                        console.log(response)
                        $('#l_plan').val(response.investor.series_name)
                        $('#l_amount').val(response.investor.amount)
                        $('#l_email').val(response.investor.email)
                        $('#l_amount_matched').val(response.amount_matched)
                        

                        $('.borrower').empty();
                        $('.borrower').append("<option selected disabled> Select Borrower to match</option>");
                        response.requests.forEach(element => {
                            $('.borrower').append("<option class='select_options'  data-id='" + element.id + "' value='" + element.id + "'>" + element.email + "  (Amount:" + element.withdrawable_bal + ")</option>");
                        });
                    }
                })

                //then show the modal
                $('#dialogModal').modal('show');

            })




            // This will take care of the make
            $('.borrower').change(function () {

                let borrower_id = $(this).val();

                $.ajax({
                    type: 'post',
                    url: '/investor_match_details',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'borrower_id': borrower_id,
                    },
                    success: function (data) {
                        $('#total_matched').text(data.amount_matched)
                        //console.log(data)  
                    },
                    error: function (data) {
                        console.log(data)
                    }

                })

            })

        }
    });
});
