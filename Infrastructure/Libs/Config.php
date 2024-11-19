
<?php
require_once 'php-activerecord/ActiveRecord.php';
 
 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"] . '/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Database/Entities' );
     $cfg->set_connections(array(
         'development' => 'mysql://root@localhost/gestion_financiera'));
});