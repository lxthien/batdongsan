<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'lands',
  'fields' => 
  array (
    0 => 'id',
    1 => 'landcategory_id',
    2 => 'name',
    3 => 'link',
    4 => 'position',
    5 => 'created',
    6 => 'updated',
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
    'landcategory_id' => 
    array (
      'field' => 'landcategory_id',
      'rules' => 
      array (
      ),
    ),
    'name' => 
    array (
      'field' => 'name',
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
    'landcategory' => 
    array (
      'field' => 'landcategory',
      'rules' => 
      array (
      ),
    ),
  ),
  'has_one' => 
  array (
    'landcategory' => 
    array (
      'class' => 'landcategory',
      'other_field' => 'land',
      'join_self_as' => 'land',
      'join_other_as' => 'landcategory',
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