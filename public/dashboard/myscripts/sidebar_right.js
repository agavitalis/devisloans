$(document).ready(function(){

    $('.calculate').click(function () {
       
       var series_fee = $('#series_fee').val();
       var series_fee = series_fee.split("#")
       
       var maintenance_fee_percent = Number(series_fee['0']);
       var total_interest = Number(series_fee['1']) / 100;

       var amount = Number($('#amount').val());

       var total = amount + (amount * total_interest)
       var maintenance_charge = total * ( maintenance_fee_percent / 100);
       var take_home_pay = total - maintenance_charge;

        $('#amount_total').text("NGN"+ take_home_pay.toFixed(4));
        $('#mainten_total').text(maintenance_fee_percent + "%  maintenance charge included");
        $('#result').removeClass('hidden');
        
    })

    
})
