



<br>
<br>
<br>


<div id="container" style="min-width: 700px; height: 600px; max-width: 1000px; margin: 0 auto"></div>

<script>



Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },

    
    
    series: [ {
            name: 'Browsers',
            colorByPoint: true,
            data: [ 
            <?php  foreach($fauli1_res as $row){?>
            {
                name: '<?php echo $row->ca; ?>',
                y: <?php echo $row->per ?>,
                		 sliced: true,
                	      selected: true},

             <?php } ?>   	      
         ]       	      

    }]
   
});
    </script>
    
    
 
