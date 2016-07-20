<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'landcategories',
  'fields' => 
  array (
    0 => 'id',
    1 => 'name',
    2 => 'position',
    3 => 'name_none',
    4 => 'created',
    5 => 'updated',
    6 => 'link',
  ),
  'validation' => 
  array (
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'name' => 
    array (
      'field' => 'name',
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
    'name_none' => 
    array (
      'field' => 'name_none',
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
    'link' => 
    array (
      'field' => 'link',
      'rules' => 
      array (
      ),
    ),
    'land' => 
    array (
      'field' => 'land',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
  ),
  'has_many' => 
  array (
    'land' => 
    array (
      'class' => 'land',
      'other_field' => 'landcategory',
      'join_self_as' => 'landcategory',
      'join_other_as' => 'land',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
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