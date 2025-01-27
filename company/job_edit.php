<?php
$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
  echo $obj->connect_error;
  exit;
}
$jobs = $obj->query("select * from job");

$id = $_GET["editid"];
$result = $obj->query("select * from job where Job_id='$id'");
$row = $result->fetch_object();

// echo '<pre>';
// print_r($row);
$Job_type =$row->Job_type;
$Interview_type =$row->Interview_type;

if(isset($_POST["submit"]))
{

  $Title =$_POST["Title"];
  $Description =$_POST["Description"];
  $Job_type =$_POST["Job_type"];
  $Location =$_POST["Location"];
  $Interview_type =$_POST["Interview_type"];
  $No_of_vacancy =$_POST["No_of_vacancy"];
  $Min_salary =$_POST["Min_salary"];
  $Max_salary =$_POST["Max_salary"];
  $Exp_from =$_POST["Exp_from"];
  $Exp_to =$_POST["Exp_to"];
  $Date =$_POST["Date"];
  

  $exe = $obj->query("UPDATE job set Title='$Title' , Description='$Description',Job_type='$Job_type', Location='$Location', Interview_type='$Interview_type', No_of_vacancy='$No_of_vacancy', Min_salary='$Min_salary', Max_salary='$Max_salary', Exp_from='$Exp_from', Exp_to='$Exp_to', Date='$Date' Where Job_id='$id'");
if($exe)
{
	header('location:all_job.php');
}
else
{
	echo "Error";
}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Update Jobs</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<?php include'common/header.php';?>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

				<?php include'common/sidebar.php';?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Manage Jobs</a>
							</li>


							<li class="active">Update Job</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						
						<h3 align="center"><u><b>Update Technology </b></u></h3>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									
								</div><!-- /.row -->

								
								<div class="row">
									<div class="col-xs-12">
										

										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
								<form method="post">
									<table id="dynamic-table" class="table table-striped table-bordered table-hover" align="center">
															
										<tr>
											<td>Title:-</td>
											<td><input type="text" id="Title" name="Title" value="<?php echo $row->Title;?>"></td>
										</tr>
										<tr>
											<td>Description:-</td>
											<td><textarea cols="50" rows="5" id="Description" name="Description" >
												<?php echo $row->Description;?>
											</textarea></td>
										</tr>
										<tr>
											<td>Job_type:</td>
											<td><select id="Job_type" name="Job_type">
												<option value="" selected="" disabled=""></option>
												<option value="Full"<?php if($Job_type == 'Full') echo 'selected';?>>Full time</option>
												<option value="partime" <?php if($Job_type == 'parttime') echo 'selected';?>>Part time</option>
												<option value="freelence" <?php if($Job_type == 'freelence') echo 'selected';?>>Freelence</option>
												<option value="internship" <?php if($Job_type == 'internship') echo 'selected';?>>Internship</option>				
												<option value="termporary" <?php if($Job_type == 'termporary') echo 'selected';?>>Termporary</option>		
											</select></td>
										</tr>
										<tr>
											<td>Location:-</td>
											<td><input type="text" id="Location" name="Location" value="<?php echo $row->Location;?>"></td>
										</tr>
										
										<tr>
											<td>Interview_type:</td>
											<td><input type="radio" id="rdo1" name="Interview_type"<?php if($row->Interview_type == 'online')echo "checked";?> value="online"> Online
												<input type="radio" id="rdo2" name="Interview_type"<?php if($row->Interview_type == 'offline')echo "checked";?> value="offline"> Offline
											</td>
										</tr>
										<tr>
											<td>No_of_vacancy:-</td>
											<td><input type="text" id="No_of_vacancy" name="No_of_vacancy" value="<?php echo $row->No_of_vacancy;?>"></td>
										</tr>
										<tr>
											<td>Min_salary:-</td>
											<td><input type="text" id="Min_salary" name="Min_salary" value="<?php echo $row->Min_salary;?>"></td>
										</tr>
										<tr>
											<td>Max_salary:-</td>
											<td><input type="text" id="Max_salary" name="Max_salary" value="<?php echo $row->Max_salary;?>"></td>
										</tr>
										<tr>
											<td>Exp_from:-</td>
											<td><input type="text" id="Exp_from" name="Exp_from" value="<?php echo $row->Exp_from;?>"></td>
										</tr>
										<tr>
											<td>Exp_to:-</td>
											<td><input type="text" id="Exp_to" name="Exp_to" value="<?php echo $row->Exp_to;?>"></td>
										</tr>
										<tr>
											<td>Date:-</td>
											<td><input type="text" id="Date" name="Date" value="<?php echo $row->Date;?>"></td>
										</tr>
										
										<tr>
											<td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Update">
											</td>
										</tr>
									</table>
								</form>
								<br/>
								<br/>
										</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
							</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
				
		</div><!-- /.main-container -->
<div class="footer">
				<div class="footer-inner">
			<?php include'common /footer.php' ;?>
			</div>
		</div>
	</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
					//"bServerSide": true,
					//"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
				} );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/*****/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/*****/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>