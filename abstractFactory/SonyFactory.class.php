<?php
require_once './PS3.class.php';
require_once './PS4.class.php';
/**
 * Description of SonyFactory
 *
 * @author thiago
 */
class SonyFactory {
  public function create_console_sony(){
    $ps = new PS3();
    return $ps->info_console();
  }
}
