<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>Are you interested in promoting Offers</p>
        </div>
        <div class="modal-footer">
			<a href='index.php' class='btn btn-default'>Yes</a>
			<a href='#' class='btn btn-default'>No</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>

$('#myModal').modal('show'); 
</script>
</body>
</html>
