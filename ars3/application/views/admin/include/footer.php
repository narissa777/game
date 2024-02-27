 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer text-sm">
  <strong>Copyright &copy; 2023 <a href="https://technolobal.com">Technolobal Bilişim</a>.</strong>
  <div class="float-right d-none d-sm-inline-block">
    <b>Versiyon</b> 2.12D4.1
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#dark-mode-control").click(function(){
      if ($('body').hasClass('dark-mode')) {
        $('body').removeClass("dark-mode");
        $('#gunes').removeClass("fas fa-moon").addClass("fas fa-sun"); 
      }else {
        $('body').addClass('dark-mode');
        $('#gunes').removeClass("fas fa-sun").addClass("fas fa-moon");
      }
      localStorage.setItem('mode',document.body.classList);
      console.log(localStorage.getItem('mode'));
    });
    
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

   console.log(localStorage.getItem('mode'));
   if(localStorage.getItem('mode') == 'sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse')
   {
    $('body').removeClass("dark-mode");
    $('#gunes').removeClass("fas fa-moon").addClass("fas fa-sun");
  }else{
    $('body').addClass('dark-mode');
    $('#gunes').removeClass("fas fa-sun").addClass("fas fa-moon");
  }

});
</script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/js/dataTables.searchPanes.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/js/dataTables.searchPanes.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/js/searchPanes.bootstrap4.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-searchpanes/js/searchPanes.bootstrap4.min.js"></script>

<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-fixedheader/js/dataTables.fixedHeader.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.js"></script>
<script src="<?php echo base_url('assets/backend/assets/'); ?>plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.21/sorting/datetime-moment.js"></script>
<script src="<?php echo base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
  });
</script>


<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.11.3/api/sum().js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/backend/assets'); ?>dist/js/pages/dashboard2.js"></script>
<script>
  $(document).ready(function() {
    $('#category').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "select":true,
    dom: 'Blfrtip',
    lengthMenu: [ 10, 25, 50, 75, 100 ],
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]
  });  
  } );
</script>
<script>
  $(document).ready(function() {
    $('#banka').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#nesne').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#havaleler').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ordering": true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 }
    ],
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#personelpetrol').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "ordering": true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 2 }
    ],
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#musteriler').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      processing: "Yükleniyor...",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "processing": true,
    "serverSide": true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 }
    ],
    "select":true,
    ajax:{
      url :"../Serverside_controller/musterigoruntule_serverside/", 
      type: "POST"  
    },
    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#barkodlar').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      processing: "Yükleniyor...",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "processing": true,
    "serverSide": true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 }
    ],
    "select":true,
    ajax:{
      url :"../Serverside_controller/barkodgoruntule_serverside/", 
      type: "POST"  
    },
    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script type="text/javascript">
  $(document).ready(function(){
        var baslangicInput = $('#baslangicTarihi');
        var bitisInput = $('#bitisTarihi');
        var bugun = new Date();
        var bugunStr = bugun.toISOString().split('T')[0];
        baslangicInput.val(bugunStr);
        bitisInput.val(bugunStr);
  });
</script>
<script>
  $(document).ready(function() {
    var loglarTable = $('#loglar').DataTable( {
      language: {
        info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
        infoEmpty:      "Gösterilecek hiç kayıt yok.",
        loadingRecords: "Kayıtlar yükleniyor.",
        lengthMenu: "Sayfada _MENU_ kayıt göster",
        processing: "Yükleniyor...",
        zeroRecords: "Tablo boş",
        search: "Arama:",
        "select": {
          "rows": {
            "_": "%d kayıt seçildi",
            "1": "1 kayıt seçildi"
          },
        },
        infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
        buttons: {
          copyTitle: "Panoya kopyalandı.",
          copySuccess:"Panoya %d satır kopyalandı",
          copy: "Kopyala",
          print: "Yazdır",
          colvis: "Sütun Görünürlüğü",
        },
        paginate: {
          first: "İlk",
          previous: "Önceki",
          next: "Sonraki",
          last: "Son"
        },
      },
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "processing": true,
      "searchPanes": true,
      "searchBuilder": true,
      "serverSide": true,
      "order":[[ 0, "desc" ]],
      "columnDefs": [
      { "visible": false, "targets": 0 }
      ],
      "select":true,
      ajax:{
        url :"../Serverside_controller/loglar_serverside/", 
        type: "POST",
        data: function (d) {
        d.baslangic = $('#baslangicTarihi').val();
        d.bitis = $('#bitisTarihi').val();
        d.ono = $('#ono').val();
      }
      },
      dom: 'Blfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print',
      'colvis'

      ]

    });
      $('#baslangicTarihi, #bitisTarihi').on('change', function() {
    loglarTable.ajax.reload();
  });
      $('#ono').on('change', function() {
    loglarTable.ajax.reload();
  });
  } );
</script>
<script>
  $(document).ready(function() {
    $.fn.dataTable.moment( 'DD.MM.YYYY' );
    var siparis =  $('#siparis').DataTable( {
     language: {

      "emptyTable": "Tabloda herhangi bir veri mevcut değil",
      "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
      "infoEmpty": "Kayıt yok",
      "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
      "infoThousands": ".",
      "lengthMenu": "Sayfada _MENU_ kayıt göster",
      "loadingRecords": "Yükleniyor...",
      "processing": "İşleniyor...",
      "search": "Ara:",
      "zeroRecords": "Eşleşen kayıt bulunamadı",
      "paginate": {
        "first": "İlk",
        "last": "Son",
        "next": "Sonraki",
        "previous": "Önceki"
      },
      "aria": {
        "sortAscending": ": artan sütun sıralamasını aktifleştir",
        "sortDescending": ": azalan sütun sıralamasını aktifleştir"
      },
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
        "cells": {
          "1": "1 hücre seçildi",
          "_": "%d hücre seçildi"
        },
        "columns": {
          "1": "1 sütun seçildi",
          "_": "%d sütun seçildi"
        }
      },
      "autoFill": {
        "cancel": "İptal",
        "fillHorizontal": "Hücreleri yatay olarak doldur",
        "fillVertical": "Hücreleri dikey olarak doldur",
        "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
      },
      "buttons": {
        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Sütun görünürlüğü",
        "colvisRestore": "Görünürlüğü eski haline getir",
        "copySuccess": {
          "1": "1 satır panoya kopyalandı",
          "_": "%ds satır panoya kopyalandı"
        },
        "copyTitle": "Panoya kopyala",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
          "-1": "Bütün satırları göster",
          "_": "%d satır göster"
        },
        "pdf": "PDF",
        "print": "Yazdır",
        "copy": "Kopyala",
        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın."
      },
      "searchBuilder": {
        "add": "Koşul Ekle",
        "button": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "valueJoiner": "ve",
        "condition": "Koşul",
        "conditions": {
          "date": {
            "after": "Sonra",
            "before": "Önce",
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "number": {
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "gt": "Büyüktür",
            "gte": "Büyük eşittir",
            "lt": "Küçüktür",
            "lte": "Küçük eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "string": {
            "contains": "İçerir",
            "empty": "Boş",
            "endsWith": "İle biter",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "startsWith": "İle başlar",
            "notStartsWith": "İle Başlamaz",
            "notEndsWith": "İle Bitmez",
            "notContains": "İçermez"
          },
          "array": {
            "contains": "İçerir",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "without": "Hariç"
          }
        },
        "data": "Veri",
        "deleteTitle": "Filtreleme kuralını silin",
        "leftTitle": "Kriteri dışarı çıkart",
        "logicAnd": "ve",
        "logicOr": "veya",
        "rightTitle": "Kriteri içeri al",
        "title": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "value": "Değer",
        "clearAll": "Filtreleri Temizle",
      },
      "searchPanes": {
        "collapseMessage": "Kategorileri Küçült",
        "showMessage": "Tümünü Göster",
        "clearMessage": "Filtreleri Temizle",
        "collapse": {
          "0": "Filtre Uygula",
          "_": "Filtrelendi (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown}\/{total}",
        "emptyPanes": "Arama Bölmesi yok",
        "loadMessage": "Arama Bölmeleri yükleniyor ...",
        "title": "Etkin filtreler - %d"
      },
      "thousands": ".",
      "datetime": {
        "amPm": [
        "öö",
        "ös"
        ],
        "hours": "Saat",
        "minutes": "Dakika",
        "next": "Sonraki",
        "previous": "Önceki",
        "seconds": "Saniye",
        "unknown": "Bilinmeyen",
        "weekdays": {
          "6": "Paz",
          "5": "Cmt",
          "4": "Cum",
          "3": "Per",
          "2": "Çar",
          "1": "Sal",
          "0": "Pzt"
        },
        "months": {
          "9": "Ekim",
          "8": "Eylül",
          "7": "Ağustos",
          "6": "Temmuz",
          "5": "Haziran",
          "4": "Mayıs",
          "3": "Nisan",
          "2": "Mart",
          "11": "Aralık",
          "10": "Kasım",
          "1": "Şubat",
          "0": "Ocak"
        }
      },
      "decimal": ",",
      "editor": {
        "close": "Kapat",
        "create": {
          "button": "Yeni",
          "submit": "Kaydet",
          "title": "Yeni kayıt oluştur"
        },
        "edit": {
          "button": "Düzenle",
          "submit": "Güncelle",
          "title": "Kaydı düzenle"
        },
        "error": {
          "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
        },
        "multi": {
          "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
          "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
          "restore": "Değişiklikleri geri al",
          "title": "Çoklu değer"
        },
        "remove": {
          "button": "Sil",
          "confirm": {
            "_": "%d adet kaydı silmek istediğinize emin misiniz?",
            "1": "Bu kaydı silmek istediğinizden emin misiniz?"
          },
          "submit": "Sil",
          "title": "Kayıtları sil"
        }
      }

    },
    "processing": true,
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "searchPanes": true,
    "searchBuilder": true,
    "select":true,
    "fixedHeader":true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 },

    {
      searchPanes: {
        show: true
      },
      targets: [1,2,5]
    },
    {
      searchPanes: {
        show: false
      },
      targets: [3,4,6,7,8,9,10,11,12]
    }

    ],
    dom: 'Blfrtip',
    lengthMenu: [ 10, 25, 50, 75, 100 ],
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis','searchPanes'

    ],
  });
 siparis.searchBuilder.container().prependTo(siparis.table().container());
} );
</script>
<script>
  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
      var min = parseInt( $('#min').val(), 10 );
      var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[8] ) || 0; // use data for the age column

        if ( ( isNaN( min ) && isNaN( max ) ) ||
         ( isNaN( min ) && age <= max ) ||
         ( min <= age   && isNaN( max ) ) ||
         ( min <= age   && age <= max ) )
        {
          return true;
        }
        return false;
      }
      );
  $(document).ready(function() {
   $('#geciken').DataTable( {
     language: {

      "emptyTable": "Tabloda herhangi bir veri mevcut değil",
      "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
      "infoEmpty": "Kayıt yok",
      "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
      "infoThousands": ".",
      "lengthMenu": "Sayfada _MENU_ kayıt göster",
      "loadingRecords": "Yükleniyor...",
      "processing": "İşleniyor...",
      "search": "Ara:",
      "zeroRecords": "Eşleşen kayıt bulunamadı",
      "paginate": {
        "first": "İlk",
        "last": "Son",
        "next": "Sonraki",
        "previous": "Önceki"
      },
      "aria": {
        "sortAscending": ": artan sütun sıralamasını aktifleştir",
        "sortDescending": ": azalan sütun sıralamasını aktifleştir"
      },
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
        "cells": {
          "1": "1 hücre seçildi",
          "_": "%d hücre seçildi"
        },
        "columns": {
          "1": "1 sütun seçildi",
          "_": "%d sütun seçildi"
        }
      },
      "autoFill": {
        "cancel": "İptal",
        "fillHorizontal": "Hücreleri yatay olarak doldur",
        "fillVertical": "Hücreleri dikey olarak doldur",
        "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
      },
      "buttons": {
        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Sütun görünürlüğü",
        "colvisRestore": "Görünürlüğü eski haline getir",
        "copySuccess": {
          "1": "1 satır panoya kopyalandı",
          "_": "%ds satır panoya kopyalandı"
        },
        "copyTitle": "Panoya kopyala",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
          "-1": "Bütün satırları göster",
          "_": "%d satır göster"
        },
        "pdf": "PDF",
        "print": "Yazdır",
        "copy": "Kopyala",
        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın."
      },
      "searchBuilder": {
        "add": "Koşul Ekle",
        "button": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "condition": "Koşul",
        "conditions": {
          "date": {
            "after": "Sonra",
            "before": "Önce",
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "number": {
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "gt": "Büyüktür",
            "gte": "Büyük eşittir",
            "lt": "Küçüktür",
            "lte": "Küçük eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "string": {
            "contains": "İçerir",
            "empty": "Boş",
            "endsWith": "İle biter",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "startsWith": "İle başlar"
          },
          "array": {
            "contains": "İçerir",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "without": "Hariç"
          }
        },
        "data": "Veri",
        "deleteTitle": "Filtreleme kuralını silin",
        "leftTitle": "Kriteri dışarı çıkart",
        "logicAnd": "ve",
        "logicOr": "veya",
        "rightTitle": "Kriteri içeri al",
        "title": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "value": "Değer",
        "clearAll": "Filtreleri Temizle",
      },
      "searchPanes": {
        "collapseMessage": "Kategorileri Küçült",
        "showMessage": "Tümünü Göster",
        "clearMessage": "Filtreleri Temizle",
        "collapse": {
          "0": "Filtre Uygula",
          "_": "Filtrelendi (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown}\/{total}",
        "emptyPanes": "Arama Bölmesi yok",
        "loadMessage": "Arama Bölmeleri yükleniyor ...",
        "title": "Etkin filtreler - %d"
      },
      "thousands": ".",
      "datetime": {
        "amPm": [
        "öö",
        "ös"
        ],
        "hours": "Saat",
        "minutes": "Dakika",
        "next": "Sonraki",
        "previous": "Önceki",
        "seconds": "Saniye",
        "unknown": "Bilinmeyen",
        "weekdays": {
          "6": "Paz",
          "5": "Cmt",
          "4": "Cum",
          "3": "Per",
          "2": "Çar",
          "1": "Sal",
          "0": "Pzt"
        },
        "months": {
          "9": "Ekim",
          "8": "Eylül",
          "7": "Ağustos",
          "6": "Temmuz",
          "5": "Haziran",
          "4": "Mayıs",
          "3": "Nisan",
          "2": "Mart",
          "11": "Aralık",
          "10": "Kasım",
          "1": "Şubat",
          "0": "Ocak"
        }
      },
      "decimal": ",",
      "editor": {
        "close": "Kapat",
        "create": {
          "button": "Yeni",
          "submit": "Kaydet",
          "title": "Yeni kayıt oluştur"
        },
        "edit": {
          "button": "Düzenle",
          "submit": "Güncelle",
          "title": "Kaydı düzenle"
        },
        "error": {
          "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
        },
        "multi": {
          "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
          "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
          "restore": "Değişiklikleri geri al",
          "title": "Çoklu değer"
        },
        "remove": {
          "button": "Sil",
          "confirm": {
            "_": "%d adet kaydı silmek istediğinize emin misiniz?",
            "1": "Bu kaydı silmek istediğinizden emin misiniz?"
          },
          "submit": "Sil",
          "title": "Kayıtları sil"
        }
      }

    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "searchPanes": true,
    "select":true,
    "order":[[ 9, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 },

    {
      searchPanes: {
        show: true
      },
      targets: [1,2,3,8,9]
    },
    {
      searchPanes: {
        show: false
      },
      targets: [4,5,6]
    }
    ],
    dom: 'Blfrtip',
    lengthMenu: [ 10, 25, 50, 75, 100 ],
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis','searchPanes'

    ]

  });
 var table = $('#geciken').DataTable();

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
      table.draw();
    } );
  } );
</script>
<script>
  $(document).ready(function() {
   $('#ortvade').DataTable( {
     language: {

      "emptyTable": "Tabloda herhangi bir veri mevcut değil",
      "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
      "infoEmpty": "Kayıt yok",
      "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
      "infoThousands": ".",
      "lengthMenu": "Sayfada _MENU_ kayıt göster",
      "loadingRecords": "Yükleniyor...",
      "processing": "İşleniyor...",
      "search": "Ara:",
      "zeroRecords": "Eşleşen kayıt bulunamadı",
      "paginate": {
        "first": "İlk",
        "last": "Son",
        "next": "Sonraki",
        "previous": "Önceki"
      },
      "aria": {
        "sortAscending": ": artan sütun sıralamasını aktifleştir",
        "sortDescending": ": azalan sütun sıralamasını aktifleştir"
      },
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
        "cells": {
          "1": "1 hücre seçildi",
          "_": "%d hücre seçildi"
        },
        "columns": {
          "1": "1 sütun seçildi",
          "_": "%d sütun seçildi"
        }
      },
      "autoFill": {
        "cancel": "İptal",
        "fillHorizontal": "Hücreleri yatay olarak doldur",
        "fillVertical": "Hücreleri dikey olarak doldur",
        "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
      },
      "buttons": {
        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Sütun görünürlüğü",
        "colvisRestore": "Görünürlüğü eski haline getir",
        "copySuccess": {
          "1": "1 satır panoya kopyalandı",
          "_": "%ds satır panoya kopyalandı"
        },
        "copyTitle": "Panoya kopyala",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
          "-1": "Bütün satırları göster",
          "_": "%d satır göster"
        },
        "pdf": "PDF",
        "print": "Yazdır",
        "copy": "Kopyala",
        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın."
      },
      "searchBuilder": {
        "add": "Koşul Ekle",
        "button": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "condition": "Koşul",
        "conditions": {
          "date": {
            "after": "Sonra",
            "before": "Önce",
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "number": {
            "between": "Arasında",
            "empty": "Boş",
            "equals": "Eşittir",
            "gt": "Büyüktür",
            "gte": "Büyük eşittir",
            "lt": "Küçüktür",
            "lte": "Küçük eşittir",
            "not": "Değildir",
            "notBetween": "Dışında",
            "notEmpty": "Dolu"
          },
          "string": {
            "contains": "İçerir",
            "empty": "Boş",
            "endsWith": "İle biter",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "startsWith": "İle başlar"
          },
          "array": {
            "contains": "İçerir",
            "empty": "Boş",
            "equals": "Eşittir",
            "not": "Değildir",
            "notEmpty": "Dolu",
            "without": "Hariç"
          }
        },
        "data": "Veri",
        "deleteTitle": "Filtreleme kuralını silin",
        "leftTitle": "Kriteri dışarı çıkart",
        "logicAnd": "ve",
        "logicOr": "veya",
        "rightTitle": "Kriteri içeri al",
        "title": {
          "0": "Arama Oluşturucu",
          "_": "Arama Oluşturucu (%d)"
        },
        "value": "Değer",
        "clearAll": "Filtreleri Temizle",
      },
      "searchPanes": {
        "collapseMessage": "Kategorileri Küçült",
        "showMessage": "Tümünü Göster",
        "clearMessage": "Filtreleri Temizle",
        "collapse": {
          "0": "Filtre Uygula",
          "_": "Filtrelendi (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown}\/{total}",
        "emptyPanes": "Arama Bölmesi yok",
        "loadMessage": "Arama Bölmeleri yükleniyor ...",
        "title": "Etkin filtreler - %d"
      },
      "thousands": ".",
      "datetime": {
        "amPm": [
        "öö",
        "ös"
        ],
        "hours": "Saat",
        "minutes": "Dakika",
        "next": "Sonraki",
        "previous": "Önceki",
        "seconds": "Saniye",
        "unknown": "Bilinmeyen",
        "weekdays": {
          "6": "Paz",
          "5": "Cmt",
          "4": "Cum",
          "3": "Per",
          "2": "Çar",
          "1": "Sal",
          "0": "Pzt"
        },
        "months": {
          "9": "Ekim",
          "8": "Eylül",
          "7": "Ağustos",
          "6": "Temmuz",
          "5": "Haziran",
          "4": "Mayıs",
          "3": "Nisan",
          "2": "Mart",
          "11": "Aralık",
          "10": "Kasım",
          "1": "Şubat",
          "0": "Ocak"
        }
      },
      "decimal": ",",
      "editor": {
        "close": "Kapat",
        "create": {
          "button": "Yeni",
          "submit": "Kaydet",
          "title": "Yeni kayıt oluştur"
        },
        "edit": {
          "button": "Düzenle",
          "submit": "Güncelle",
          "title": "Kaydı düzenle"
        },
        "error": {
          "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
        },
        "multi": {
          "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
          "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
          "restore": "Değişiklikleri geri al",
          "title": "Çoklu değer"
        },
        "remove": {
          "button": "Sil",
          "confirm": {
            "_": "%d adet kaydı silmek istediğinize emin misiniz?",
            "1": "Bu kaydı silmek istediğinizden emin misiniz?"
          },
          "submit": "Sil",
          "title": "Kayıtları sil"
        }
      }

    },
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "searchPanes": true,
    "fixedHeader":true,
    "select":true,
    "order":[[ 0, "desc" ]],
    "columnDefs": [
    { "visible": false, "targets": 0 },
    
    {
      searchPanes: {
        show: true
      },
      targets: [1,2,3,5]
    },
    {
      searchPanes: {
        show: false
      },
      targets: [4]
    }

    ],
    dom: 'Blfrtip',
    lengthMenu: [ 10, 25, 50, 75, 100 ],
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis','searchPanes'

    ]

  });
} );
</script>
<script>
  $(document).ready(function() {
    $('#vad').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": false,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "order":[[ 1, "desc" ]],
    "responsive": true,
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $('#vade').DataTable( {
     language: {
      info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
      infoEmpty:      "Gösterilecek hiç kayıt yok.",
      loadingRecords: "Kayıtlar yükleniyor.",
      lengthMenu: "Sayfada _MENU_ kayıt göster",
      zeroRecords: "Tablo boş",
      search: "Arama:",
      "select": {
        "rows": {
          "_": "%d kayıt seçildi",
          "1": "1 kayıt seçildi"
        },
      },
      infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
      buttons: {
        copyTitle: "Panoya kopyalandı.",
        copySuccess:"Panoya %d satır kopyalandı",
        copy: "Kopyala",
        print: "Yazdır",
        colvis: "Sütun Görünürlüğü",
      },

      paginate: {
        first: "İlk",
        previous: "Önceki",
        next: "Sonraki",
        last: "Son"
      },
    },
    "paging": false,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "order":[[ 1, "desc" ]],
    "responsive": true,
    "select":true,

    dom: 'Blfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print',
    'colvis'

    ]

  });
  } );
</script>
<script>
  $(document).ready(function() {
    $.fn.dataTable.moment( 'DD.MM.YYYY' );
    var masraf = $('#masraf').DataTable( {
      language: {

        "emptyTable": "Tabloda herhangi bir veri mevcut değil",
        "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
        "infoEmpty": "Kayıt yok",
        "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
        "infoThousands": ".",
        "lengthMenu": "Sayfada _MENU_ kayıt göster",
        "loadingRecords": "Yükleniyor...",
        "processing": "İşleniyor...",
        "search": "Ara:",
        "zeroRecords": "Eşleşen kayıt bulunamadı",
        "paginate": {
          "first": "İlk",
          "last": "Son",
          "next": "Sonraki",
          "previous": "Önceki"
        },
        "aria": {
          "sortAscending": ": artan sütun sıralamasını aktifleştir",
          "sortDescending": ": azalan sütun sıralamasını aktifleştir"
        },
        "select": {
          "rows": {
            "_": "%d kayıt seçildi",
            "1": "1 kayıt seçildi"
          },
          "cells": {
            "1": "1 hücre seçildi",
            "_": "%d hücre seçildi"
          },
          "columns": {
            "1": "1 sütun seçildi",
            "_": "%d sütun seçildi"
          }
        },
        "autoFill": {
          "cancel": "İptal",
          "fillHorizontal": "Hücreleri yatay olarak doldur",
          "fillVertical": "Hücreleri dikey olarak doldur",
          "fill": "Bütün hücreleri <i>%d<\/i> ile doldur"
        },
        "buttons": {
          "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
          "colvis": "Sütun görünürlüğü",
          "colvisRestore": "Görünürlüğü eski haline getir",
          "copySuccess": {
            "1": "1 satır panoya kopyalandı",
            "_": "%ds satır panoya kopyalandı"
          },
          "copyTitle": "Panoya kopyala",
          "csv": "CSV",
          "excel": "Excel",
          "pageLength": {
            "-1": "Bütün satırları göster",
            "_": "%d satır göster"
          },
          "pdf": "PDF",
          "print": "Yazdır",
          "copy": "Kopyala",
          "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın."
        },
        "searchBuilder": {
          "add": "Koşul Ekle",
          "button": {
            "0": "Arama Oluşturucu",
            "_": "Arama Oluşturucu (%d)"
          },
          "valueJoiner": "ve",
          "condition": "Koşul",
          "conditions": {
            "date": {
              "after": "Sonra",
              "before": "Önce",
              "between": "Arasında",
              "empty": "Boş",
              "equals": "Eşittir",
              "not": "Değildir",
              "notBetween": "Dışında",
              "notEmpty": "Dolu"
            },
            "number": {
              "between": "Arasında",
              "empty": "Boş",
              "equals": "Eşittir",
              "gt": "Büyüktür",
              "gte": "Büyük eşittir",
              "lt": "Küçüktür",
              "lte": "Küçük eşittir",
              "not": "Değildir",
              "notBetween": "Dışında",
              "notEmpty": "Dolu"
            },
            "string": {
              "contains": "İçerir",
              "empty": "Boş",
              "endsWith": "İle biter",
              "equals": "Eşittir",
              "not": "Değildir",
              "notEmpty": "Dolu",
              "startsWith": "İle başlar",
              "notStartsWith": "İle Başlamaz",
              "notEndsWith": "İle Bitmez",
              "notContains": "İçermez"
            },
            "array": {
              "contains": "İçerir",
              "empty": "Boş",
              "equals": "Eşittir",
              "not": "Değildir",
              "notEmpty": "Dolu",
              "without": "Hariç"
            }
          },
          "data": "Veri",
          "deleteTitle": "Filtreleme kuralını silin",
          "leftTitle": "Kriteri dışarı çıkart",
          "logicAnd": "ve",
          "logicOr": "veya",
          "rightTitle": "Kriteri içeri al",
          "title": {
            "0": "Arama Oluşturucu",
            "_": "Arama Oluşturucu (%d)"
          },
          "value": "Değer",
          "clearAll": "Filtreleri Temizle",
        },
        "searchPanes": {
          "collapseMessage": "Kategorileri Küçült",
          "showMessage": "Tümünü Göster",
          "clearMessage": "Filtreleri Temizle",
          "collapse": {
            "0": "Filtre Uygula",
            "_": "Filtrelendi (%d)"
          },
          "count": "{total}",
          "countFiltered": "{shown}\/{total}",
          "emptyPanes": "Arama Bölmesi yok",
          "loadMessage": "Arama Bölmeleri yükleniyor ...",
          "title": "Etkin filtreler - %d"
        },
        "thousands": ".",
        "datetime": {
          "amPm": [
          "öö",
          "ös"
          ],
          "hours": "Saat",
          "minutes": "Dakika",
          "next": "Sonraki",
          "previous": "Önceki",
          "seconds": "Saniye",
          "unknown": "Bilinmeyen",
          "weekdays": {
            "6": "Paz",
            "5": "Cmt",
            "4": "Cum",
            "3": "Per",
            "2": "Çar",
            "1": "Sal",
            "0": "Pzt"
          },
          "months": {
            "9": "Ekim",
            "8": "Eylül",
            "7": "Ağustos",
            "6": "Temmuz",
            "5": "Haziran",
            "4": "Mayıs",
            "3": "Nisan",
            "2": "Mart",
            "11": "Aralık",
            "10": "Kasım",
            "1": "Şubat",
            "0": "Ocak"
          }
        },
        "decimal": ",",
        "editor": {
          "close": "Kapat",
          "create": {
            "button": "Yeni",
            "submit": "Kaydet",
            "title": "Yeni kayıt oluştur"
          },
          "edit": {
            "button": "Düzenle",
            "submit": "Güncelle",
            "title": "Kaydı düzenle"
          },
          "error": {
            "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
          },
          "multi": {
            "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
            "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
            "restore": "Değişiklikleri geri al",
            "title": "Çoklu değer"
          },
          "remove": {
            "button": "Sil",
            "confirm": {
              "_": "%d adet kaydı silmek istediğinize emin misiniz?",
              "1": "Bu kaydı silmek istediğinizden emin misiniz?"
            },
            "submit": "Sil",
            "title": "Kayıtları sil"
          }
        }

      },
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "searchBuilder": true,
      "order":[[ 0, "desc" ]],
      "responsive": true,
      "select":true,

      dom: 'Blfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print',
      'colvis'

      ]

    });
 masraf.searchBuilder.container().prependTo(masraf.table().container());
} );
</script>
<script src="<?php echo base_url('assets/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
<script type="text/javascript">$(document).ready(function() {
  $('#field-name').mask('SS00 0000 0000 0000 0000 00', {
    placeholder: '____ ____ ____ ____ ____ __'
  });
});</script>
<script type="text/javascript">
  function setSelectionRange(input, selectionStart, selectionEnd) {
    if (input.setSelectionRange) {
      input.focus();
      input.setSelectionRange(selectionStart, selectionEnd);
    } else if (input.createTextRange) {
      var range = input.createTextRange();
      range.collapse(true);
      console.log(collapse);
      range.moveEnd('character', selectionEnd);
      range.moveStart('character', selectionStart);       
      range.select();
    }
  }

  function setCaretToPos(input, pos) {
    setSelectionRange(input, pos, pos);
  }


  $("#money").click(function() {
    var inputLength = $("#money").val().length;
    setCaretToPos($("#money")[0], inputLength)
  });

  var options = {
    onKeyPress: function(cep, e, field, options){
      if (cep.length<=6)
      {

        var inputVal = parseFloat(cep);
        jQuery('#money').val(inputVal.toFixed(2));
      }

      // setCaretToPos(jQuery('#money')[0], 4);

      var masks = ['#.##0', '0'];
      mask = (cep == 0) ? masks[1] : masks[0];
      $('#money').mask(mask, options);
      $('#metre').mask(mask, options);
    },
    reverse: true
  };

  $('#money').mask('#.##0', options);
  $('#metre').mask('#.##0', options);
</script>
</body>
</html>