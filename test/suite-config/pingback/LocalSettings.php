<?php

ini_set( 'display_errors', 1 );
$wgShowExceptionDetails = true;
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgShowDBErrorBacktrace = true;
$wgDebugLogFile = '/var/log/mediawiki/debug.log';

$wgWBRepoSettings['pingbackHost'] = 'http://mediawiki.svc';
