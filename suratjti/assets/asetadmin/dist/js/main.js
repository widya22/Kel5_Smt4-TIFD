
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
  }

  function resetConfirm(url){
    $('#btn-reset').attr('href', url);
    $('#resetModal').modal();
    }
  
    function konfirmasiConfirm(url){
      $('#btn-konfirm').attr('href', url);
      $('#konfirmModal').modal();
      }

    // $(document).ready(function(){setTimeout(function(){$(".ubah_sukses").fadeIn(('slow');)}, 5000);});
    // $(document).ready(function(){setTimeout(function(){$(".ubah_sukses").fadeOut(('slow');)}, 500);});