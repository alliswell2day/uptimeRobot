<?php
/**
 * File exemple of utilisation uptimerobot class
 * 
 * Before use replace 0000 by the value of id.
 * 
 * @version     1.0
 * @author      Watchful
 * @authorUrl   http://www.watchful.li
 * @license     GNU General Public License version 2 or later
 */
require_once 'src/uptimerobot.php';

$upRobot = new UptimeRobot();

$upRobot::configure('YOUR-API-KEY', 1);

$upRobot->setFormat('json'); //Define the format of responses (json or xml)

/**
 * Get monitors
 */
$upRobot->getMonitors(); //Get all monitors
$upRobot->getMonitors(0000); //Get one monitor by her id
$upRobot->getMonitors($monitors = 0000, $customUptimeRatio = array('1', '7'), $logs = 0, $responseTimes = 1, $responseTimesAverage = 180, $alertContacts = 1, $showMonitorAlertContacts = 1, $showTimezone = 1);

/**
 * New monitor
 */
$upRobot->newMonitor("Google", 'https://google.com', 1); //Monitor URL
$upRobot->newMonitor("The W of Wikipedia", 'http://fr.wikipedia.org', 2, null, null, 2, 'W'); //Check word on a page
$upRobot->newMonitor("Ping DNS of Google", '8.8.8.8', 3); //Ping IP
$upRobot->newMonitor("Check custom port", 'exemple.com', 4, 99, 22); //Check custom port
$upRobot->newMonitor('Watchful.li', 'https://watchful.li', $type = 1, $subType = 2, $port = null, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = null); //All parameters

/**
 * Edit monitor
 */
$upRobot->editMonitor($monitorId = 0000, $monitorStatus = null, $friendlyName = 'Edit name of monitor'); //Edit name
$upRobot->editMonitor($monitorId = 0000, $monitorStatus = null, $friendlyName = null, $URL = null, $subType = 99, $port = 25); //Edit port of monitor
$upRobot->editMonitor($monitorId = 0000, $monitorStatus = null, $friendlyName = null, $URL = null, $subType = null, $port = null, $keywordType = null, $keywordValue = null, $HTTPUsername = null, $HTTPPassword = null, $alertContacts = null); //All parameters

/**
 * Delete monitor
 */
$upRobot->deleteMonitor(0000); //Delete monitor

/**
 * Get alert contacts
 */
$upRobot->getAlertContacts(); //Get all contacts
$upRobot->getAlertContacts(0000); //Get one contact by her id

/**
 * New alert Contact
 */
$upRobot->newAlertContact(2, 'YOUR-EMAIL'); //Create new alert contact

/**
 * Delete alert Contact
 */
$upRobot->deleteAlertContact(0000); //Delete alert contact
