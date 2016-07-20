<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estatetypes',
  'fields' => 
  array (
    0 => 'id',
    1 => 'position',
    2 => 'name',
    3 => 'name_none',
    4 => 'estatecatalogue_id',
    5 => 'created',
    6 => 'updated',
    7 => 'description',
    8 => 'keyword',
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
    'estatecatalogue_id' => 
    array (
      'field' => 'estatecatalogue_id',
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
    'estatecatalogue' => 
    array (
      'field' => 'estatecatalogue',
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
    'estatecatalogue' => 
    array (
      'class' => 'estatecatalogue',
      'other_field' => 'estatetype',
      'join_self_as' => 'estatetype',
      'join_other_as' => 'estatecatalogue',
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
      'other_field' => 'estatetype',
      'join_self_as' => 'estatetype',
      'join_other_as' => 'estate',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'article' => 
    array (
      'class' => 'article',
      'other_field' => 'estatetype',
      'join_self_as' => 'estatetype',
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