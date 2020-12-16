window.onload = function () {

  //line1
  var ctxL1 = document.getElementById("lineChart1").getContext('2d');
  var myLineChart = new Chart(ctxL1, {
    type: 'line',
    data: {
      labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
      datasets: [{
        label: "Tempo Médio de Visita por Clente",
        data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 50, 12, 80],
        backgroundColor: [
          'rgba(200, 99, 132, .7)',
        ],
        borderColor: [
          'rgba(105, 0, 132, .2)',
        ],
        borderWidth: 2
      },
      {
        label: "Total de Visitas",
        data: [28, 48, 40, 19, 86, 27, 90, 100, 99, 89, 95, 80],
        backgroundColor: [
          'rgba(0, 10, 130, .7)',
        ],
        borderColor: [
          'rgba(0, 137, 132, .2)',
        ],
        borderWidth: 2
      }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    }
  });

  //line
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
      datasets: [{
        label: "Número de Vendas",
        data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 50, 12, 80],
        backgroundColor: [
          'rgba(105, 0, 132, .2)',
        ],
        borderColor: [
          'rgba(200, 99, 132, .7)',
        ],
        borderWidth: 2
      },
      {
        label: "Escolhido como Favorito",
        data: [28, 48, 40, 19, 86, 27, 90, 100, 99, 89, 95, 80],
        backgroundColor: [
          'rgba(0, 137, 132, .2)',
        ],
        borderColor: [
          'rgba(0, 10, 130, .7)',
        ],
        borderWidth: 2
      }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    }
  });


  //bar
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"],
      datasets: [{
        label: 'Utilizações por Idade',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  //bar2
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"],
      datasets: [{
        label: 'Utilizações por Idade',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

  var ctxB = document.getElementById("horizontalBar").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    "type": "horizontalBar",
    "data": {
      "labels": ["Feminino", "Masculino"],
      "datasets": [{
        "label": "Utilização por Género",
        "data": [22, 33, 55, 12, 86, 23, 14],
        "fill": false,
        "backgroundColor": ["rgba(255, 99, 132, 0.2)",
          'rgba(54, 162, 235, 0.2)'
        ],
        "borderColor": ["rgb(255, 99, 132)", 'rgba(54, 162, 235, 1)'
        ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });

}

$(document).ready(function () {
  $('#ativo').click(function (e) {
    e.preventDefault();
    $('.ativo').show();
    $('.previsto').hide();
    $('.expired').hide();
  });
  $('#previsto').click(function (e) {
    e.preventDefault();
    $('.previsto').show();
    $('.ativo').hide();
    $('.expired').hide();
  });
  $('#expired').click(function (e) {
    e.preventDefault();
    $('.expired').show();
    $('.previsto').hide();
    $('.ativo').hide();
  });
})