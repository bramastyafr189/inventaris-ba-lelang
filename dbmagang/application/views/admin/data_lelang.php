          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
                <button class="btn btn-warning" data-toggle="modal" data-target="#tambah_data_lelang">
                    <i class="fa fa-envelope"></i> Tambah <?php echo $judul ?>
                </button>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Tanggal Kirim</th>
                        <th>Nama Pengirim</th>
                        <th>OPD</th>
                        <th>Paket</th>
                        <th>Pagu</th>
                        <th>HPS</th>
                        <th>Nama Kepanitiaan</th>
                        <th>No Kepanitiaan</th>
                        <th>Nama CP</th>
                        <th>Telp CP</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Tanggal Kirim</th>
                        <th>Nama Pengirim</th>
                        <th>OPD</th>
                        <th>Paket</th>
                        <th>Pagu</th>
                        <th>HPS</th>
                        <th>Nama Kepanitiaan</th>
                        <th>No Kepanitiaan</th>
                        <th>Nama CP</th>
                        <th>Telp CP</th>
                        <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if (isset($data_data_lelang)) {
                        foreach ($data_data_lelang as $data_lelang) {
                            echo '
                            <tr>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->tgl_kirim . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->nama_pengirim . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->opd . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->paket . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->pagu . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->hps . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->nama_kepanitiaan . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->no_kepanitiaan . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->nama_cp . '</td>
                                <td class="text-center" style="vertical-align: middle;">' . $data_lelang->telp_cp . '</td>

                                <td class="text-center" style="vertical-align: middle;">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="fas fa-info-circle nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                            <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="' . base_url('uploads/' . $data_lelang->file_surat) . '">Lihat</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah_data_lelang" onclick="ubah_surat(' . $data_lelang->id_surat . ')">Ubah</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah_file_data_lelang" onclick="ubah_surat(' . $data_lelang->id_surat . ')">Ubah File</a>
                                                <a class="dropdown-item" href="' . base_url('home/hapus_data_lelang/' . $data_lelang->id_surat) . '" onClick="return doconfirm();">Hapus</a>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            ';
                        }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="modal fade" id="tambah_data_lelang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" action="<?php echo base_url('home/tambah_data_lelang') ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="modal-header">
                                
                                <h4 class="modal-title text-center" id="myModalLabel">Tambah <?php echo $judul ?></h4>
                            </div>
                            <div class="modal-body">
                                <!-- <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input class="form-control" type="text" name="nomor_surat" required>
                                </div> -->
                                <div class="form-group">
                                    <label>Tanggal Kirim</label>
                                    <input class="form-control" type="date" name="tgl_kirim" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Tujuan</label>
                                    <input class="form-control" type="text" name="tujuan" required>
                                </div>
                                <div class="form-group">
                                    <label>Perihal</label>
                                    <textarea class="form-control" rows="1" name="perihal" required></textarea>
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Pengirim</label>
                                    <input class="form-control" type="text" name="nama_pengirim" required>
                                </div>
                                <div class="form-group">
                                    <label>OPD</label>
                                    <input class="form-control" type="text" name="opd" required>
                                </div>
                                <div class="form-group">
                                    <label>Paket</label>
                                    <input class="form-control" type="text" name="paket" required>
                                </div>
                                <div class="form-group">
                                    <label>Pagu</label>
                                    <input class="form-control" type="text" name="pagu" required>
                                </div>
                                <div class="form-group">
                                    <label>HPS</label>
                                    <input class="form-control" type="text" name="hps" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kepanitiaan</label>
                                    <input class="form-control" type="text" name="nama_kepanitiaan" required>
                                </div>
                                <div class="form-group">
                                    <label>No Kepanitiaan</label>
                                    <input class="form-control" type="text" name="no_kepanitiaan" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama CP</label>
                                    <input class="form-control" type="text" name="nama_cp" required>
                                </div>
                                <div class="form-group">
                                    <label>Telp CP</label>
                                    <input class="form-control" type="text" name="telp_cp" required>
                                </div>

                                <div class="form-group">
                                    <label>File Surat</label>
                                    <input class="form-control" type="file" accept="application/pdf" name="file_surat" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                <input type="submit" value="Tambah <?php echo $judul ?>" name="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="ubah_data_lelang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" action="<?php echo base_url('home/ubah_data_lelang') ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="modal-header">
                                
                                <h4 class="modal-title text-center" id="myModalLabel">Ubah <?php echo $judul ?></h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="ubah_id_surat" id="ubah_id_surat">
                                <!-- <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input class="form-control" type="text" name="ubah_nomor_surat" id="ubah_nomor_surat" required>
                                </div> -->
                                <div class="form-group">
                                    <label>Tanggal Kirim</label>
                                    <input class="form-control" type="date" name="ubah_tgl_kirim" id="ubah_tgl_kirim" required>
                                </div>
                                <!--<div class="form-group">
                                    <label>Tujuan</label>
                                    <input class="form-control" type="text" name="ubah_tujuan" id="ubah_tujuan" required>
                                </div>
                                <div class="form-group">
                                    <label>Perihal</label>
                                    <textarea class="form-control" rows="1" name="ubah_perihal" id="ubah_perihal"
                                              required></textarea>
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Pengirim</label>
                                    <input class="form-control" type="text" name="ubah_nama_pengirim" id="ubah_nama_pengirim" required>
                                </div>
                                <div class="form-group">
                                    <label>OPD</label>
                                    <input class="form-control" type="text" name="ubah_opd" id="ubah_opd" required>
                                </div>
                                <div class="form-group">
                                    <label>Paket</label>
                                    <input class="form-control" type="text" name="ubah_paket" id="ubah_paket" required>
                                </div>
                                <div class="form-group">
                                    <label>Pagu</label>
                                    <input class="form-control" type="text" name="ubah_pagu" id="ubah_pagu" required>
                                </div>
                                <div class="form-group">
                                    <label>HPS</label>
                                    <input class="form-control" type="text" name="ubah_hps" id="ubah_hps" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kepanitiaan</label>
                                    <input class="form-control" type="text" name="ubah_nama_kepanitiaan" id="ubah_nama_kepanitiaan" required>
                                </div>
                                <div class="form-group">
                                    <label>No Kepanitiaan</label>
                                    <input class="form-control" type="text" name="ubah_no_kepanitiaan" id="ubah_no_kepanitiaan" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama CP</label>
                                    <input class="form-control" type="text" name="ubah_nama_cp" id="ubah_nama_cp" required>
                                </div>
                                <div class="form-group">
                                    <label>Telp CP</label>
                                    <input class="form-control" type="text" name="ubah_telp_cp" id="ubah_telp_cp" required>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                <input type="submit" value="Ubah <?php echo $judul ?>" name="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="ubah_file_data_lelang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" action="<?php echo base_url('home/ubah_file_data_lelang') ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="modal-header">
                                
                                <h4 class="modal-title text-center" id="myModalLabel">Ubah File <?php echo $judul ?></h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="ubah_file_surat" id="ubah_file_surat">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <input class="form-control" type="file" accept="application/pdf" name="ubah_file_surat"
                                           required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
                                <input type="submit" value="Ubah File <?php echo $judul ?>" name="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <script>
            function doconfirm()
            {
                job=confirm("Data akan dihapus?");
                if(job!=true)
                {
                    return false;
                }
            }
            </script>
            <script>
                function ubah_surat(id_surat) {
                    $('#ubah_id_surat').empty();
                    // $('#ubah_nomor_surat').empty();
                    $('#ubah_tgl_kirim').empty();
                    // $('#ubah_tujuan').empty();
                    // $('#ubah_perihal').empty();
                    $('#ubah_nama_pengirim').empty();
                    $('#ubah_opd').empty();
                    $('#ubah_paket').empty();
                    $('#ubah_pagu').empty();
                    $('#ubah_hps').empty();
                    $('#ubah_nama_kepanitiaan').empty();
                    $('#ubah_no_kepanitiaan').empty();
                    $('#ubah_nama_cp').empty();
                    $('#ubah_telp_cp').empty();
                    $('#ubah_file_surat').empty();

                    $.getJSON('<?php echo base_url('home/get_data_lelang_by_id/')?>' + id_surat, function (data) {
                        $('#ubah_id_surat').val(data.id_surat);
                        // $('#ubah_nomor_surat').val(data.nomor_surat);
                        $('#ubah_tgl_kirim').val(data.tgl_kirim);
                        // $('#ubah_tujuan').val(data.tujuan);
                        // $('#ubah_perihal').val(data.perihal);
                        $('#ubah_nama_pengirim').val(data.nama_pengirim);
                        $('#ubah_opd').val(data.opd);
                        $('#ubah_paket').val(data.paket);
                        $('#ubah_pagu').val(data.pagu);
                        $('#ubah_hps').val(data.hps);
                        $('#ubah_nama_kepanitiaan').val(data.nama_kepanitiaan);
                        $('#ubah_no_kepanitiaan').val(data.no_kepanitiaan);
                        $('#ubah_nama_cp').val(data.nama_cp);
                        $('#ubah_telp_cp').val(data.telp_cp);
                        $('#ubah_file_surat').val(data.id_surat);
                    })
                }
            </script>
            </div>
          </div>