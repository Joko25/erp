<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Kategori
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Kategori</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newKategori()"><!-- data-target="#mod_kategoi" -->
                <i class="fa fa-plus"></i> New Kategori
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editKategori()"><!-- data-target="#mod_kategoi" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_kategoi" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_kategoi" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_kategoi" tabindex="-1" role="dialog" aria-labelledby="lablemod_kat">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kat">Entry Kategori</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_kategori">Kode Kategori</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" placeholder="Kode Kategori" readonly="readonly">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="nama_kategori">Nama Kategori</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="ket_kategori">Ket. Kategori</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="ket_kategori" name="ket_kategori" placeholder="Ket. Kategori" required>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="saveKategori()">Save</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL DELETE -->
              <div class="modal fade" id="mod_delkat" tabindex="-1" role="dialog" aria-labelledby="lablemod_kategori">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kategori">Delete User</h4>
                    </div>
                    <div class="modal-body">
                      <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="deleteKategori()">Ok</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="mst_kategori" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Keterangan Kategori</th>
                  <th>Last Update</th>
                  <th>User Entry</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    var url;
    var table_kat;
    var selection = '';
    var sts='';
    $(function(){
      table_kat = $('#mst_kategori').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
       // "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>pages/getkat",
          "type": "POST"
        },
        'columns':[
          {"aaData": "no",width:12},
          {"aaData": "kode_kategori",width:100},
          {"aaData": "nama_kategori",width:100},
          {"aaData": "ket_kategori",width:100},
          {"aaData": "last_update",width:100},
          {"aaData": "user_entry",width:100}
          // ,
          // {"aaData": "action",width:100}
        ],
        "columnDefs": [
          {
              "targets": [ 1 ],
              "visible": false
          }
        ]
      });
      // getselected rows
      $('#mst_kategori tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_kat.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selection = table_kat.row( this ).data();
          }
      });
      // MENAMBAHKAN NOMOR URUT
      table_kat.on( 'order.dt search.dt', function () {
        table_kat.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();
    });

    function editKategori(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_kategoi').modal('show');
        $("#kode_kategori").val(selection[1]);
        $("#nama_kategori").val(selection[2]);
        $("#ket_kategori").val(selection[3]);
        // $("#password").val('');
        url='master_ctrl/edit';
      }
    }

    function newKategori(){
      sts = 'new';
      $('#mod_kategoi').modal('show');
      // $('#fm_user').form('clear');
      $("#kode_kategori").val('');
      $("#nama_kategori").val('');
      $("#ket_kategori").val('');
      url = 'master_ctrl/save';
    }

    function del(){
      if (selection!='') {
        $('#mod_delkat').modal('show');
        url = 'master_ctrl/delete';
      }
    }

    function deleteKategori(){
      $.post(url,{
        kode_kategori: selection[1]
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delkat').modal('hide');
          table_kat.ajax.reload( null, false );
        }
      });
    }

    function saveKategori(){
      console.log(sts+' '+url);
      if (sts=='new') {
        $.post(url,{
          nama_kategori: $("#nama_kategori").val(),
          ket_kategori: $("#ket_kategori").val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_kategoi').modal('hide');
            table_kat.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          kode_kategori: $("#kode_kategori").val(),
          nama_kategori: $("#nama_kategori").val(),
          ket_kategori: $("#ket_kategori").val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_kategoi').modal('hide');
            table_kat.ajax.reload( null, false );
          }
        });
      }
    }
  </script>