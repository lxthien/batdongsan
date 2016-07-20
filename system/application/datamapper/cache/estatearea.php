<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estateareas',
  'fields' => 
  array (
    0 => 'id',
    1 => 'position',
    2 => 'label',
    3 => 'url',
    4 => 'from',
    5 => 'to',
    6 => 'created',
    7 => 'updated',
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
    'position' => 
    array (
      'field' => 'position',
      'rules' => 
      array (
      ),
    ),
    'label' => 
    array (
      'field' => 'label',
      'rules' => 
      array (
      ),
    ),
    'url' => 
    array (
      'field' => 'url',
      'rules' => 
      array (
      ),
    ),
    'from' => 
    array (
      'field' => 'from',
      'rules' => 
      array (
      ),
    ),
    'to' => 
    array (
      'field' => 'to',
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
    'estate' => 
    array (
      'field' => 'estate',
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
    'estate' => 
    array (
      'class' => 'estate',
      'other_field' => 'estatearea',
      'join_self_as' => 'estatearea',
      'join_other_as' => 'estate',
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