<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Pelanggan
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Pelanggan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newCustomer()"><!-- data-target="#mod_customer" -->
                <i class="fa fa-plus"></i> New
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editCustomer()"><!-- data-target="#mod_customer" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_customer" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_customer" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_customer" tabindex="-1" role="dialog" aria-labelledby="lablemod_kat">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kat">Entry Pelanggan</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_customer">Kode Pelanggan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="kode_customer" name="kode_customer" placeholder="Kode Pelanggan" readonly="readonly">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="nama_customer">Nama Pelanggan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama_customer" name="nama_customer" placeholder="Nama Pelanggan" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="alamat_customer">Alamat</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="alamat_customer" name="alamat_customer" placeholder="Alamat" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="telp_customer">Telp.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="telp_customer" name="telp_customer" placeholder="+62 .." required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="ket_customer">Keterangan</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="ket_customer" name="ket_customer" placeholder="Keterangan" required></textarea>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="saveCustomer()">Save</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL DELETE -->
              <div class="modal fade" id="mod_delcus" tabindex="-1" role="dialog" aria-labelledby="lablemod_customer">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_customer">Delete Pelanggan</h4>
                    </div>
                    <div class="modal-body">
                      <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="deleteCustomer()">Ok</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="mst_customer" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat Pelanggan</th>
                  <th>Telp. Pelanggan</th>
                  <th>Keterangan</th>
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
    var table_sup;
    var selection = '';
    var sts='';
    $(function(){
      table_sup = $('#mst_customer').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
       // "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>master_ctrl/get_customer",
          "type": "POST"
        },
        'columns':[
          {"data": "no",width:12},
          {"data": "kode_customer",width:100},
          {"data": "nama_customer",width:100},
          {"data": "alamat_customer",width:100},
          {"data": "telp_customer",width:100},
          {"data": "ket_customer",width:100}
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
      $('#mst_customer tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_sup.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selection = table_sup.row( this ).data();
          }
      });
      // MENAMBAHKAN NOMOR URUT
      table_sup.on( 'order.dt search.dt', function () {
        table_sup.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();
    });

    function editCustomer(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_customer').modal('show');

        $('#kode_customer').val(selection.kode_customer);
        $('#nama_customer').val(selection.nama_customer);
        $('#alamat_customer').val(selection.alamat_customer);
        $('#telp_customer').val(selection.telp_customer);
        $('#ket_customer').val(selection.ket_customer);
        url='master_ctrl/edit_customer';
      }
    }

    function newCustomer(){
      sts = 'new';
      $('#mod_customer').modal('show');

      $('#kode_customer').val('');
      $('#nama_customer').val('');
      $('#alamat_customer').val('');
      $('#telp_customer').val('');
      $('#ket_customer').val('');
      url = 'master_ctrl/save_customer';
    }

    function del(){
      if (selection!='') {
        $('#mod_delcus').modal('show');
        url = 'master_ctrl/delete_customer';
      }
    }

    function deleteCustomer(){
      $.post(url,{
        kode_customer: selection.kode_customer
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delcus').modal('hide');
          table_sup.ajax.reload( null, false );
        }
      });
    }

    function saveCustomer(){
      console.log(sts+' '+url);
      if (sts=='new') {
        $.post(url,{
          kode_customer:$('#kode_customer').val(),
          nama_customer:$('#nama_customer').val(),
          alamat_customer:$('#alamat_customer').val(),
          telp_customer:$('#telp_customer').val(),
          ket_customer:$('#ket_customer').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_customer').modal('hide');
            table_sup.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          kode_customer:$('#kode_customer').val(),
          nama_customer:$('#nama_customer').val(),
          alamat_customer:$('#alamat_customer').val(),
          telp_customer:$('#telp_customer').val(),
          ket_customer:$('#ket_customer').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_customer').modal('hide');
            table_sup.ajax.reload( null, false );
          }
        });
      }
    }
  </script>