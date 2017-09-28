<?php
require_once(dirname(__FILE__)."/cfgServer.php");

class cfg extends cfgServer
{
	
}

cfg::$PUBLIC_OFF = true;
// cfg::$IS_OPEN_ADMIN = true;

// cfg::$WITH_USERS = true;

/*
cfg::$USE_XML_CACHE = true;
cfg::$USE_CONTROLLER_CACHE = false;
cfg::$USE_STATIC_CACHE =  true && cfg::$USE_CONTROLLER_CACHE;
cfg::$USE_SQL_CACHE = true;
cfg::$USE_CORESET_CACHE = true;

cfg::$CACHE_MAIN_TYPE = 'file';
cfg::$CACHE_OFF = true; # Более приоритетная константа - отрубает ВЕСЬ кэш
*/

// ::$useJSClass = true;

// включена поддержка SQL-транзакций
cfg::$DO_SQL_TRANSACTION = !true;
cfg::$ROLLBACK_ALWAYS_TRUE = true;
cfg::$DO_INITIAL_TRANSACTION = true;

cfg::init();