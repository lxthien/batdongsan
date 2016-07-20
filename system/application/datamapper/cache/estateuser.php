<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'estateusers',
  'fields' => 
  array (
    0 => 'id',
    1 => 'isestate',
    2 => 'position',
    3 => 'name',
    4 => 'lastname',
    5 => 'name_none',
    6 => 'username',
    7 => 'username_email',
    8 => 'password',
    9 => 'email',
    10 => 'yahoo',
    11 => 'skype',
    12 => 'mobile',
    13 => 'mobilePhone',
    14 => 'estatecity_id',
    15 => 'estatedistrict_id',
    16 => 'title',
    17 => 'description',
    18 => 'avatar',
    19 => 'active',
    20 => 'activecode',
    21 => 'post_count',
    22 => 'isLock',
    23 => 'created',
    24 => 'updated',
    25 => 'address',
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
    'isestate' => 
    array (
      'field' => 'isestate',
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
    'lastname' => 
    array (
      'field' => 'lastname',
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
    'username' => 
    array (
      'field' => 'username',
      'rules' => 
      array (
      ),
    ),
    'username_email' => 
    array (
      'field' => 'username_email',
      'rules' => 
      array (
      ),
    ),
    'password' => 
    array (
      'field' => 'password',
      'rules' => 
      array (
      ),
    ),
    'email' => 
    array (
      'field' => 'email',
      'rules' => 
      array (
      ),
    ),
    'yahoo' => 
    array (
      'field' => 'yahoo',
      'rules' => 
      array (
      ),
    ),
    'skype' => 
    array (
      'field' => 'skype',
      'rules' => 
      array (
      ),
    ),
    'mobile' => 
    array (
      'field' => 'mobile',
      'rules' => 
      array (
      ),
    ),
    'mobilePhone' => 
    array (
      'field' => 'mobilePhone',
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
    'avatar' => 
    array (
      'field' => 'avatar',
      'rules' => 
      array (
      ),
    ),
    'active' => 
    array (
      'field' => 'active',
      'rules' => 
      array (
      ),
    ),
    'activecode' => 
    array (
      'field' => 'activecode',
      'rules' => 
      array (
      ),
    ),
    'post_count' => 
    array (
      'field' => 'post_count',
      'rules' => 
      array (
      ),
    ),
    'isLock' => 
    array (
      'field' => 'isLock',
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
    'address' => 
    array (
      'field' => 'address',
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
    'estatecity' => 
    array (
      'field' => 'estatecity',
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
    'estatedistrict' => 
    array (
      'class' => 'estatedistrict',
      'other_field' => 'estateuser',
      'join_self_as' => 'estateuser',
      'join_other_as' => 'estatedistrict',
      'join_table' => '',
      'reciprocal' => false,
      'auto_populate' => NULL,
      'cascade_delete' => true,
    ),
    'estatecity' => 
    array (
      'class' => 'estatecity',
      'other_field' => 'estateuser',
      'join_self_as' => 'estateuser',
      'join_other_as' => 'estatecity',
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
      'other_field' => 'estateuser',
      'join_self_as' => 'estateuser',
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