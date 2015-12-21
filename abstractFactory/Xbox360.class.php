<?php

require_once './Console.class.php';

/**
 * Description of Xbox360
 *
 * @author thiago
 */
class Xbox360 implements Console{
  public function info_console() {
    return "Xbox 360 made by Microsoft";
  }

}
