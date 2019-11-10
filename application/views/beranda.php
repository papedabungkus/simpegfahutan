    <section class="page container">
        <div class="row">

            <div class="span6">
                <div class="box pattern pattern-sandstone">
                    <div class="box-header">
                        <i class="icon-search"></i>
                        <h5>Pengumuman</h5>
                    </div>
                    <div class="box-content box-list collapse in">
                        <ul>
                            <?php 
                            foreach ($pengumuman as $informasi) {
                            ?>
                            <li>
                                <div>
                                    <a class="news-item-title" style="color:#047a2c; text-decoration: none;"><?php echo tanggalwaktu($informasi['datetime']);?></a>
                                    <p class="news-item-preview">
                                        <?=$informasi['judul'];?></p>
                                            <a href="<?=$informasi['url'];?>" class="btn btn-small btn-success">
                                            <i class="btn-icon-only icon-download"></i>Download</a>                                    
                                </div>
                            </li>
                            <?php } ?>
                        </ul>  
                        <div class="box-collapse">
                            <button style="color:#047a2c;"  class="btn btn-box" data-toggle="collapse" data-target=".more-list">
                                Show More
                            </button>
                        </div>
                        <ul class="more-list collapse out">
                        <?php 
                            foreach ($pengumumannext as $informasinext) {
                            ?>
                            <li>
                                <div>
                                    <a class="news-item-title" style="text-decoration: none;"><?php echo tanggalwaktu($informasinext['datetime']);?></a>
                                    <p class="news-item-preview">
                                        <?=$informasinext['judul'];?></p>
                                            <a href="<?=$informasinext['url'];?>" class="btn btn-small btn-info">
                                            <i class="btn-icon-only icon-download"></i>Download</a>                                    
                                </div>
                            </li>
                            <?php } ?>
                        </ul>                      
                    </div>
                </div>
            </div>

            <div class="span10">

                <div class="box">
                    <div class="box-header">
                        <i class="icon-bar-chart"></i>
                        <h5>Grafik Berdasarkan Pangkat/Golongan</h5>
                    </div>
                    <div class="box-content">
                        <div id ="mygraph2"></div>
                    </div>
                </div>
            </div>           
        </div>
    </section>
    
    <script src="<?php echo base_url('assets/chart/highcharts.js');?>"></script>
    <script>
        var chart2;
        $(document).ready(function() {
              chart2 = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'mygraph2',
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
                        foreach($dospegpangkat as $result2) {
                          $golongan = $result2['golongan'];
                          $jumlah = $result2['jumlah'];
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
