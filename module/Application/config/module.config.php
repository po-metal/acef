<?php

$setting = array_merge_recursive(
    include "application.config.php",
    include "controller.config.php",
    include "plugins.config.php",
    include "services.config.php",
    include "view-helper.config.php",
    include "basic.config.php"
);

return $setting;
