<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Barang
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newBrg()"><!-- data-target="#mod_product" -->
                <i class="fa fa-plus"></i> New Barang
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editUser()"><!-- data-target="#mod_product" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_product" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_product" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_product" tabindex="-1" role="dialog" aria-labelledby="lablemod_user">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_user">Entry Barang</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="mst_product" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group" align="center">

                            <div class="preview-zone hidden">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <div><b>Preview</b></div>
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-danger btn-xs remove-preview">
                                      <i class="fa fa-times"></i> Reset This Form
                                    </button>
                                  </div>
                                </div>
                                <div class="box-body"></div>
                              </div>
                            </div>

                            <div class="dropzone-wrapper">
                              <div class="dropzone-desc">
                               <i class="glyphicon glyphicon-download-alt"></i>
                               <p id="filename">Pilih gambar atau geser gambar di sini.</p>
                              </div>
                              <input type="file" name="gambar" id="gambar" value="http://localhost/erp/assets/uploads/noimages.png" accept="image/*" class="dropzone">
                            </div>

                            <!-- <div id="image_preview"><img id="previewing" src="<?=base_url()?>assets/uploads/noimages.png" width="150"/></div>
                            <label class="col-sm-3" for="img">Gambar</label>
                            <div class="col-sm-9" id="selectImage">
                              <input type="file" name="file" id="file" required />
                            </div> -->
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_barang">Kode Barang</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="nama_barang">Nama Barang</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="status">Kategori</label>
                            <div class="col-sm-9">
                              <!-- <select name="datas" id="datas"></select> -->
                              <select name="kode_kategori" id="kode_kategori" class="form-control"></select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="status">Satuan</label>
                            <div class="col-sm-9">
                              <select name="kode_satuan" id="kode_satuan" class="form-control" >
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="harga_beli">Harga Beli</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Rp. 0" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="harga_jual">Harga Jual</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="Rp. 0" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="spek">Spesifikasi</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="spek" name="spek" placeholder="Spesifikasi"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-flat">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- MODAL DELETE -->
              <div class="modal fade" id="mod_delusers" tabindex="-1" role="dialog" aria-labelledby="lablemod_user">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_user">Delete User</h4>
                    </div>
                    <div class="modal-body">
                      <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="deleteUser()">Ok</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="tblmst_product" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Kode Kategori</th>
                  <th>Kode Satuan</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Spesifikasi</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Gambar</th>
                  <th>User Entry</th>
                  <th>Last Update</th>
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
    var table_product;
    var selection = '';
    var sts='';

    $(function(){
      table_product = $('#tblmst_product').DataTable({
        // 'paging'      : true,
        // 'lengthChange': true,
        // 'searching'   : true,
        // 'ordering'    : false,
        // 'info'        : true,
        // 'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>pages/getproduct",
          "type": "POST"
        },
        'columns':[
          {"aaData": "no",width:12},
          {"aaData": "kode_barang",width:100},
          {"aaData": "nama_barang",width:100},
          {"aaData": "kode_kategori",width:100},
          {"aaData": "kode_satuan",width:100},
          {"aaData": "ket_kategori",width:100},
          {"aaData": "nama_satuan",width:100},
          {"aaData": "spesifikasi",width:100},
          {"aaData": "harga_beli",width:100},
          {"aaData": "harga_jual",width:100},
          {"aaData": "gambar",width:100},
          {"aaData": "user_entry",width:100},
          {"aaData": "last_update",width:100}
          // ,
          // {"aaData": "action",width:100}
        ],
        "columnDefs": [
          {
              "targets": [3, 4, 10],
              "visible": false
          }
        ]
      });
      // getselected rows
      $('#tblmst_product tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_product.$('tr.selected').removeClass('selectImaged');
            $(this).addClass('selected');
            selection = table_product.row( this ).data();
          }
      });
      // MENAMBAHKAN NOMOR URUT
      table_product.on( 'order.dt search.dt', function () {
        table_product.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();

      getKat();
      getSat();

      $('#mst_product').submit(function(e) {
        e.preventDefault();
        $.ajaxFileUpload({
          url :'./master_ctrl/save_product', 
          secureuri :false,
          fileElementId :'gambar',
          // dataType : 'json',
          data : {
            kode_barang: $('#kode_barang').val(),
            nama_barang: $('#nama_barang').val(),
            kode_kategori: $('#kode_kategori').val(),
            kode_satuan: $('#kode_satuan').val(),
            harga_beli: $('#harga_beli').val(),
            harga_jual: $('#harga_jual').val(),
            spek: $('#spek').val()
          },
          success : function (res)
          {
            // alert(res);
            // response = jQuery.parseJSON(res);
            // console.log(res.errorMsg);
            if (res.errorMsg) {
              alert('error '+res.errorMsg);
            }else{
              $('#mod_product').modal('hide');
              table_product.ajax.reload( null, false );
            }
          }
        });
        return false;
      });


    });

    function getKat(){
      var a;
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonkat",
        async: false,
        success: function(data){
          for(var key in data) {
            console.log(key);
              a += "<option value=" + data[key].kode_kategori  + ">" +data[key].ket_kategori + "</option>"
          }

          document.getElementById("kode_kategori").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function getSat(){
      var a;
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonsat",
        async: false,
        success: function(data){
          for(var key in data) {
            console.log(key);
              a += "<option value=" + data[key].kode_satuan  + ">" +data[key].nama_satuan + "</option>"
          }

          document.getElementById("kode_satuan").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function editUser(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_product').modal('show');
        $("#username").val(selection[1]);
        $("#password").val('');
        $("#fullname").val(selection[2]);
        $("#email").val(selection[3]);
        $("#status").val(selection[4]);
        $('#ava_img').val(selection[5]);
        url='user_ctrl/edit';
      }
    }

    function newBrg(){
      sts = 'new';
      $('#mod_product').modal('show');
      // $('#gambar').val('http://localhost/erp/assets/uploads/noimages.png');
      // var boxZone = $(this).parents('.preview-zone').find('.box-body');
      // var previewZone = $(this).parents('.preview-zone');
      // var dropzone = $(this).parents('.form-group').find('.dropzone');
      // dropzone.val('http://localhost/erp/assets/uploads/noimages.png');
      $('#kode_barang').val('');
      $('#nama_barang').val('');
      $('#kode_kategori').val('');
      $('#kode_satuan').val('');
      $('#harga_beli').val('');
      $('#harga_jual').val('');
      $('#spek').val('');
      url = 'product_ctrl/save';
    }

    function del(){
      if (selection!='') {
        $('#mod_delusers').modal('show');
        url = 'user_ctrl/delete';
      }
    }

    function deleteUser(){
      $.post(url,{
        id: selection[0]
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delusers').modal('hide');
          table_product.ajax.reload( null, false );
        }
      });
    }

    function saveUser(){
      console.log(sts+' '+url);
      if (sts=='new') {
        $.post(url,{
          username: $("#username").val(),
          password: $("#password").val(),
          fullname: $("#fullname").val(),
          email: $("#email").val(),
          status: $("#status").val(),
          img: $('#ava_img').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_product').modal('hide');
            table_product.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          id: selection[0],
          username: $("#username").val(),
          password: $("#password").val(),
          fullname: $("#fullname").val(),
          email: $("#email").val(),
          status: $("#status").val(),
          img: $('#ava_img').val()
        }).done(function(res){
          response = jQuery.parseJSON(res);
          console.log(response);
          if (response.errorMsg) {
            alert('error');
          }else{
            $('#mod_product').modal('hide');
            table_product.ajax.reload( null, false );
          }
        });
      }
    }

    // UPLOAD FILE PREVIEW
    function readFile(input) {
       if (input.files && input.files[0]) {
         var reader = new FileReader();
         // console.log(reader.readAsDataURL(input.files[0]));
         
         reader.onload = function (e) {
          console.log(e.target.result);
           var htmlPreview = 
           '<img width="200" src="' + e.target.result + '" />'+
           '<p>' + input.files[0].name + '</p>';
           var wrapperZone = $(input).parent();
           var previewZone = $(input).parent().parent().find('.preview-zone');
           var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
           
           wrapperZone.removeClass('dragover');
           previewZone.removeClass('hidden');
           boxZone.empty();
           boxZone.append(htmlPreview);
           $('.dropzone-wrapper').hide();
         };
         
         reader.readAsDataURL(input.files[0]);
       }
    }

    function reset(e) {
       e.wrap('<form>').closest('form').get(0).reset();
       e.unwrap();
    }
    $(".dropzone").change(function(){
      readFile(this);
    });
    $('.dropzone-wrapper').on('dragover', function(e) {
       e.preventDefault();
       e.stopPropagation();
       $(this).addClass('dragover');
    });
    $('.dropzone-wrapper').on('dragleave', function(e) {
       e.preventDefault();
       e.stopPropagation();
       $(this).removeClass('dragover');
    });
    $('.remove-preview').on('click', function() {
       var boxZone = $(this).parents('.preview-zone').find('.box-body');
       var previewZone = $(this).parents('.preview-zone');
       var dropzone = $(this).parents('.form-group').find('.dropzone');
       boxZone.empty();
       previewZone.addClass('hidden');
       reset(dropzone);
       $('.dropzone-wrapper').show();
    });
  </script>