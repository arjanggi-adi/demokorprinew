<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<script>
					document.write(new Date().getFullYear())
				</script> © KORPRI Bali All Rights Reserved.
			</div>
			<div class="col-sm-6">
				<div class="text-sm-end d-none d-sm-block">
					Design & Develop by KORPRI BALI
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
</div>
</div>

<div class="rightbar-overlay"></div>

<script src="<?php echo base_url(); ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/metismenu/metismenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/node-waves/node-waves.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/dashboard-blog.init.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/dropzone/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jscolor.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/datatables.init.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/lightbox.init.js"></script>
<!-- <script src="<?php echo base_url(); ?>public/admin/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/select2.full.min.js"></script>
	
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.fancybox.pack.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/app.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/summernote.js"></script>
	
	<script src="<?php echo base_url(); ?>public/admin/js/demo.js"></script> -->


<script>
	$(document).ready(function() {
		$('#editor1').summernote({
			height: 300
		});
		$('#editor2').summernote({
			height: 300
		});
		$('#editor3').summernote({
			height: 300
		});
		$('#editor4').summernote({
			height: 300
		});
		$('#editor5').summernote({
			height: 300
		});
		$('#editor_short').summernote({
			height: 100
		});
	});

	$(function() {
		//Initialize Select2 Elements
		$(".select2").select2();

		//Datemask dd/mm/yyyy
		$("#datemask").inputmask("dd-mm-yyyy", {
			"placeholder": "dd-mm-yyyy"
		});
		//Datemask2 mm/dd/yyyy
		$("#datemask2").inputmask("mm-dd-yyyy", {
			"placeholder": "mm-dd-yyyy"
		});
		//Money Euro
		$("[data-mask]").inputmask();

		//Date picker
		$('#datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd',
			todayBtn: 'linked',
		});

		$('#datepicker1').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd',
			todayBtn: 'linked',
		});

		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});
		//Red color scheme for iCheck
		$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red'
		});
		//Flat red color scheme for iCheck
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green'
		});



		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});

		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});

	});
</script>

<script type="text/javascript">
	$(document).ready(function() {

		$("#btnAddNew").click(function() {

			var rowNumber = $("#PhotosTable tbody tr").length;

			var trNew = "";

			var addLink = "<div class=\"upload-btn" + rowNumber + "\"><input type=\"file\" name=\"photos[]\"></div>";

			var deleteRow = "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";

			trNew = trNew + "<tr> ";

			trNew += "<td>" + addLink + "</td>";
			trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";

			trNew = trNew + " </tr>";

			$("#PhotosTable tbody").append(trNew);

		});

		$('#PhotosTable').delegate('a.Delete', 'click', function() {
			$(this).parent().parent().fadeOut('slow').remove();
			return false;
		});


	});
</script>
</body>

</html>