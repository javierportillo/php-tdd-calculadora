<?php
// Se podría usar autoloading para cargar las clases necesarias.
// Pero ya que son pocas, no lo veo necesario.

define('APP_ROOT', dirname(__FILE__));

require APP_ROOT . '/calculadora/Calculadora.php';
require APP_ROOT . '/calculadora/Suma.php';
