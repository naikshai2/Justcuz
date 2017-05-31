
(function() {

    function getDataSet() { 
        var output = {};
        var loanAmount = output.loanAmount = parseFloat( $('#loanAmount').val() );
        var interestRate = output.interestRate = parseFloat( $('#interestRate').val() );
        var paymentsPerYear = output.paymentsPerYear = parseInt( $('#paymentsPerYear').val() );
        var years = output.years = parseInt( $('#years').val() );
        var numberOfPayments = output.numberOfPayments = paymentsPerYear * years;

        var payment = output.payment = pmt(interestRate/100/paymentsPerYear, numberOfPayments, -loanAmount);

        output.schedule = computeSchedule( loanAmount,
                                           interestRate,
                                           paymentsPerYear,
                                           years,
                                           payment );
        return output;
    }


    function reloadTable(ds) {
        // map the schedule to 2 digits after decimal point.
        var schedule = ds.schedule.map( function(n) { 
            return [n[0], n[1].toFixed(2), n[2].toFixed(2), n[3].toFixed(2)];
        });

        $('#schedule').empty();
        $('#schedule').html( '<table cellpadding="23" cellspacing="12" border="1" class="display table" id="schedule_table"></table>' );
        $('#schedule_table').dataTable( {
            "data": schedule,
            "searching": false,
            "columns": [
                { "title": "Period" },
                { "title": "Principle" },
                { "title": "Interest" },
                { "title": "Remaining" }
            ],
            "search": false,
            "paging":   false,
            "ordering": false,
            "info":     false
        } );   
    }



    function reload() {
        var ds = getDataSet();

        $('#paymentAmount').text('$' + ds.payment.toFixed(2));
        reloadTable(ds);
drawData(ds);
    }


    $(document).on('keyup', '.user-input', reload);

    $(document).ready(function() {
        reload();
    });
function pmt(rate,nper,pv) {
    var pvif, pmt;

    pvif = Math.pow( 1 + rate, nper);
    pmt = rate / (pvif - 1) * -(pv * pvif);   

    return pmt;
};
function computeSchedule(loan_amount, interest_rate, payments_per_year, years, payment) {
    var schedule = [];
    var remaining = loan_amount;
    var number_of_payments = payments_per_year * years;

    for (var i=0; i<=number_of_payments; i++) {
        var interest = remaining * (interest_rate/100/payments_per_year);
        var principle = (payment-interest);
        var row = [i, principle>0?(principle<payment?principle:payment):0, interest>0?interest:0, remaining>0?remaining:0];
        schedule.push(row);
        remaining -= principle;
    }

    return schedule;
}
 google.load("visualization", "1", {packages:["corechart"]});
 function drawData(ds){
var t=0;
 for (var count = 0; count < ds.numberOfPayments; count++) {
            
            var p = ds.schedule[count][2];
             t += p;
           
            
        }
    var dataArray =[['Task', 'Hours per Day']];
    var arr1=['Principle','Total Interest'];
    var arr2=[ds.loanAmount,t]; 

    for(var n=0; n < arr2.length; n++) { 
    dataArray.push([arr1[n], parseInt(arr2[n])]);
    }
    var data = new google.visualization.arrayToDataTable(dataArray);
    var options = {
      title: 'Principal/Interest Graph',
colors: ['#f99d1b', '#17323f'],
backgroundColor:'#ffffff',
fontSize:14,
is3D:true,
legend:{position: 'bottom' },
titleTextStyle:{color: 'black',fontSize: 30}
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
google.setOnLoadCallback(drawData);
})();