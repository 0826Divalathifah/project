(function($) {
  'use strict';
  $(function() {
    const desaChartConfigs = {
      budaya: {
        elementId: "budaya-chart",
        color: "#4747A1",
        data: dataDesa.budaya, // Data untuk Desa Budaya
      },
      wisata: {
        elementId: "wisata-chart",
        color: "#1E88E5",
        data: dataDesa.wisata, // Data untuk Desa Wisata
      },
      preneur: {
        elementId: "preneur-chart",
        color: "#43A047",
        data: dataDesa.preneur, // Data untuk Desa Preneur
      },
      prima: {
        elementId: "prima-chart",
        color: "#FF5722",
        data: dataDesa.prima, // Data untuk Desa Prima
      },
      kalurahan: {
        elementId: "kalurahan-chart",
        color: "#FFC107",
        data: dataDesa.kalurahan, // Data untuk Desa Kalurahan
      }
    };

    // Render Chart
    function renderChart(config) {
      const ctx = document.getElementById(config.elementId);
      if (ctx) {
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: config.data.date,
            datasets: [{
              data: config.data.total,
              borderColor: config.color,
              borderWidth: 2,
              fill: false,
              label: "Jumlah Kunjungan",
              pointRadius: 4,
              pointBackgroundColor: config.color,
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
              x: {
                grid: { display: false },
                ticks: { color: "#6C7383", autoSkip: false },
              },
              y: {
                grid: { display: true },
                ticks: { color: "#6C7383", beginAtZero: true },
              }
            },
            plugins: {
              legend: {
                display: true,
                labels: { color: 'rgb(75, 192, 192)' },
              }
            }
          },
        });
      }
    }

    // Loop untuk setiap desa chart
    Object.keys(desaChartConfigs).forEach(function(desaKey) {
      renderChart(desaChartConfigs[desaKey]);
    });

    // Event Listener untuk Filter
    const periodFilter = document.getElementById('filter-period');
    if (periodFilter) {
      periodFilter.addEventListener('change', function() {
        const selectedPeriod = this.value;
        const currentURL = new URL(window.location.href);
        currentURL.searchParams.set('period', selectedPeriod);
        window.location.href = currentURL.toString();
      });
    }
 

// Chart Agenda Per Bulan (Menyesuaikan dengan format kode yang ada)
if ($("#sales-chart").length) {
  const ctx = document.getElementById('sales-chart');
  new Chart(ctx, {
      type: 'bar',
      data: {
          labels: agendaLabels, // Menggunakan variabel dari Blade
          datasets: [{
              label: 'Jumlah Agenda',
              data: agendaData, // Menggunakan variabel dari Blade
              backgroundColor: '#4747A1', // Mengubah warna batang menjadi kuning
              borderRadius: 5,
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: true,
          scales: {
              x: {
                  border: {
                      display: false
                  },
                  grid: {
                      display: false,
                      drawTicks: true,
                      color: "rgba(0, 0, 0, 0)",
                  },
                  ticks: {
                      display: true,
                      color: "#6C7383", // Warna teks sumbu x tetap
                  },
              },
              y: {
                  border: {
                      display: false
                  },
                  grid: {
                      display: true,
                  },
                  ticks: {
                      color: "#6C7383", // Warna teks sumbu y tetap
                      min: 1, // Memastikan dimulai dari 1
                      stepSize: 1, // Sumbu y hanya angka bulat
                      maxTicksLimit: 20,
                      callback: function (value) {
                          return value; // Menampilkan nilai tanpa simbol tambahan
                      }
                  },
              }
          },
          plugins: {
              legend: {
                  display: true, // Menampilkan label legenda
                  labels: {
                      color: '#6C7383' // Warna teks label legenda tetap
                  }
              }
          }
      }
  });
}

    if ($("#north-america-chart").length) { 
      const doughnutChartCanvas = document.getElementById('north-america-chart');
      new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: {
          labels: ["Offline sales", "Online sales", "Returns"],
          datasets: [{
              data: [100, 50, 50],
              backgroundColor: [
                 "#4B49AC","#FFC100", "#248AFD",
              ],
              borderColor: "rgba(0,0,0,0)"
          }]
        },
        options: {
          cutout: 70,
          animationEasing: "easeOutBounce",
          animateRotate: true,
          animateScale: false,
          responsive: true,
          maintainAspectRatio: true,
          showScale: false,
          legend: false,
          plugins: {
            legend: {
                display: false,
            }
          }
        },
        plugins: [{
          afterDatasetUpdate: function (chart, args, options) {
              const chartId = chart.canvas.id;
              var i;
              const legendId = `${chartId}-legend`;
              const ul = document.createElement('ul');
              for(i=0;i<chart.data.datasets[0].data.length; i++) {
                  ul.innerHTML += `
                  <li>
                    <span style="background-color: ${chart.data.datasets[0].backgroundColor[i]}"></span>
                    ${chart.data.labels[i]}
                  </li>
                `;
              }
              return document.getElementById(legendId).appendChild(ul);
            }
        }]
      });
    }
    if ($("#south-america-chart").length) { 
      const doughnutChartCanvas = document.getElementById('south-america-chart');
      new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: {
          labels: ["Offline sales", "Online sales", "Returns"],
          datasets: [{
              data: [100, 50, 50],
              backgroundColor: [
                 "#4B49AC","#FFC100", "#248AFD",
              ],
              borderColor: "rgba(0,0,0,0)"
          }]
        },
        options: {
          cutout: 70,
          animationEasing: "easeOutBounce",
          animateRotate: true,
          animateScale: false,
          responsive: true,
          maintainAspectRatio: true,
          showScale: false,
          legend: false,
          plugins: {
            legend: {
                display: false,
            }
          }
        },
        plugins: [{
          afterDatasetUpdate: function (chart, args, options) {
              const chartId = chart.canvas.id;
              var i;
              const legendId = `${chartId}-legend`;
              const ul = document.createElement('ul');
              for(i=0;i<chart.data.datasets[0].data.length; i++) {
                  ul.innerHTML += `
                  <li>
                    <span style="background-color: ${chart.data.datasets[0].backgroundColor[i]}"></span>
                    ${chart.data.labels[i]}
                  </li>
                `;
              }
              return document.getElementById(legendId).appendChild(ul);
            }
        }]
      });
    }

    if ($.cookie('skydash-pro-banner')!="true") {
      document.querySelector('#proBanner').classList.add('d-flex');
      document.querySelector('.navbar').classList.remove('fixed-top');
    }
    else {
      document.querySelector('#proBanner').classList.add('d-none');
      document.querySelector('.navbar').classList.add('fixed-top');
    }
    
    if ($( ".navbar" ).hasClass( "fixed-top" )) {
      document.querySelector('.page-body-wrapper').classList.remove('pt-0');
      document.querySelector('.navbar').classList.remove('pt-5');
    }
    else {
      document.querySelector('.page-body-wrapper').classList.add('pt-0');
      document.querySelector('.navbar').classList.add('pt-5');
      document.querySelector('.navbar').classList.add('mt-3');
      
    }
    document.querySelector('#bannerClose').addEventListener('click',function() {
      document.querySelector('#proBanner').classList.add('d-none');
      document.querySelector('#proBanner').classList.remove('d-flex');
      document.querySelector('.navbar').classList.remove('pt-5');
      document.querySelector('.navbar').classList.add('fixed-top');
      document.querySelector('.page-body-wrapper').classList.add('pt-5');
      document.querySelector('.navbar').classList.remove('mt-3');
      var date = new Date();
      date.setTime(date.getTime() + 24 * 60 * 60 * 1000); 
      $.cookie('skydash-pro-banner', "true", { expires: date });
    });

    function format ( d ) {
      // `d` is the original data object for the row
      return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">'+
          '<tr class="expanded-row">'+
              '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="me-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="me-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="me-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="me-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="me-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="me-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="me-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="me-2 d-flex"> <img src="../assets/images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="me-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="me-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
          '</tr>'+
      '</table>';
  }
    var table = $('#example').DataTable( {
      "ajax": "../assets/js/data.txt",
      "columns": [
          { "data": "Quote" },
          { "data": "Product" },
          { "data": "Business" },
          { "data": "Policy" }, 
          { "data": "Premium" }, 
          { "data": "Status" }, 
          { "data": "Updated" }, 
          {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
          }
      ],
      "order": [[1, 'asc']],
      "paging":   false,
      "ordering": true,
      "info":     false,
      "filter": false,
      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    } );
    $('#example tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );
      if ( row.child.isShown() ) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
      }
      else {
          // Open this row
          row.child( format(row.data()) ).show();
          tr.addClass('shown');
      }
    });
  });
})(jQuery);
