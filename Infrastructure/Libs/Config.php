<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Libs/php-activerecord/ActiveRecord.php";


    $cfg = ActiveRecord\Config::instance();
    $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"] . '/ACTIVIDAD_UNIDAD_2_DesarrolloDeAPP_/Infrastructure/Databases/Entities');
    $cfg->set_connections(array(
        'development' => 'mysql://root@localhost/gestion_financiera',
        // 'test' => 'mysql://username:password@localhost/test_database_name',
        // 'production' => 'mysql://username:password@localhost/production_database_name'
    ));

    $cfg->set_default_connection('development');
?>