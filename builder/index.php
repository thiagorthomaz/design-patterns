<?php
require_once './HTMLDiv.class.php';
require_once './HTMLParagraph.class.php';
require_once './HTMLSpan.class.php';


$div = new HTMLDiv();
$div->setId("div-id");
$div->setClass("div-class-test");
$div->setValue("Here is a DIV html element.");
$div->__toString();


$p = new HTMLParagraph();
$p->setId("p-id");
$p->setClass("p-class");
$p->setValue("here is a Paragraph");
$p->__toString();

$span = new HTMLSpan();
$span->setId("span-id");
$span->setClass("span-class");
$span->setValue("here is a Span element");
$span->__toString();
