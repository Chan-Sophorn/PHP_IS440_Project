<!DOCTYPE html>
<html>
<head>
	<title>Project IS440</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- ******* For Date Picker ******-->  
  <link href="DatePicker/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src="DatePicker/js/gijgo.min.js" type="text/javascript"></script>
  <style type="text/css">
  	 #text{
  		text-align: center;
  		transition: all 1s;
  	}
  </style>
</head>
<body>
	<div id="text" onmouseover="textStyle()" onmouseout="erase()"><h3> Hello All PHP Developer</h3></div>



<script type="text/javascript" src="script.js"></script>
	<!-- modal delete -->
  <div class="modal fade" id="confirm-delete">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header bg-danger">
          <h4 class="modal-title">Warning!</h4>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          Are you sure you want to delete this.
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <a class="btn btn-success btn-ok">Yes</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- end modal delete -->



<script type="text/javascript">
  $("#vsFadeOff").fadeTo(2000, 500).slideUp(500, function(){
      $("#vsFadeOff").slideUp(500);
      window.location.replace("Userlist.php");
  });
  $("#vsFadeOffUpdate").fadeTo(2000, 500).slideUp(500, function(){
      $("#vsFadeOffUpdate").slideUp(500);      
  });
  
  $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
  $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });


   function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#showImage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgTmp").change(function() {
  readURL(this);
});
</script>
</body>
</html>