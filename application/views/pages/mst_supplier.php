<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Supplier
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Supplier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newSupplier()"><!-- data-target="#mod_supplier" -->
                <i class="fa fa-plus"></i> New
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editSupplier()"><!-- data-target="#mod_supplier" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_supplier" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_supplier" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_supplier" tabindex="-1" role="dialog" aria-labelledby="lablemod_kat">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kat">Entry Supplier</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_supplier">Kode Supplier</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="kode_supplier" name="kode_supplier" placeholder="Kode Supplier" readonly="readonly">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="nama_supplier">Nama Supplier</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="Nama Supplier" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="alamat_supplier">Alamat</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="alamat_supplier" name="alamat_supplier" placeholder="Alamat" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="telp_supplier">Telp.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="telp_supplier" name="telp_supplier" placeholder="+62 .." required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="ket_supplier">Keterangan</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="ket_supplier" name="ket_supplier" placeholder="Keterangan" required></textarea>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="saveSupplier()">Save</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL DELETE -->
              <div class="modal fade" id="mod_delsup" tabindex="-1" role="dialog" aria-labelledby="lablemod_kategori">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kategori">Delete Supplier</h4>
                    </div>
                    <div class="modal-body">
                      <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="deleteSupplier()">Ok</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="mst_supplier" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Alamat Supplier</th>
                  <th>Telp. Supplier</th>
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
      table_sup = $('#mst_supplier').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
       // "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>master_ctrl/get_supplier",
          "type": "POST"
        },
        'columns':[
          {"data": "no",width:12},
          {"data": "kode_supplier",width:100},
          {"data": "nama_supplier",width:100},
          {"data": "alamat_supplier",width:100},
          {"data": "telp_supplier",width:100},
          {"data": "ket_supplier",width:100}
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
      $('#mst_supplier tbody').on( 'click', 'tr', function () {
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

    function editSupplier(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_supplier').modal('show');

        $('#kode_supplier').val(selection.kode_supplier);
        $('#nama_supplier').val(selection.nama_supplier);
        $('#alamat_supplier').val(selection.alamat_supplier);
        $('#telp_supplier').val(selection.telp_supplier);
        $('#ket_supplier').val(selection.ket_supplier);
        url='master_ctrl/edit_supplier';
      }
    }

    function newSupplier(){
      sts = 'new';
      $('#mod_supplier').modal('show');

      $('#kode_supplier').val('');
      $('#nama_supplier').val('');
      $('#alamat_supplier').val('');
      $('#telp_supplier').val('');
      $('#ket_supplier').val('');
      url = 'master_ctrl/save_supplier';
    }

    function del(){
      if (selection!='') {
        $('#mod_delsup').modal('show');
        url = 'master_ctrl/delete_supplier';
      }
    }

    function deleteSupplier(){
      $.post(url,{
        kode_supplier: selection.kode_supplier
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delsup').modal('hide');
          table_sup.ajax.reload( null, false );
        }
      });
    }

    function saveSupplier(){
      console.log(sts+' '+url);
      if (sts=='new') {
        $.post(url,{
          kode_supplier:$('#kode_supplier').val(),
          nama_supplier:$('#nama_supplier').val(),
          alamat_supplier:$('#alamat_supplier').val(),
          telp_supplier:$('#telp_supplier').val(),
          ket_supplier:$('#ket_supplier').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_supplier').modal('hide');
            table_sup.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          kode_supplier:$('#kode_supplier').val(),
          nama_supplier:$('#nama_supplier').val(),
          alamat_supplier:$('#alamat_supplier').val(),
          telp_supplier:$('#telp_supplier').val(),
          ket_supplier:$('#ket_supplier').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_supplier').modal('hide');
            table_sup.ajax.reload( null, false );
          }
        });
      }
    }
  </script>