var eventBranchColors = [
    '#696CFF',
    '#8592A3',
    '#71DD37',
    '#FF3E1D',
    '#FFAB00',
    '#03C3EC',
    '#233446',
    '#00E396',
    '#FEB019',
    '#008FFB',
    '#FF4560',
    '#775DD0',
    '#546E7A',
    '#26a69a',
    '#D10CE8'
];


var eventBranchOptions = {
    series: [{
        data: [18, 23, 63, 31, 28, 20, 34, 75, 27, 17, 25, 19],
        name : ['Jumlah Pendaftar']
    }],
    chart: {
        height: 400,
        type: 'bar',
        events: {
            click: function (chart, w, e) {
                // console.log(chart, w, e)
            }
        }
    },
    colors: eventBranchColors,
    plotOptions: {
        bar: {
            columnWidth: '75%',
            distributed: true,
        }
    },
    dataLabels: {
        enabled: true
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: ['Komik Strip',
            'Melukis',
            ['Membaca Puisi', '(PA/PI)'],
            'Monolog',
            'Penulisan Cerpen',
            'Penulisan Lakon',
            'Penulisan Puisi',
            ['Pop', '(PA/PI)'],
            'Poster',
            ['Seriosa', '(PA/PI)'],
            'Tari Garapan',
            'Vocal Group'],
        labels: {
            rotate: -90,
            minHeight: 110,
            maxHeight: 150,
            style: {
                colors: eventBranchColors,
                fontSize: '12px',
            }
        }
    }
};

var eventBranchChart = new ApexCharts(document.querySelector('#eventBranchChart'), eventBranchOptions); 
eventBranchChart.render();