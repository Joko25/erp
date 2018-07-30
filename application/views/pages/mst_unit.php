<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Satuan
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Satuan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newUnit()"><!-- data-target="#mod_satuan" -->
                <i class="fa fa-plus"></i> New Satuan
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editUnit()"><!-- data-target="#mod_satuan" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_satuan" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_satuan" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_satuan" tabindex="-1" role="dialog" aria-labelledby="lablemod_sat">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_sat">Entry satuan</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_satuan">Kode satuan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="kode_satuan" name="kode_satuan" placeholder="Kode satuan" readonly="readonly">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="nama_satuan">Nama satuan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama_satuan" name="nama_satuan" placeholder="Nama satuan" required>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="savesatuan()">Save</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL DELETE -->
              <div class="modal fade" id="mod_delkat" tabindex="-1" role="dialog" aria-labelledby="lablemod_satuan">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_satuan">Delete User</h4>
                    </div>
                    <div class="modal-body">
                      <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="deletesatuan()">Ok</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="mst_satuan" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Satuan</th>
                  <th>Nama Satuan</th>
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
    var table_satuan;
    var selection = '';
    var sts='';
    $(function(){
      table_satuan = $('#mst_satuan').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
       // "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>pages/getsat",
          "type": "POST"
        },
        'columns':[
          {"aaData": "no",width:12},
          {"aaData": "kode_satuan",width:100},
          {"aaData": "nama_satuan",width:100},
          {"aaData": "last_update",width:100},
          {"aaData": "user_entry",width:100}
          // ,
          // {"aaData": "action",width:100}
        ]
      });
      // getselected rows
      $('#mst_satuan tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_satuan.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selection = table_satuan.row( this ).data();
          }
      });
      // MENAMBAHKAN NOMOR URUT
      table_satuan.on( 'order.dt search.dt', function () {
        table_satuan.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();
    });

    function editUnit(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_satuan').modal('show');
        $("#kode_satuan").val(selection[1]);
        $("#nama_satuan").val(selection[2]);
        // $("#password").val('');
        url='master_ctrl/edit_satuan';
      }
    }

    function newUnit(){
      sts = 'new';
      $('#mod_satuan').modal('show');
      // $('#fm_user').form('clear');
      $("#kode_satuan").val('');
      $("#nama_satuan").val('');
      url = 'master_ctrl/save_satuan';
    }

    function del(){
      if (selection!='') {
        $('#mod_delkat').modal('show');
        url = 'master_ctrl/delete_satuan';
      }
    }

    function deletesatuan(){
      $.post(url,{
        kode_satuan: selection[1]
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delkat').modal('hide');
          table_satuan.ajax.reload( null, false );
        }
      });
    }

    function savesatuan(){
      console.log(sts+' '+url);
      if (sts=='new') {
        $.post(url,{
          nama_satuan: $("#nama_satuan").val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_satuan').modal('hide');
            table_satuan.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          kode_satuan: $("#kode_satuan").val(),
          nama_satuan: $("#nama_satuan").val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_satuan').modal('hide');
            table_satuan.ajax.reload( null, false );
          }
        });
      }
    }
  </script>