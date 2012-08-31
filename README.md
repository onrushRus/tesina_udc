Participantes en el protecto:
Gosaine, Javier Alejandro



========== O ========================== O ============================ O ====================

Esto va en c:/xampp/apache/conf/httpd.conf    (con el nombre q corresponda -en windows)

Alias /canchitarwsymfony/sf C:/xampp/htdocs/canchitarwsymfony/lib/vendor/symfony/data/web/sf
<Directory C:/xampp/htdocs/canchitarwsymfony/web/sf>
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>

Alias /canchitarwsymfony C:/xampp/htdocs/canchitarwsymfony/web
<Directory C:/xampp/htdocs/canchitarwsymfony/web>
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>


cosas importante para no olvidar xd

git submodule update --init --recursive

php symfony plugin:publish-assets

./symfony propel:build-schema

./symfony propel:build-model


En vez de correr build-schema y build-model, build-forms, ejecutar:
./symfony propel:build--all-classes


$this->forward('default', 'module');


./symfony generate:module frontend Empleado
./symfony propel:build-forms
./symfony propel:generate-module --non-verbose-templates frontend empleado Empleado

//if('es' === sfContext::getInstance()->getUser()->getCulture())
comentar esta linea en el archivo mpformpropel.class.php en la carpeta plugins