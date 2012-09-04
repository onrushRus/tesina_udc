<!-- Modal -->
<div class="modal hide fade in" id="myModal" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Agregar una Provincia</h3>
  </div>
  <div class="modal-body">
    <p>Aca comienza el BODY del modal...</p>
    <p><?php 
        echo "<p> Llegó: ".$prueba."</p>";
        echo $prov;
        //$formprov = new ProvinciaForm();
        //echo $formprov ?>
    </p>
  </div>  
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button class="btn btn-primary">Guardar</button>
  </div>    
  
</div>