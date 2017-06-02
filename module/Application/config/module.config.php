<?php

$setting = array_merge_recursive(
include "application.config.php",
include "basic.config.php",
include "controller.config.php",
include "plugins.config.php",
include "services.config.php",
include "view-helper.config.php",
include "language.config.php"
);

return $setting;
