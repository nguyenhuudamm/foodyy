var Script = function () {

// easy pie chart
if($('.percentage').length != 0){
    $('.percentage').easyPieChart({
        animate: 1000,
        size: 135,
        barColor:'#ff6c60'
    });
}
if($('.percentage-light').length != 0){
    $('.percentage-light').easyPieChart({
        barColor: function(percent) {
            percent /= 100;
            return "rgb(" + Math.round(255 * (1-percent)) + ", " + Math.round(255 * percent) + ", 0)";
        },
        trackColor: '#666',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 15,
        animate: 1000
    });
}
if($('.update-easy-pie-chart').length != 0){
   $('.update-easy-pie-chart').click(function(){
        $('.easy-pie-chart .percentage').each(function() {
            var newValue = Math.floor(100*Math.random());
            $(this).data('easyPieChart').update(newValue);
            $('span', this).text(newValue);
        });
    });
}
if($('.updateEasyPieChart').length != 0){
   $('.updateEasyPieChart').on('click', function(e) {
        e.preventDefault();
        $('.percentage, .percentage-light').each(function() {
            var newValue = Math.round(100*Math.random());
            $(this).data('easyPieChart').update(newValue);
            $('span', this).text(newValue);
        });
    });
}

    

   

}();