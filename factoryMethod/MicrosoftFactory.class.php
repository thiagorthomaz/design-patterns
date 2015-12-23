<?php

require_once './Xbox360.class.php';
require_once './XboxOne.class.php';
require_once './ConsoleFactory.class.php';

/**
 * Description of MicrosoftFactory
 *
 * @author thiago
 */
class MicrosoftFactory implements ConsoleFactory{
  public function create_console(){
    $ms = new XboxOne();
    return $ms->info_console();
  }
}
