<script src="{{asset('adminlayout/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlayout/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('adminlayout/plugins/toastr/toastr.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlayout/dist/js/adminlte.min.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('adminlayout/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminlayout/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
