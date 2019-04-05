#!/usr/bin/php
<?php
$days = "[[lL]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[sS]amedi|[Dd]imanche]";
$cdays = "[0-2]?[0-9]|3[01]";
$months = "[[jJ]anvier|[[fF]évrier|[mM]ars|[aA]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre]";
$years = "\d{4}";
$time = "[0-2]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]";
$nb = preg_match("/^($days) ($cdays) ($months) ($years) ($time)$/", $argv[1]);
echo "$nb\n";
?>
