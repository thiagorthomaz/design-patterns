<?php
require_once './Console.class.php';

/**
 * Description of XboxOne
 *
 * @author thiago
 */
class XboxOne implements Console{
  public function info_console() {
    return "Xbox one made by Microsoft Factory.";
  }

}
