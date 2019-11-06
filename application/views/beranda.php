    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bar-chart"></i>
                        <h5>Grafik Berdasarkan Pangkat/Golongan</h5>
                    </div>
                    <div class="box-content">
                        <div id="piechart1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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