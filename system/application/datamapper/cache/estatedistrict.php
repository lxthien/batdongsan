<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estatedistricts',
  'fields' => 
  array (
    0 => 'id',
    1 => 'name',
    2 => 'name_none',
    3 => 'position',
    4 => 'estatecity_id',
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
    'position' => 
    array (
      'field' => 'position',
      'rules' => 
      array (
      ),
    ),
    'estatecity_id' => 
    array (
      'field' => 'estatecity_id',
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
    'estatecity' => 
    array (
      'field' => 'estatecity',
      'rules' => 
      array (
      ),
    ),
    'estateuser' => 
    array (
      'field' => 'estateuser',
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
    'estatecity' => 
    array (
      'class' => 'estatecity',
      'other_field' => 'estatedistrict',
      'join_self_as' => 'estatedistrict',
      'join_other_as' => 'estatecity',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
    'estateuser' => 
    array (
      'class' => 'estateuser',
      'other_field' => 'estatedistrict',
      'join_self_as' => 'estatedistrict',
      'join_other_as' => 'estateuser',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estate' => 
    array (
      'class' => 'estate',
      'other_field' => 'estatedistrict',
      'join_self_as' => 'estatedistrict',
      'join_other_as' => 'estate',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'article' => 
    array (
      'class' => 'article',
      'other_field' => 'estatedistrict',
      'join_self_as' => 'estatedistrict',
      'join_other_as' => 'article',
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