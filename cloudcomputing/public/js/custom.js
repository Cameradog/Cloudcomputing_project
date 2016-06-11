'use strict';

function drawTopChart(topTenArray){
  var ctx = $("#topChart");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [topTenArray[0], topTenArray[2], topTenArray[4], topTenArray[6], topTenArray[8], topTenArray[10], topTenArray[12], topTenArray[14], topTenArray[16], topTenArray[18]],
        datasets: [{
            label: '# Total Word Count',
            data: [topTenArray[1], topTenArray[3], topTenArray[5], topTenArray[7], topTenArray[9], topTenArray[11], topTenArray[13], topTenArray[15], topTenArray[17], topTenArray[19]],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(220, 120, 64, 0.2)',
                'rgba(25, 159, 180, 0.2)',
                'rgba(45, 96, 77, 0.2)',
                'rgba(230, 219, 198, 0.2)',
                'rgba(78, 144, 152, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(220, 120, 64, 1)',
                'rgba(25, 159, 180, 1)',
                'rgba(45, 96, 77, 1)',
                'rgba(230, 219, 198, 1)',
                'rgba(78, 144, 152, 1)',
            ],
            borderWidth: 1
        }]
    },
    options:{
      scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
      },
      responsive: true,
    },
  });
}

function drawChart(id, all, aa, ar, as, be, ge, sc, ss){
  var ctx = $("#myChart"+id);
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Anthropology & Archaeology", "Art", "Astronomy", "Biology & Ecology", "Geology & EarthScience", "Science", "SocialScience"],
        datasets: [{
            data: [aa, ar, as, be, ge, sc, ss],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(220, 120, 64, 0.2)',
                'rgba(25, 159, 180, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(220, 120, 64, 1)',
                'rgba(25, 159, 180, 1)',
            ],
            borderWidth: 1
        }]
    },
    options:{

    },
  });
}

window.onload = function() {
  // chart of top 10
  var topTenArray = [];
  for (var i = 1; i <= 10; i++) {
    var topChartData = $('#topChartData'+i);
    var word = topChartData.attr('data-word');
    var all = topChartData.val();
    topTenArray.push(word, all);
  }
  drawTopChart(topTenArray);

  // chart of each data
  for (var i = 1; i <= 10; i++) {
    var chartData = $('#chartData'+i);
    var id = chartData.attr('data-id');
    var word = chartData.attr('data-word');
    var all = chartData.attr('data-all');
    var aa = chartData.attr('data-aa');
    var ar = chartData.attr('data-ar');
    var as = chartData.attr('data-as');
    var be = chartData.attr('data-be');
    var ge = chartData.attr('data-ge');
    var sc = chartData.attr('data-sc');
    var ss = chartData.attr('data-ss');
    $('#wordChartLabel'+id).html('Word: '+'"'+word+'"');
    drawChart(id, all, aa, ar, as, be, ge, sc, ss);
  }
};
