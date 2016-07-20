<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estatecitys',
  'fields' => 
  array (
    0 => 'id',
    1 => 'position',
    2 => 'name',
    3 => 'name_none',
    4 => 'created',
    5 => 'updated',
    6 => 'isDefault',
  ),
  'validation' => 
  array (
    'name' => 
    array (
      'label' => 'Tên Thành phố/Tỉnh',
      'rules' => 
      array (
        0 => 'required',
        1 => 'unique',
        2 => 'trim',
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
    'isDefault' => 
    array (
      'field' => 'isDefault',
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
    'estateuser' => 
    array (
      'field' => 'estateuser',
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
  ),
  'has_many' => 
  array (
    'estatedistrict' => 
    array (
      'class' => 'estatedistrict',
      'other_field' => 'estatecity',
      'join_self_as' => 'estatecity',
      'join_other_as' => 'estatedistrict',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estate' => 
    array (
      'class' => 'estate',
      'other_field' => 'estatecity',
      'join_self_as' => 'estatecity',
      'join_other_as' => 'estate',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estateuser' => 
    array (
      'class' => 'estateuser',
      'other_field' => 'estatecity',
      'join_self_as' => 'estatecity',
      'join_other_as' => 'estateuser',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'article' => 
    array (
      'class' => 'article',
      'other_field' => 'estatecity',
      'join_self_as' => 'estatecity',
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