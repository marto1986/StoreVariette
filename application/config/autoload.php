<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] = array('database','form_validation','session', 'upload', 'email','cart', 'pagination');


$autoload['drivers'] = array();


$autoload['helper'] = array('url','form','text');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('pantuflasModel', 'loginModel','chinelasModel', 'souvenirsModel','toallasModel', 'batasModel', 'contactoModel', 'catalogoModel');