<?php

require_once './SonyFactory.class.php';
require_once './MicrosoftFactory.class.php';


$sony = new SonyFactory();
echo $sony->create_console_sony();

echo "<br>\n";

$microsoft = new MicrosoftFactory();
echo $microsoft->create_console_microsoft();