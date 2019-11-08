    <section class="page container">
        <div class="row">
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bar-chart"></i>
                        <h5>Grafik Berdasarkan Pangkat/Golongan</h5>
                    </div>
                    <div class="box-content">
                        <div id ="mygraph1"></div>
                    </div>
                </div>
            </div>

            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bar-chart"></i>
                        <h5>Pengumuman</h5>
                    </div>
                    <div class="box-content">
                        <div id ="mygraph1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="<?php echo base_url('assets/chart/highcharts.js');?>"></script>
    <script>
        var chart1;  
        $(document).ready(function() {
          /* GRAFIK PEMINATAN PER PRODI */
              chart1 = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'mygraph1',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: ''
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
                    <?php
                        foreach($dospeg as $result) {
                          $golongan = $result['golongan'];
                          $jumlah = $result['jumlah'];
                          ?>
                            [ 
                                '<?php echo $golongan ?>', <?php echo $jumlah; ?>
                            ],
                            <?php
                        }
                        ?>
             
                    ]
                }]
              });
            }); 
    </script>



    <script type="text/javascript">
        google.load('visualization', '1', {'packages': ['corechart']});
        google.setOnLoadCallback(drawVisualization);
        
        function drawVisualization() {
            visualization_data = new google.visualization.DataTable();
            
            visualization_data.addColumn('string', 'Golongan');
            
            visualization_data.addColumn('number', 'Jumlah');
            
            <?php foreach($dospeg as $result) { ?>
            visualization_data.addRow(['<?php echo $result['golongan']?>', <?php echo $result['jumlah']?>]);
            <?php } ?>        
            visualization = new google.visualization.PieChart(document.getElementById('piechart1'));
            visualization.draw(visualization_data, { height: 500});

            
        }
    </script>