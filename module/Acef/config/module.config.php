<?php

$setting = array_merge_recursive(
include "controller.config.php",
include "custom-validators.config.php",
include "doctrine.config.php",
include "navigation.config.php",
include "route.config.php",
include "view.config.php",
include "view-helper.config.php",
include "zfm-datagrid.bitacora-cliente.config.php",
include "zfm-datagrid.cliente.config.php",
include "zfm-datagrid.estado.config.php",
include "zfm-datagrid.producto.config.php",
include "zfm-datagrid.tipo-cliente.config.php",
include "zfm-datagrid.tipo-producto.config.php"
);

return $setting;
