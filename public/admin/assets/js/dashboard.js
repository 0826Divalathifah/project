(function ($) {
  'use strict';
  $(function () {
    // Fungsi untuk menginisialisasi chart
    function initializeChart(canvasId, chartLabel, dataLabels, dataValues) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return; // Jika elemen tidak ditemukan, hentikan eksekusi

        const ctx = canvas.getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: dataLabels,
                datasets: [
                    {
                        label: chartLabel,
                        data: dataValues,
                        backgroundColor: 'rgba(90, 79, 207, 0.5)',
                        borderColor: 'rgba(90, 79, 207, 1)',
                        borderWidth: 1,
                        tension: 0.4,
                    },
                ],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1, // Menampilkan angka bulat
                            callback: function (value) {
                                return Number.isInteger(value) ? value : ''; // Tampilkan angka bulat
                            },
                        },
                    },
                },
            },
        });
    }

    // Fungsi untuk membaca data dari elemen
    function getChartData(canvasId) {
        const canvas = $(`#${canvasId}`);
        const dataLabels = canvas.attr('data-labels')?.split(',') || [];
        const dataValues = canvas.attr('data-data')?.split(',').map(Number) || [];
        return { dataLabels, dataValues };
    }

    // Inisialisasi chart untuk statistik utama (Seluruh Website Desa Mandiri Budaya)
    const totalData = getChartData('totalChart');
    initializeChart('totalChart', 'Jumlah Kunjungan Website Desa Mandiri Budaya', totalData.dataLabels, totalData.dataValues);

    // Inisialisasi chart untuk Desa Budaya
    const budayaData = getChartData('desaBudayaChart');
    initializeChart('desaBudayaChart', 'Jumlah Kunjungan Desa Budaya', budayaData.dataLabels, budayaData.dataValues);

    // Inisialisasi chart untuk Desa Wisata
    const wisataData = getChartData('desaWisataChart');
    initializeChart('desaWisataChart', 'Jumlah Kunjungan Desa Wisata', wisataData.dataLabels, wisataData.dataValues);

    // Inisialisasi chart untuk Desa Preneur
    const preneurData = getChartData('desaPreneurChart');
    initializeChart('desaPreneurChart', 'Jumlah Kunjungan Desa Preneur', preneurData.dataLabels, preneurData.dataValues);

    // Inisialisasi chart untuk Desa Prima
    const primaData = getChartData('desaPrimaChart');
    initializeChart('desaPrimaChart', 'Jumlah Kunjungan Desa Prima', primaData.dataLabels, primaData.dataValues);

    // Event listener untuk filter perubahan
    $('#filter').change(function () {
        const selectedFilter = $(this).val(); // Ambil nilai filter
        window.location.href = `?filter=${selectedFilter}`; // Navigasi berdasarkan filter
    });





    // Agenda Chart Batang
    if ($("#sales-chart").length) {
        const agendaLabels = JSON.parse(document.getElementById('sales-chart').getAttribute('data-agenda-labels'));
        const agendaTotals = JSON.parse(document.getElementById('sales-chart').getAttribute('data-agenda-totals'));
    
        new Chart(document.getElementById('sales-chart'), {
            type: 'bar',
            data: {
                labels: agendaLabels,
                datasets: [{
                    label: 'Jumlah Agenda',
                    data: agendaTotals,
                    backgroundColor: '#4747A1',
                    borderRadius: 5,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { color: "#6C7383" },
                    },
                    y: {
                        grid: { display: true },
                        ticks: { stepSize: 1, color: "#6C7383" },
                    }
                },
                plugins: {
                    legend: { display: true }
                }
            }
        });
    }    
      

    if ($("#north-america-chart").length) { 
      const doughnutChartCanvas = document.getElementById('north-america-chart');

      new Chart(doughnutChartCanvas, {
          type: 'doughnut',
          data: northAmericaChartData,
          options: {
              cutout: 70,
              responsive: true,
              maintainAspectRatio: true,
              plugins: {
                  legend: { display: false }
              }
          },
          plugins: [{
              afterDatasetUpdate: function (chart, args, options) {
                  const chartId = chart.canvas.id;
                  const legendId = `${chartId}-legend`;
                  const legendContainer = document.getElementById(legendId);

                  // Kosongkan legend jika sudah ada
                  legendContainer.innerHTML = '';

                  // Buat legend custom
                  chart.data.labels.forEach((label, index) => {
                      const legendItem = document.createElement('li');
                      legendItem.style.display = 'inline-block'; // Set legend item agar horizontal
                      legendItem.style.width = '50%'; // Set ukuran 50% agar 2 legend per baris
                      legendItem.style.marginBottom = '10px'; // Jarak antar baris
                      legendItem.style.fontSize = '12px'; // Ukuran font lebih kecil
                      legendItem.style.textAlign = 'center'; // Memastikan teks berada di tengah
                      legendItem.style.margin = '0 auto'; // Agar item berada di tengah kontainer

                      // Membuat item legend dengan lingkaran yang lebih kecil
                      legendItem.innerHTML = `
                          <span style="margin-right: 10px; display: inline-block; width: 15px; height: 15px; background-color: ${chart.data.datasets[0].backgroundColor[index]}; border-radius: 50%;"></span>
                          ${label}
                      `;

                      legendContainer.appendChild(legendItem);
                  });
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
