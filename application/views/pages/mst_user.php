<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master User
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data User</h3> -->
              <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" onclick="newUser()"><!-- data-target="#mod_users" -->
                <i class="fa fa-plus"></i> New User
              </button>
              <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" onclick="editUser()"><!-- data-target="#mod_users" -->
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" onclick="del()"><!-- data-target="#mod_users" -->
                <i class="fa fa-trash"></i> Delete
              </button>
              <a href="<?=base_url()?>user_ctrl/pdf" class="btn btn-warning btn-flat btn-sm" target="_blank"><!-- data-target="#mod_users" -->
                <i class="fa fa-file-pdf-o"></i> Print
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- BUTTON MODAL -->
              
              <!-- MODAL USERS -->
              <div class="modal fade" id="mod_users" tabindex="-1" role="dialog" aria-labelledby="lablemod_user">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="lablemod_user">Entry User</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" id="fm_user" method="post" autocomplete="on" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-3" for="username">Username</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="password">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="fullname">Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="email">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="status">Status</label>
                            <div class="col-sm-9">
                              <select name="status" id="status" class="form-control" required>
                                <option value="administrator">Administrator</option>
                                <option value="guest">Guest</option>
                                <option value="superuser">Super User</option>
                                <option value="user">User</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3" for="img">Avatar</label>
                            <div class="col-sm-9">
                              <div style="padding: 5%">
                                <img src="<?=base_url()?>assets/img/default_0.png" id='ava0' onclick="setava('default_0.png', 'ava0')" alt="default" class="avatar">
                                <img src="<?=base_url()?>assets/img/default_1.png" id='ava1' onclick="setava('default_1.png', 'ava1')" alt="default 1" class="avatar">
                                <img src="<?=base_url()?>assets/img/default_2.png" id='ava2' onclick="setava('default_2.png', 'ava2')" alt="default 2" class="avatar">
                                <img src="<?=base_url()?>assets/img/default_3.png" id='ava3' onclick="setava('default_3.png', 'ava3')" alt="default 3" class="avatar">
                                <img src="<?=base_url()?>assets/img/default_4.png" id='ava4' onclick="setava('default_4.png', 'ava4')" alt="default 4" class="avatar">
                              </div>
                              <input type="text" class="form-control" id="ava_img" name="img" placeholder="Images Name" readonly="readonly">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary btn-flat" onclick="saveUser()">Save</button>
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
              <table id="mst_user" class="table table-striped table-hover display">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Images</th>
                  <th>Images</th>
                  <!-- <th>Action</th> -->
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
    var table_user;
    var selection = '';
    var sts='';
    $(function(){
      table_user = $('#mst_user').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        "processing": true, //Feature control the processing indicator.
       // "serverSide": true, //Feature control DataTables' server-side processing mode.
        'ajax':{
          "url": "<?=base_url()?>user_ctrl/get_user",
          "type": "POST"
        },
        'columns':[
          {"data": "id",width:12},
          {"data": "username",width:100},
          {"data": "full_name",width:100},
          {"data": "email",width:100},
          {"data": "status",width:100},
          {"data": "img",width:100},
          {"data": "poto",width:100}
          // ,
          // {"aaData": "action",width:100}
        ],
        "columnDefs": [
          {
              "targets": [ 5 ],
              "visible": false
          }
        ]
      });
      // getselected rows
      $('#mst_user tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            selection='';
          }else {
            table_user.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selection = table_user.row( this ).data();
          }
      });
      // MENAMBAHKAN NOMOR URUT
      table_user.on( 'order.dt search.dt', function () {
        table_user.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        } );
      }).draw();
    });

    function editUser(){
      sts = 'edit';
      console.log(selection);
      if (selection=='') {}else{
        $('#mod_users').modal('show');
        $("#username").val(selection.username);
        $("#password").val('');
        $("#fullname").val(selection.full_name);
        $("#email").val(selection.email);
        $("#status").val(selection.status);
        $('#ava_img').val(selection.img);
        url='user_ctrl/edit';
      }
    }

    function edituser(id){
      // alert(id);
      // url = 'user_ctrl/edit';
      // $.ajax({
      //   url: 'user_ctrl/get_edit',
      //   data: {'id': id},
      //   type: "post",
      //   async : false,
      //   success: function(data){
      //     response = jQuery.parseJSON(data);
      //     console.log(response);
      //     $('#mod_users').modal('show');
      //   }
      // });
      $("#username").val('');
      $("#password").val('');
      $("#fullname").val('');
      $("#email").val('');
      $("#status").val('');
      $('#ava_img').val('default_0.png');
    };

    function ava0(){
      $('#ava0').addClass('avatar_c');
      $('#ava1').removeClass('avatar_c');
      $('#ava2').removeClass('avatar_c');
      $('#ava3').removeClass('avatar_c');
      $('#ava4').removeClass('avatar_c');
    }
    function ava1(){
      $('#ava0').removeClass('avatar_c');
      $('#ava1').addClass('avatar_c');
      $('#ava2').removeClass('avatar_c');
      $('#ava3').removeClass('avatar_c');
      $('#ava4').removeClass('avatar_c');
    }
    function ava2(){
      $('#ava0').removeClass('avatar_c');
      $('#ava1').removeClass('avatar_c');
      $('#ava2').addClass('avatar_c');
      $('#ava3').removeClass('avatar_c');
      $('#ava4').removeClass('avatar_c');
    }
    function ava3(){
      $('#ava0').removeClass('avatar_c');
      $('#ava1').removeClass('avatar_c');
      $('#ava2').removeClass('avatar_c');
      $('#ava3').addClass('avatar_c');
      $('#ava4').removeClass('avatar_c');
    }
    function ava4(){
      $('#ava0').removeClass('avatar_c');
      $('#ava1').removeClass('avatar_c');
      $('#ava2').removeClass('avatar_c');
      $('#ava3').removeClass('avatar_c');
      $('#ava4').addClass('avatar_c');
    }

    function newUser(){
      sts = 'new';
      $('#mod_users').modal('show');
      // $('#fm_user').form('clear');
      $("#username").val('');
      $("#password").val('');
      $("#fullname").val('');
      $("#email").val('');
      $("#status").val('');
      url = 'user_ctrl/save';
      ava0();
      $('#ava_img').val('default_0.png');
    }

    function del(){
      if (selection!='') {
        $('#mod_delusers').modal('show');
        url = 'user_ctrl/delete';
      }
    }

    function deleteUser(){
      $.post(url,{
        id: selection.id
      }).done(function(res){
        response = jQuery.parseJSON(res);
        console.log(response);
        if (response.errorMsg) {
          alert('error');
        }else{
          $('#mod_delusers').modal('hide');
          table_user.ajax.reload( null, false );
        }
      });
    }

    function setava(ava, id){
      if (id=='ava0') {
        ava0();
      }
      if (id=='ava1') {
        ava1();
      }
      if (id=='ava2') {
        ava2();
      }
      if (id=='ava3') {
        ava3();
      }
      if (id=='ava4') {
        ava4();
      }
      $('#ava_img').val(ava);
    }

    function saveUser(){
      if (sts=='new') {
        console.log(sts+' '+url);
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
            $('#mod_users').modal('hide');
            table_user.ajax.reload( null, false );
          }
        });
      }else{
        $.post(url,{
          id: selection.id,
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
            $('#mod_users').modal('hide');
            table_user.ajax.reload( null, false );
          }
        });
      }
    }
  </script>