<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estatewards',
  'fields' => 
  array (
    0 => 'id',
    1 => 'name',
    2 => 'name_none',
    3 => 'estatecity_id',
    4 => 'estatedistrict_id',
    5 => 'position',
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
    'estatecity_id' => 
    array (
      'field' => 'estatecity_id',
      'rules' => 
      array (
      ),
    ),
    'estatedistrict_id' => 
    array (
      'field' => 'estatedistrict_id',
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
    'estatecity' => 
    array (
      'field' => 'estatecity',
      'rules' => 
      array (
      ),
    ),
    'estatedistrict' => 
    array (
      'field' => 'estatedistrict',
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
    'estatecity' => 
    array (
      'class' => 'estatecity',
      'other_field' => 'estateward',
      'join_self_as' => 'estateward',
      'join_other_as' => 'estatecity',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estatedistrict' => 
    array (
      'class' => 'estatedistrict',
      'other_field' => 'estateward',
      'join_self_as' => 'estateward',
      'join_other_as' => 'estatedistrict',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
  ),
  'has_many' => 
  array (
    'estate' => 
    array (
      'class' => 'estate',
      'other_field' => 'estateward',
      'join_self_as' => 'estateward',
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