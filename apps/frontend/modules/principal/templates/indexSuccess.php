<?php /* @var $l Localidad */ ?> 


<img src="<?php echo image_path('subsecr.jpg')?>" alt="Fondo" width="800px" ></img>

<label>Buscar Localidad</label>

<input type="text" data-provide="typeahead" data-items="5"
data-source='[<?php foreach($loc as $l){echo "\"".$l->getNombreLocalidad()."\"";if($loc->getPosition()< sizeof($loc)-1){echo(",");}}?>]'>

<table class="table table-striped">
    <tr>
        <th><h3>Sitios de interes!</h3></th>
        <th><h3>Link</h3></th>
    </tr>
    <tr>
      <td>
          <a href='http://organismos.chubut.gov.ar/asociativismo/'><strong>Sitio Oficial</strong></a> de la Subsecretaría de Asociativismo y Economía Social
      </td>
      <td>
        <a class="btn btn-info" href='http://organismos.chubut.gov.ar/asociativismo/'>Ir</a>
      </td>
    </tr>
    <tr>
      <td>
        <a href='http://sayesch.blogspot.com.ar'><strong>Blog</strong></a> de la Subsecretaría de Asociativismo y Economía Social</p>
      </td>
      <td>
        <a class="btn btn-info" href='http://sayesch.blogspot.com.ar'>Ir</a>
      </td>
    </tr>
</table>
<br>

