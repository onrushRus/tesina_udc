    
<div class="modal hide" id="myModal">
    <div class="modal-header">
        <a href="#" class="close" data-dismiss="modal">×</a>
        <h3>Mensaje a Enviar:</h3>
    </div>
    <div class="modal-body">
        <p><?php echo $cuerpo_mail;?>)</p>               
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Cerrar</a>
    </div>
</div>
<script>
  $script.ready('twitter_bootstrap', function() {
    $(function(){
        $('#myModal').modal();
    })
  });
</script>
    