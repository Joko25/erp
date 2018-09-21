<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembelian
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pembelian</a></li>
        <li class="active">Pembelian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newPO()"><!-- data-target="#mod_customer" -->
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
              <div class="modal fade bd-example-modal-lg" id="mod_customer" tabindex="-1" role="dialog" aria-labelledby="lablemod_kat">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 650px;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_kat">Entry Pembelian</h4>
                    </div>
                    <div class="modal-body" style="height: 500px; overflow-x: auto;">
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="no_faktur">No. Faktur</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="no_faktur" name="no_faktur" placeholder="No. Faktur" readonly="readonly">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="kode_supplier">Supplier</label>
                            <div class="col-sm-9">
                              <select class="form-control"  id="kode_supplier" name="kode_supplier" placeholder="Nama Supplier"></select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="telp_customer">PPN 10%</label>
                            <div class="col-sm-9">
                              <input class="form-check-input" type="radio" name="ppn10" id="ppn1" value="TRUE" checked>
                              <label class="form-check-label" for="ppn1">
                                True
                              </label>
                              <input class="form-check-input" type="radio" name="ppn10" id="ppn2" value="FALSE">
                              <label class="form-check-label" for="ppn2">
                                False
                              </label>
                              <!-- <input type="text" class="form-control" id="telp_customer" name="telp_customer" placeholder="+62 .." required> -->
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="ket_customer">Keterangan</label>
                            <div class="col-sm-9">
                              <textarea class="form-control" id="ket_po" name="ket_po" placeholder="Keterangan" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-primary btn-sm" onclick="newBrg()">Tambah Barang</button>
                            <button type="button" class="btn btn-info btn-sm" onclick="editBrg()">Edit Barang</button>
                            <button type="button" class="btn btn-warning btn-sm" onclick="deleteBrg()">Hapus Barang</button>
                            <table id="tbl_po_entry" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                            </table>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="po_subtotal">Subtotal</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="po_subtotal" name="po_subtotal" style="text-align:right;" placeholder="0.00" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="po_disc">Disc %</label>
                            <div class="col-sm-2">
                              <input type="number" class="form-control" id="po_disc" name="po_disc" style="text-align:right;" onchange="gendisc()" placeholder="0.00" min="0" max="100" required>
                            </div>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="po_discnominal" name="po_discnominal" onchange="generate()" style="text-align:right;" placeholder="0.00" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="po_dp">Uang Muka</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="po_dp" name="po_dp" onchange="generate()" style="text-align:right;" placeholder="0.00" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="po_ppn">PPN10%</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="po_ppn" name="po_ppn" style="text-align:right;" placeholder="0.00" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="po_grandtotal">Grand Total</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="po_grandtotal" name="po_grandtotal" style="text-align:right;" placeholder="0.00" required>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="savePO()">Save</button>
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

              <div class="modal fade" id="mod_newBrg" tabindex="-1" role="dialog" aria-labelledby="lablemod_newbrg">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_newbrg">Tambah Barang</h4>
                    </div>
                    <div class="modal-body">
                      <!-- <strong>Are you sure to delete this record?</strong> -->
                      <form class="form-horizontal" id="fm_kat" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-3" for="kode_barang">Barang</label>
                        <div class="col-sm-9">
                          <select name="kode_barang" id="kode_barang" class="form-control" onchange="selectBrg(this);">
                            
                          </select>
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
                        <label class="col-sm-3" for="qty_barang">Qty</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="qty_barang" name="qty_barang" placeholder="Rp. 0" style="text-align:right;" required>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3" for="harga_beli">Harga Beli</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Rp. 0" style="text-align:right;" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="addBrg()">Add</button>
                    </div>
                  </div>
                </div>
              </div>              

              <!-- TABLE USERS -->
              <table id="tbl_po" class="table table-striped table-hover display">
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
    var table_po;
    var selection = '';
    var select_entry = '';
    var sts='';
    var tbl_po_entry;
    var status_brg='';
    $(function(){
      tbl_po_entry = $('#tbl_po_entry').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : false,
        'info'        : false
      });

      // getselected rows
      $('#tbl_po_entry tbody').on( 'click', 'tr', function () {
          console.log(this);
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            select_entry='';
          }else {
            table_po.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            select_entry = tbl_po_entry.row( this ).data();
          }
      });


      table_po = $('#tbl_po').DataTable({
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
          {"data": "kode_supplier",width:100},
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
      $('#tbl_po tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_po.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selection = table_po.row( this ).data();
          }
      });

      // MENAMBAHKAN NOMOR URUT
      table_po.on( 'order.dt search.dt', function () {
        table_po.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();
    });

    function getProduct(){
      var a = "<option value=''>pilih</option>";
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonproduct",
        async: false,
        success: function(data){
          for(var key in data) {
            // console.log(key);
              a += "<option value=" + data[key].kode_barang  + ">" +data[key].nama_barang + "</option>"
          }

          document.getElementById("kode_barang").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function editCustomer(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_customer').modal('show');

        $('#kode_supplier').val(selection.kode_supplier);
        $('#nama_customer').val(selection.nama_customer);
        $('#alamat_customer').val(selection.alamat_customer);
        $('#telp_customer').val(selection.telp_customer);
        $('#ket_customer').val(selection.ket_customer);
        url='master_ctrl/edit_customer';
      }
    }

    function prosesharga(){
      var data = tbl_po_entry
      .rows()
      .data();

      var total = data.length;


      var i = 0;
      var count = 0;

      var jml = 0;


      for (i = 0; i< total; i++) {
        // Things[i]
        // data[i][5];
        console.log(data[i][5]);
        jml = parseFloat(jml + data[i][5]); 
      }

      return jml;
    }

    function gendisc(){
      var po_subtotal = parseFloat($('#po_subtotal').val());
      var diskon = parseFloat($('#po_disc').val());
      var po_ppn = parseFloat($('#po_ppn').val());
      var totaldisc = (po_subtotal+po_ppn) * diskon/100;
      console.log(totaldisc+' = '+diskon+' + '+po_subtotal+' * '+parseFloat(diskon/100));
      $('#po_discnominal').val(totaldisc);
      generate();
    }

    function generate(){
      var po_subtotal = $('#po_subtotal').val();
      var po_discnominal = $('#po_discnominal').val();
      var po_dp = $('#po_dp').val();
      var po_ppn = $('#po_ppn').val();
      var po_grandtotal = parseFloat(po_subtotal - po_discnominal - po_dp) + parseFloat(po_ppn);

      $('#po_grandtotal').val(po_grandtotal);
    }

    function newPO(){
      sts = 'new';
      $('#mod_customer').modal('show');
      getSupplier();
      var faktur = noFaktur();

      console.log(faktur);

      $('#no_faktur').val(faktur);

      $('#kode_supplier').val('');
      $('#nama_customer').val('');
      $('#alamat_customer').val('');
      $('#telp_customer').val('');
      $('#ket_po').val('');
      $('#po_subtotal').val('');
      $('#po_disc').val('');
      $('#po_discnominal').val('');
      $('#po_dp').val('');
      $('#po_ppn').val('');
      $('#po_grandtotal').val('');
      url = 'purchase_ctrl/save_po';
    }

    function deleteBrg(){
      if (tbl_po_entry.rows('.selected').data().length==0){
          console.log( tbl_po_entry.rows('.selected').data().length +' row(s) selected, you should select the row you want to delete!' );
      }else{

        console.log( tbl_po_entry.rows('.selected').data().length +' row(s) selected, are you sure you want to delete this row?' );
 
        tbl_po_entry.rows('.selected').remove().draw(false);
      }
    }
    function newBrg(){
      $('#mod_newBrg').modal('show');
      status_brg = 'new';
      getProduct();
      getKat();
      getSat();
      $('#kode_barang').val();
      $('#kode_kategori').val();
      $('#kode_satuan').val();
      $('#harga_beli').val();
      $('#qty_barang').val();
    }

    function editBrg(){
      status_brg = 'edit';
      var rows = tbl_po_entry.rows( '.selected' ).indexes();
      var data = tbl_po_entry.rows( rows ).data();
      console.log(data);
      if (select_entry == '') {

      }else{
        $('#mod_newBrg').modal('show');
        getProduct();
        getKat();
        getSat();
        var brg = getBarang(select_entry[0]);
        $('#kode_barang').val(select_entry[0]);
        $('#kode_kategori').val(brg[0].kode_kategori);
        $('#kode_satuan').val(brg[0].kode_satuan);
        $('#harga_beli').val(select_entry[3]);
        $('#qty_barang').val(select_entry[4]);
      }
    }


    function selectBrg(data){
      var kode_barang = $('#kode_barang').val();
      var brg = getBarang(kode_barang);
      $('#kode_kategori').val(brg[0].kode_kategori);
      $('#kode_satuan').val(brg[0].kode_satuan);
      $('#harga_beli').val(brg[0].harga_beli);
      $('#qty_barang').val(0);
      // console.log(brg[0].kode_kategori);
    }

    function addBrg(){

      var kode_brg = $('#kode_barang').val();
      var nama_brg = $('#kode_barang option:selected').text();
      // var nama_brg = $('#kode_kategori').text();
      var satuan = $('#kode_satuan option:selected').text();
      var harga_beli = $('#harga_beli').val();
      var qty_barang = $('#qty_barang').val();
      var jml = parseFloat(harga_beli * qty_barang);

      var data = tbl_po_entry
      .rows()
      .data();

      var total = data.length;


      var i = 0;
      var count = 0;


      for (i = 0; i< total; i++) {
        // Things[i]
        var brg = data[i][0];//.kode_barang;
        // var row = tbl_po_entry.rows(i).data();
        console.log(data[i][0]+' || '+brg+' | '+kode_brg);

        if (brg == kode_brg) {
          count++;
        }
      }


      if (count > 0) {
        alert('barang sudah ada');
      }else if (qty_barang == 0) {
        alert('Harap isi quantity!')
      }else{
        tbl_po_entry.row.add( [
              kode_brg,
              nama_brg,
              // nama_brg,
              satuan,
              harga_beli,
              qty_barang,
              jml
          ] ).draw( false );

        $('#kode_barang').val('');
        $('#kode_kategori').val('');
        $('#kode_satuan').val('');
        $('#harga_beli').val('');
        $('#qty_barang').val('');
        var subtotal = prosesharga();
        $("#po_subtotal").val(subtotal);
        $("#po_disc").val(0);
        $("#po_discnominal").val(0);

        var ppn = $('input[name=ppn10]:checked').val();

        console.log(ppn);

        if (ppn == 'TRUE') {
          var ppnprcn = subtotal * 0.1;
          $("#po_ppn").val(ppnprcn);
        }else{
          $("#po_ppn").val(0);
          
        }
        
        $("#po_dp").val(0);
        $("#po_grandtotal").val(0);
        generate();
      }

    }

    function getKat(){
      var a;
      var a = "<option value=''>pilih</option>";
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonkat",
        async: false,
        success: function(data){
          for(var key in data) {
            // console.log(key);
              a += "<option value=" + data[key].kode_kategori  + ">" +data[key].ket_kategori + "</option>"
          }

          document.getElementById("kode_kategori").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function getSupplier(){
      var a;
      var a = "<option value=''>pilih</option>";
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonsupplier",
        async: false,
        success: function(data){
          for(var key in data) {
            // console.log(key);
              a += "<option value=" + data[key].kode_supplier  + ">" +data[key].nama_supplier + "</option>"
          }

          document.getElementById("kode_supplier").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function getSat(){
      var a;
      var a = "<option value=''>pilih</option>";
      $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "<?=base_url()?>pages/jsonsat",
        async: false,
        success: function(data){
          for(var key in data) {
            // console.log(key);
              a += "<option value=" + data[key].kode_satuan  + ">" +data[key].nama_satuan + "</option>"
          }

          document.getElementById("kode_satuan").innerHTML = a;
          a = data;
        }
      });

      return a;
    }

    function getBarang(data){
      var brg;
      $.ajax({
        url: 'pages/getBarangdtl',
        data: {
          kode_barang : data
        },
        // global: false,
        type: 'POST',
        async: false, //blocks window close
        success: function(data) {
          brg = data;
        }
      });

      return brg;
    }

    function noFaktur(){
      var no;
      $.ajax({
        url: 'purchase_ctrl/getpo',
        type: 'GET',
        async: false, //blocks window close
        success: function(data) {
          no = data[0].kode;
        }
      });

      return no;
    }

    function del(){
      if (selection!='') {
        $('#mod_delcus').modal('show');
        url = 'master_ctrl/delete_customer';
      }
    }

    function deleteCustomer(){
      $.post(url,{
        kode_supplier: selection.kode_supplier
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delcus').modal('hide');
          table_po.ajax.reload( null, false );
        }
      });
    }

    function savePO(){

      var data = tbl_po_entry.rows().data();
      // console.log(data.length+' '+sts+' '+url);
      var total = data.length;

      var jsonString = JSON.stringify(data);
      

      var no_faktur = $('#no_faktur').val();

      var kode_supplier = $('#kode_supplier').val();
      // var nama_customer = $('#nama_customer').val();
      var alamat_customer = $('#alamat_customer').val();
      // var telp_customer = $('#telp_customer').val();
      var ket_po = $('#ket_po').val();
      var po_subtotal = $('#po_subtotal').val();
      var po_disc = $('#po_disc').val();
      var po_discnominal = $('#po_discnominal').val();
      var po_dp = $('#po_dp').val();
      var po_ppn = $('#po_ppn').val();
      var po_grandtotal = $('#po_grandtotal').val();

      console.log(url+' '+data[0]);

      // $.post(url, {
        
      // });
      // if (sts=='new') {
        $.ajax({
            type: "POST",
            url: url,
            data: {
              data: jsonString,
              no_faktur: no_faktur,
              kode_supplier: kode_supplier,
              // nama_customer: nama_customer,
              alamat_customer: alamat_customer,
              // telp_customer: telp_customer,
              ket_po: ket_po,
              po_subtotal: po_subtotal,
              po_disc: po_disc,
              po_discnominal: po_discnominal,
              po_dp: po_dp,
              po_ppn: po_ppn,
              po_grandtotal: po_grandtotal
            }, 
            cache: false,
            success: function(res){
                console.log(res);
            }
        });
        // $.post(url,{
          
        // }).done(function(res){
          // response = jQuery.parseJSON(res);
          // console.log(response);
          // if (response.errorMsg) {
          //   alert('error');
          // }else{
          //   $('#mod_customer').modal('hide');
          //   table_po.ajax.reload( null, false );
          // }
        // });
      // }else{
      //   $.post(url,{
      //     kode_supplier:$('#kode_supplier').val(),
      //     nama_customer:$('#nama_customer').val(),
      //     alamat_customer:$('#alamat_customer').val(),
      //     telp_customer:$('#telp_customer').val(),
      //     ket_customer:$('#ket_customer').val()
      //   }).done(function(res){
      //     response = jQuery.parseJSON(res);
      //     console.log(response);
      //     if (response.errorMsg) {
      //       alert('error');
      //     }else{
      //       $('#mod_customer').modal('hide');
      //       table_po.ajax.reload( null, false );
      //     }
      //   });
      // }
    }
  </script>