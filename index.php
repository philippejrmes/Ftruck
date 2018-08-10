<?php
if(!isset($_GET['page']))
{
	include_once('private/html/index.php');
} elseif(!isset($_GET['page2'])) {
	include_once('private/html/'.$_GET['page'].'.php');
} elseif(isset($_GET['page2'])) {
    if($_GET['page'] == 'trucks')
    {
        include_once('private/html/truckinfo.php');
    }
}