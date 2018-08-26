// $(function(){

// });
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