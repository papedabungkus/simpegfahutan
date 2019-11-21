        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            
        </style>
   <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Dosen</h5>
                        <a class="btn btn-box-right" data-toggle="collapse" data-target=".box-list1">
                            <i class="icon-reorder"></i> Maximize/Minimize
                        </a>
                        <a href="<?php echo site_url('master/create');?>" class="btn btn-box-right">
                            <i class="icon-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="box-content box-list1 collapse in">
                        <table class="table table-bordered table-striped" id="tabledosen">
                            <thead>
                                <tr>
                                    <th width="80px">No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>NIDN</th>
                                    <th>Tempat Tgl. Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th width="120px">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
		</div>

        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Pegawai</h5>
                        <a class="btn btn-box-right" data-toggle="collapse" data-target=".box-list2">
                            <i class="icon-reorder"></i> Maximize/Minimize
                        </a>
                        <a href="<?php echo site_url('master/create');?>" class="btn btn-box-right">
                            <i class="icon-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="box-content box-list2 collapse in">
                        <table class="table table-bordered table-striped" id="tablepegawai">
                            <thead>
                                <tr>
                                    <th width="80px">No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Tempat Tgl. Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th width="120px">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</section>

               <!-- Modal -->
<div class="modal fade" id="modalDetailDospeg" tabindex="-1" role="dialog" aria-labelledby="modalDetailDospeg" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
      </div>
      <div class="modal-body">
      <div id="result">
      </div>                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        
      </div>
    </div>
  </div>
</div>


        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#tabledosen").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    "lengthChange": false,
                    "bInfo": false,
                    "bPaginate": false,
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "master/jsondosen", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "nama"},{"data": "nip"},{"data": "nidn"},{"data": "tempat_lahir"},{"data": "jk"},{"data": "golongan"},{"data": "jabatan"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    },
                });

                var x = $("#tablepegawai").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    "lengthChange": false,
                    "bInfo": false,
                    "bPaginate": false,
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "master/jsonpegawai", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },{"data": "nama"},{"data": "nip"},{"data": "tempat_lahir"},{"data": "jk"},{"data": "golongan"},{"data": "jabatan"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    },
                });
            });
            $(document).on("click", ".detail_button", function () {
                var myId = $(this).data('id'); 
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url();?>master/detail',
                    data: { ids: myId },
                        success: function(response) { 
                            $('#result').html(response);
                        }
                });
            });
        </script>
    </body>
</html>