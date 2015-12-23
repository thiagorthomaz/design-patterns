<?php
require_once './PS3.class.php';
require_once './PS4.class.php';
require_once './ConsoleFactory.class.php';
/**
 * Description of SonyFactory
 *
 * @author thiago
 */
class SonyFactory implements ConsoleFactory{
  public function create_console(){
    $ps = new PS3();
    return $ps->info_console();
  }
}
