<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'newsphotos',
  'fields' => 
  array (
    0 => 'id',
    1 => 'article_id',
    2 => 'image',
    3 => 'name',
    4 => 'position',
    5 => 'created',
    6 => 'updated',
  ),
  'validation' => 
  array (
    'name' => 
    array (
      'label' => 'Tên hình ảnh ',
      'rules' => 
      array (
        0 => 'trim',
        'max_length' => 200,
      ),
      'field' => 'name',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'article_id' => 
    array (
      'field' => 'article_id',
      'rules' => 
      array (
      ),
    ),
    'image' => 
    array (
      'field' => 'image',
      'rules' => 
      array (
      ),
    ),
    'position' => 
    array (
      'field' => 'position',
      'rules' => 
      array (
      ),
    ),
    'created' => 
    array (
      'field' => 'created',
      'rules' => 
      array (
      ),
    ),
    'updated' => 
    array (
      'field' => 'updated',
      'rules' => 
      array (
      ),
    ),
    'article' => 
    array (
      'field' => 'article',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
    'article' => 
    array (
      'class' => 'article',
      'other_field' => 'newsphoto',
      'join_self_as' => 'newsphoto',
      'join_other_as' => 'article',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
  ),
  '_field_tracking' => 
  array (
    'get_rules' => 
    array (
    ),
    'matches' => 
    array (
    ),
    'intval' => 
    array (
      0 => 'id',
    ),
  ),
);