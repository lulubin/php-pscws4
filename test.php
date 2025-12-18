<?php
use lulubin\pscws4\pscws4;
$pscws4 = new pscws4();
$article = $pscws4->split("印花冰丝凉");
var_dump($article);