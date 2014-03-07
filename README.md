uptimeRobot
===========

This is a PHP wrapper for https://uptimerobot.com/api

## Example

PHP Class for UptimeRobot-API

```PHP
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

```
