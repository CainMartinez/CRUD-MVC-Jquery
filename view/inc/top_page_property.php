<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PropertyHouses</title>
		<link rel="icon" href="/view/img/casa.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css"/>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('#date_publication').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1900:2030',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
	    <script src="module/property/model/validate_property.js"></script>
	    <script src="js/promise.js"></script>

		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </head>
    <body>