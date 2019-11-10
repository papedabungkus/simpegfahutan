    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-user"></i>
                        <h5>Master Data Dosen</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list collapse in">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>NIDN</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;
                            foreach($dosen as $r_dosen){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $r_dosen['nama']; ?></td>
                                    <td><?php echo $r_dosen['nip']; ?></td>
                                    <td><?php echo $r_dosen['nidn']; ?></td>
                                    <td><?php echo $r_dosen['ttl']; ?></td>
                                    <td><?php echo $r_dosen['jk']; ?></td>
                                    <td><?php echo $r_dosen['golongan']; ?></td>
                                    <td><?php echo $r_dosen['jabatan']; ?></td>
                                    <td width="10%" class="td-actions">
                                        <a href="" id="ubahdata" class="btn btn-small btn-default detail_button" data-id="" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-search"> </i>
                                        </a>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-id="" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-pencil"> </i>
                                        </a>
                                        <a onclick="confirm('Are You Sure?')" href="" class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> </i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
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
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list2">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list2 collapse in">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;
                            foreach($pegawai as $r_peg){ ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $r_peg['nama']; ?></td>
                                    <td><?php echo $r_peg['nip']; ?></td>
                                    <td><?php echo $r_peg['ttl']; ?></td>
                                    <td><?php echo $r_peg['jk']; ?></td>
                                    <td><?php echo $r_peg['golongan']; ?></td>
                                    <td><?php echo $r_peg['jabatan']; ?></td>
                                    <td width="10%" class="td-actions">
                                        <a href="" id="ubahdata" class="btn btn-small btn-default detail_button" data-id="" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-search"> </i>
                                        </a>
                                        <a href="" id="ubahdata" class="btn btn-small btn-success edit_button" data-id="" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="btn-icon-only icon-pencil"> </i>
                                        </a>
                                        <a onclick="confirm('Are You Sure?')" href="" class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-remove"> </i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>