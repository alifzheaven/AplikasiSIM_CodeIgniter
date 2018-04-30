<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Kelola Data Pendaftar</div>
     <div class="card-body">
          <?php
               
               echo anchor('pendaftar/tambah','Tambah Pendaftar','class="btn btn-primary"
               style="margin:0 5px; margin-bottom: 15px;" ');
               echo anchor ('pendaftar/laporan','Cetak Laporan','class="btn btn-secondary" style="margin: 0 5px; margin-bottom: 15px;"');
               ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">No  KTP</th>
                         <th scope="col">NAMA LENGKAP</th>
                         <th scope="col">TANGGAL LAHIR</th>
                         <th scope="col">UMUR</th>
                         <th scope="col">AKSI</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              $no = 1;
                              foreach ($query->result() as $row) {
                                   echo '
                                        <tr>
                                             <td>'.$no++.'</td>
                                             <td>'.$row->no_ktp.'</td>
                                             <td>'.$row->nama_lengkap.'</td>
                                             <td>'.$row->tanggal_lahir.'</td>
                                             <td>'.$row->umur.'</td>
                                             <td>
                                                  '.anchor('pendaftar/edit/'.$row->daftar_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                                  '.anchor('pendaftar/hapus/'.$row->daftar_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>