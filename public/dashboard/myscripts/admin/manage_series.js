$(document).ready(function(){

    $('.manage-series').click(function () {

        var id = $(this).data("id");
        $('#series_id').val(id);
        //get the details of the clicked guy
        $.ajax({
            type: 'post',
            url: '/manage_series',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "inquary",
                'id': id
            },
            success: function(response) {
               //console.log(response)
                $('input[name=series_edit]').val(response.series_name)
                $('input[name=maintenance_fee_edit]').val(response.maintenance_fee)
                $('input[name=amount_edit]').val(response.amount)
                $('input[name=interest_edit]').val(response.total_interest)
                $('input[name=duration_edit]').val(response.duration)
                  
                $('#dialogModal').modal('show');

            }
           
        })
        
    
    })

    $('.delete-confirm').click(function () {
        
        //get the details of the clicked guy
        $.ajax({
            type: 'post',
            url: '/manage_series',
            data: {
                '_token': $('input[name=_token]').val(),
                'action': "delete",
                'id': $('#series_id').val()
            },
            success: function(response) {
                                            
                alert("Series successfully deleted")

            }
           
        })
        
    
    })

})
