<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$structure = array();

/*$structure['anasayfa']['neden_biz'] = array('method'=>'get_page','id_page' => '30','media_type'=>'ibs');
  $structure['anasayfa']['neden_biz_c'] = array('method'=>'get_articles','id_page' => '30','id_article'=> null,'limit' => '0','order_by'=> 'a.logical_date','asc_desc' => 'desc','media_type'=>'ibs');*/


  $structure['anasayfa']['anasayfa_icerik'] = array('method' => 'get_articles', 'id_page' => '89', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

  $structure['anasayfa']['blog'] = array('method' => 'get_articles', 'id_page' => '83', 'id_article' => null, 'limit' => '0', 'order_by' => 'logical_date', 'asc_desc' => 'desc', 'media_type' => 'ibs');

