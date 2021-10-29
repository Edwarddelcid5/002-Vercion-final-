<?php 
  include('php/conexion.php');
  $query = "select * from publicaciones";
  $resultado = mysqli_query($conn,$query);
?>


<input type="text" name="id"  id="delete_id"  class="form-control">
<?php echo $nombre['nombre'] ?>

<button type="button" data-toggle="modal" data-target="#modificar">Launch modal</button> 

<!-- Modal -->
<div id="modificar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
<p>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div> 