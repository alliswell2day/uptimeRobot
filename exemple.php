<?php
/**
 * @author      Watchful
 * @authorUrl   http://www.watchful.li
 * @copyright	Copyright (C) 2012-2014 Watchful
 * @license     GNU General Public License version 2 or later
 */
require_once 'uptimerobot.php';

$upRobot = new UptimeRobot();

$upRobot::configure('u130991-1d98de23ca511463a64be6de', 1);
//$upRobot::configure('m776083808-58b6c27ffb0c4d8db3f758fd', 1); //Monitor Google (id:776083808) Specific Key

$upRobot->setFormat('xml');

echo '<pre>';

/**
 * Get monitors
 */
//print_r($upRobot->getMonitors());
//print_r($upRobot->getMonitors($monitors = null, $customUptimeRatio = array('1', '7'), $logs = 1, $responseTimes = 1, $responseTimesAverage = 180, $alertContacts = 0, $showMonitorAlertContacts = 1, $showTimezone = 1));
var_dump($upRobot->getMonitors(array('776083808')));

/**
 * New monitor
 */
//var_dump($upRobot->newMonitor("Google", 'https://google.com', 1));
//var_dump($upRobot->newMonitor("The W of Wikipedia", 'http://fr.wikipedia.org/', 2, null, null, 2, 'W'));
//var_dump($upRobot->newMonitor("Ping DNS of Google", '8.8.8.8', 3));
//var_dump($upRobot->newMonitor("Http port Google", 'google.com', 4, 99, 80));
//var_dump($new = $upRobot->newMonitor('Watchful', 'https://watchful.li', $type = 1, $subType = 2, $port = null, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = array('0130991')));

/**
 * Edit monitor
 */
//var_dump($upRobot->editMonitor($monitorId= '776082283', $monitorStatus = null, $friendlyName = null, $URL = null, $subType = 99, $port = 25, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = null));
//var_dump($upRobot->editMonitor($monitorId = $new->monitor->id, $monitorStatus = null, $friendlyName = 'Watchful - edit', $URL = null, $subType = null, $port = null, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = array('')));
//var_dump($upRobot->editMonitor($monitorId = '776083808', $monitorStatus = null, $friendlyName = null, $URL = null, $subType = null, $port = null, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = array('')));

/**
 * Delete monitor
 */
//var_dump($upRobot->deleteMonitor($new->monitor->id)); //776080963

/**
 * Get alert contacts
 */
//print_r($upRobot->getAlertContacts());

/**
 * New alert Contact
 */
//print_r($upRobot->newAlertContact('2', 'stagiaire+up324@inetis.ch'));

/**
 * Delete alert Contact
 */
//print_r($upRobot->deleteAlertContact(2250722));


echo '</pre>';
?>