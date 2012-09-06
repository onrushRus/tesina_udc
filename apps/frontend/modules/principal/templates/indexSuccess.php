<?php /* @var $l Localidad */ ?> 

<img src="<?php echo image_path('subsecr.jpg')?>" alt="Fondo" width="800px" ></img>

<?php 
    $todas = array();
    
     foreach ($loc as $l){        
        echo "--> ".$l->getNombreLocalidad()."<br>";
        array_push($todas, $l->getNombreLocalidad());        
    }
    //var_dump($todas);
    echo "[";
    for($i=0;$i<count($todas)-1;$i++){
        echo "\"".$todas[$i]."\","; 
    }    
    echo "\"".$todas[$i]."\"]"; 
    
 ?>



<label>Buscar Localidad</label>
<input type="text" data-provide="typeahead" data-items="5" data-source='["Rawson","Trelew","Puerto Madryn","Gaiman","Dolavon","Esquel"]'>
 
<input type="text" data-provide="typeahead" data-items="5" 
       data-source='[<?php 
       echo "[";
       for($i=0;$i<count($todas)-1;$i++){
            echo "\"".$todas[$i]."\","; 
       }    
       echo "\"".$todas[$i]."\"]";
       ;?>'>
 
 