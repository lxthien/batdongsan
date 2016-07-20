<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estatecatalogues',
  'fields' => 
  array (
    0 => 'id',
    1 => 'parentcat_id',
    2 => 'position',
    3 => 'name',
    4 => 'name_none',
    5 => 'menu_active',
    6 => 'title',
    7 => 'description',
    8 => 'keyword',
    9 => 'created',
    10 => 'updated',
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
    'parentcat_id' => 
    array (
      'field' => 'parentcat_id',
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
    'name' => 
    array (
      'field' => 'name',
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
    'menu_active' => 
    array (
      'field' => 'menu_active',
      'rules' => 
      array (
      ),
    ),
    'title' => 
    array (
      'field' => 'title',
      'rules' => 
      array (
      ),
    ),
    'description' => 
    array (
      'field' => 'description',
      'rules' => 
      array (
      ),
    ),
    'keyword' => 
    array (
      'field' => 'keyword',
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
    'estatetype' => 
    array (
      'field' => 'estatetype',
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
    'estatetype' => 
    array (
      'class' => 'estatetype',
      'other_field' => 'estatecatalogue',
      'join_self_as' => 'estatecatalogue',
      'join_other_as' => 'estatetype',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estate' => 
    array (
      'class' => 'estate',
      'other_field' => 'estatecatalogue',
      'join_self_as' => 'estatecatalogue',
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