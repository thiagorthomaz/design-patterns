<?php

/**
 * Description of HTMLElementBuilder
 *
 * @author thiago
 */
abstract class HTMLElementBuilder {
  
  private $id;
  private $class;
  private $value;
  
  abstract protected function getTag();
          
  function getId() {
    return $this->id;
  }

  function getClass() {
    return $this->class;
  }

  function getValue() {
    return $this->value;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setClass($class) {
    $this->class = $class;
  }

  function setValue($value) {
    $this->value = $value;
  }

  protected function build(){
    $tag = $this->getTag();
    
    $s = "";
    $s .= "<" . $tag;

    if (!is_null($this->id)){
      $s .= " id='" . $this->id . "'";
    }
    
    if (!is_null($this->class)){
      $s .= " class='" . $this->class . "'";
    }

    $s .= ">";
    $s .= $this->getValue();
    $s .= "</" . $tag . ">";
    return $s;
  }
  
  public function __toString() {
    echo $this->build();
  }
}
