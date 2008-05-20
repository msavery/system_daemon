<?php

require_once 'tests-config.php';
require_once 'System/Daemon.php';

System_Daemon::setOption("appName", "test");
System_Daemon::setOption("logVerbosity", System_Daemon::LOG_EMERG);

$res = System_Daemon::log(System_Daemon::LOG_INFO, "test");
var_dump($res);

?>