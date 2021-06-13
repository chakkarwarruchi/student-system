<html>
<head>
<title>Add Remove Multiple Input Fields Dynamically Using Jquery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<form method="POST">
<div class="col-md-12">
<div class="input_fields_wrap">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="">name</label>
<input type="text" name="naam[]" class="form-control" required>
</div>
<div class="form-group" >
<label for="">gender</label>
<input name="gendu[]" type="text" value="" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">branch</label>
<textarea name="bra[]" class="form-control" required></textarea>
</div>
</div>
<button style="background-color:green;" class="add_field_button btn btn-info active">Add More Address</button>
</div>
</div>
</div>
<input type="submit" name="submit">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
var max_fields = 15; //maximum input boxes allowed
var wrapper = $(".input_fields_wrap"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button ID
var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="">name</label><input type="text" required name="naam[]" class="form-control"></div><div class="form-group"><label for="">gender</label><input name="gendu[]" type="text" class="form-control" required></div></div><div class="col-md-6"><div class="form-group"><label for="">branch</label><textarea name="bra[]" class="form-control" required></textarea></div></div><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">Remove</div></div>'); //add input box
}
});
$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
</script>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	print_r($_POST);
	exit();0
}
?>