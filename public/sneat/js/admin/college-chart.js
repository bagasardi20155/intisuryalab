var collegeColors = [

    '#008FFB',

    '#00E396',

    '#FEB019',

    '#FF4560',

    '#775DD0',

    '#546E7A',

    '#26a69a',

    '#D10CE8'

];




var collegeOptions = {

    series: [{

        data: [2, 1, 7, 8, 1, 3, 1, 2, 1, 13, 3, 3, 10, 2, 3, 5, 1, 1, 4, 8, 1, 2, 1, 9, 7, 2, 3, 2, 1, 1, 6, 16, 2, 1, 13, 15, 1, 1, 9, 4, 19, 12, 20, 6, 7, 5, 8, 3, 20, 9, 8, 16, 9, 5, 21, 14, 11, 16, 20, 5, 1, 20, 18, 3, 6, 13, 19, 10, 14, 3],

        name: ['Jumlah Pendaftar']

    }],

    chart: {

        height: 600,

        width: '2400',

        type: 'bar',

        events: {

            click: function (chart, w, e) {

                // console.log(chart, w, e)

            }

        }

    },

    colors: collegeColors,

    plotOptions: {

        bar: {

            columnWidth: '75%',

            distributed: true,

        }

    },

    dataLabels: {

        enabled: false

    },

    legend: {

        show: false

    },

    xaxis: {

        categories: ["Akademi Farmasi Nusaputera Semarang", "Akademi Kebidanan Panti Wilasa Semarang", "Akademi Keperawatan KESDAM IV Diponegoro", "Akademi Keperawatan Ngesti Waluyo Parakan", "Akademi Kesejahteraan Sosial Ibu Kartini", "Akademi Teknik Tirta Wiyata", "AKBID Muslimat Nahdlatul Ulama Kudus", "Institusi Stikes Serulingmas Cilacap", "Institut Agama Islam Negeri Purwokerto", "Institut Seni Indonesia Surakarta", "Institut Teknologi Telkom Purwokerto", "Politeknik Balekambang Jepara", "Politeknik Harapan Bersama", "Politeknik Manufaktur Ceper", "Politeknik Negeri Cilacap", "Politeknik Negeri Semarang", "Sekolah Tinggi Ilmu Ekonomi 'YPPI'", "Sekolah Tinggi Ilmu Ekonomi Semarang", "Sekolah Tinggi Ilmu Ekonomi Tamansiswa", "Sekolah Tinggi Ilmu Ekonomi Totalwin", "Sekolah Tinggi Ilmu Kesehatan Kendal", "Sekolah Tinggi Ilmu Kesehatan Nasional", "Sekolah Tinggi Teknik Wiworotomo", "STIKES Bhakti Mandala Husada Slawi", "STIKES Ibnu Sina Ajibarang", "STIKES Muhammadiyah Klaten", "STIKES Muhammadiyah Pekajangan", "STIKES Telogorejo Semarang", "STKIP Muhammadiyah Blora", "Universitas 17 Agustus 1945 Semarang", "Universitas Aisyiyah Surakarta", "Universitas Amikom Purwokerto", "Universitas An-Nur Purwodadi", "Universitas Darul Ulum Islamic Centre Sudirman GUPPI", "Universitas Dian Nuswantoro", "Universitas Diponegoro", "Universitas Duta Bangsa Surakarta", "Universitas Harapan Bangsa", "Universitas Islam Sultan Agung", "Universitas Ivet", "Universitas Jenderal Soedirman", "Universitas Katolik Soegijapranata", "Universitas Kristen Satya Wacana", "Universitas Kusuma Husada Surakarta", "Universitas Muhammadiyah Gombong", "Universitas Muhammadiyah Kudus", "Universitas Muhammadiyah Magelang", "Universitas Muhammadiyah Pekajangan Pekalongan", "Universitas Muhammadiyah Purwokerto", "Universitas Muhammadiyah Purworejo", "Universitas Muhammadiyah Semarang", "Universitas Muhammadiyah Surakarta", "Universitas Muria Kudus", "Universitas Nahdlatul Ulama Al Ghazali Cilacap", "Universitas Negeri Semarang", "Universitas Ngudi Waluyo", "Universitas Pancasakti Tegal", "Universitas Pekalongan", "Universitas PGRI Semarang", "Universitas Putra Bangsa Kebumen", "Universitas Sahid Surakarta", "Universitas Sebelas Maret Surakarta", "Universitas Semarang", "Universitas Setia Budi", "Universitas Slamet Riyadi", "Universitas Terbuka Surakarta", "Universitas Tidar", "Universitas Veteran Bangun Nusantara", "Universitas Wahid Hasyim", "Universitas Wijaya Kusuma Purwokerto"],

        labels: {

            rotate: -90,

            minHeight: 350,

            style: {

                colors: collegeColors,

                fontSize: '12px'

            }

        }




    }

};




var collegeChart = new ApexCharts(document.querySelector("#collegeChart"), collegeOptions);

collegeChart.render();