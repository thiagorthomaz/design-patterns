<?php
require_once './Xbox360.class.php';
require_once './XboxOne.class.php';

/**
 * Description of MicrosoftFactory
 *
 * @author thiago
 */
class MicrosoftFactory {
  public function create_console_microsoft(){
    $ms = new XboxOne();
    return $ms->info_console();
  }
}
