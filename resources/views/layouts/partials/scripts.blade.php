<!--<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"> </script>-->


<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- Toastr -->
<script src="{{ asset('/js/toastr.min.js') }}" type="text/javascript"></script>
{!! Toastr::render() !!}
<!-- SweetAlert2 -->
<script src="{{ asset('/js/sweetalert2.min.js') }}" type="text/javascript"></script>
<!-- datepicker Bootstrap cdn -->
<script type="text/javascript"
src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
</script>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
} );


$(function () {
	$(".datepicker , #datepicker").datepicker({
		autoclose: true,
		todayHighlight: true
	}).datepicker('update', new Date());
});
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. Slimscroll is required when using the
fixed layout. -->
@yield('scripts-extra')
