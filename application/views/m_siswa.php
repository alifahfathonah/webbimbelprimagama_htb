<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Data Siswa:
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div>
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th width="5%">No.</th>
            <th width="25%">Nama</th>
            <th width="15%">NIS</th>
            <th width="20%">Alamat</th>
			<th width="20%">Tempat Lahir</th>
			<th width="20%">Tanggal Lahir</th>
			<th width="20%">No. Telepon</th>
            <th width="35%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            if (!empty($data)) {
              $no = 1;
              foreach ($data as $d) {
                echo '<tr>
                      <td class="ctr">'.$no.'</td>
                      <td>'.$d->nama.'</td>
                      <td>'.$d->nis.'</td>
                      <td>'.$d->alamat.'</td>
					  <td>'.$d->tmpt_lahir.'</td>
					  <td>'.$d->tgl_lahir.'</td>
					  <td>'.$d->no_tlp.'</td>
                      <td class="">
                        <div class="btn-group">
                          <a href="#" onclick="return m_siswa_e('.$d->id.');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Ubah</a>
                          <a href="#" onclick="return m_siswa_h('.$d->id.');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          <a href="#" onclick="return m_siswa_matkul('.$d->id.');" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-list" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Mata Pelajaran</a>
                          ';
                if ($d->ada == "0") {
                  echo '        <a href="#" onclick="return m_siswa_u('.$d->id.');" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-user" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Aktifkan User</a>';
                }
                echo '</div>
                      </td>
                      </tr>
                      ';
              $no++;
              }
            }
          ?>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Siswa:</h4>
      </div>
      <div class="modal-body">
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Nama:</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
                <tr><td style="width: 25%">NIS:</td><td style="width: 75%"><input type="text" class="form-control" name="nis" id="nis" required></td></tr>
                <tr><td style="width: 25%">Alamat:</td><td style="width: 75%"><input type="text" class="form-control" name="alamat" id="alamat" required></td></tr>
				<tr><td style="width: 25%">Tempat Lahir:</td><td style="width: 75%"><input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" required></td></tr>
				<tr><td style="width: 25%">Tanggal Lahir:</td><td style="width: 75%"><input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" placeholder="Contoh: Tanggal/Bulan/Tahun" required></td></tr>
				<tr><td style="width: 25%">No. Telepon:</td><td style="width: 75%"><input type="text" class="form-control" name="no_tlp" id="no_tlp" required></td></tr>
			  </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>