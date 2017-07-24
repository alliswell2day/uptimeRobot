UptimeRobot APIv1
=================

This is a PHP wrapper for https://uptimerobot.com/apiv1

## The APIv1 will be retired by 1 Oct 2017 and please switch to [APIv2](https://uptimerobot.com/api) before that date.

## Example

PHP Class for UptimeRobot-API

```PHP
require_once 'src/uptimerobot.php';

$upRobot = new UptimeRobot();

$upRobot::configure('YOUR-API-KEY', 1);

$upRobot->setFormat('json'); //Define the format of responses (json or xml)

/**
 * Get all monitors
 */
try
{
    $all = $upRobot->getMonitors();
    print_r($all);
}
catch (Exception $e)
{
    echo $e->getMessage();
}

/**
 * Get status of one monitor by her id
 */
try
{
    $monitor = $upRobot->getMonitors(0000);
    echo $monitor->monitors->monitor[0]->status;
}
catch (Exception $e)
{
    echo $e->getMessage();
}

/**
 * Get one monitor with all parameters
 */
try
{
    $monitor2 = $upRobot->getMonitors($monitors = 0000, $customUptimeRatio = array('1', '7'), $logs = 1, $responseTimes = 1, $responseTimesAverage = 180, $alertContacts = 1, $showMonitorAlertContacts = 1, $showTimezone = 1);
    print_r($monitor2);
}
catch (Exception $e)
{
    echo $e->getMessage();
}

```
## Authors

Watchful - https://watchful.li/

Original Class: Mark Boomaars - https://github.com/CodingOurWeb/PHP-wrapper-for-UptimeRobot-API
