<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$generic = array();

/*$generic += array('hizmetler'=>array('method'=>'get_page','id_page' => '28','media_type'=>'ibs'));
  $generic += array('hizmetler_c'=>array('method'=>'get_sub_pages','id_page'=>'28','limit'=>'0','media_type'=>'ibs'));*/

//$generic += array('portfolio'=>array('method'=>'get_articles','id_page' => '35','id_article'=> null,'limit' => '0','asc_desc' => 'desc','media_type'=>'ibs'));


$generic += array('kozmetik' => array('method' => 'get_page', 'id_page' => '90', 'media_type' => 'ibs'));
$generic += array('kozmetik_c' => array('method' => 'get_articles', 'id_page' => '90', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));


$generic += array('klinik' => array('method' => 'get_page', 'id_page' => '91', 'media_type' => 'ibs'));
$generic += array('klinik_c' => array('method' => 'get_articles', 'id_page' => '91', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('about' => array('method' => 'get_articles', 'id_page' => '84', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));

$generic += array('iletisim' => array('method' => 'get_articles', 'id_page' => '85', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs'));
