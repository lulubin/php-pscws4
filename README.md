## 1. 安装
通过 composer 安装：
```
composer require lulubin/php-pscws4
```
## 2. 使用
```
<?php
use lulubin\pscws4\pscws4;

$pscws4 = new pscws4();
$article = $pscws4->split("印花冰丝凉");
var_dump($article);
```