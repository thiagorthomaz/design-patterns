<?php

require_once './HTMLElementBuilder.class.php';

/**
 * Description of HTMLParagraph
 *
 * @author thiago
 */
class HTMLParagraph extends HTMLElementBuilder {
  
  
  protected function getTag() {
    return "p";
  }

}
