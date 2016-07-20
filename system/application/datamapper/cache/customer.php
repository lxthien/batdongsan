<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'customers',
  'fields' => 
  array (
    0 => 'id',
    1 => 'firstname',
    2 => 'lastname',
    3 => 'username',
    4 => 'password',
    5 => 'code',
    6 => 'mobilePhone',
    7 => 'address',
    8 => 'email',
    9 => 'birthday',
    10 => 'emailActiveCode',
    11 => 'active',
    12 => 'position',
    13 => 'created',
    14 => 'updated',
    15 => 'homePhone',
    16 => 'sex',
    17 => 'isReceiverEmail',
    18 => 'isEmailActive',
    19 => 'estatecity_id',
    20 => 'estatedistrict_id',
    21 => 'yahoo',
    22 => 'skype',
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
    'firstname' => 
    array (
      'field' => 'firstname',
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
    'username' => 
    array (
      'field' => 'username',
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
    'code' => 
    array (
      'field' => 'code',
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
    'address' => 
    array (
      'field' => 'address',
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
    'birthday' => 
    array (
      'field' => 'birthday',
      'rules' => 
      array (
      ),
    ),
    'emailActiveCode' => 
    array (
      'field' => 'emailActiveCode',
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
    'homePhone' => 
    array (
      'field' => 'homePhone',
      'rules' => 
      array (
      ),
    ),
    'sex' => 
    array (
      'field' => 'sex',
      'rules' => 
      array (
      ),
    ),
    'isReceiverEmail' => 
    array (
      'field' => 'isReceiverEmail',
      'rules' => 
      array (
      ),
    ),
    'isEmailActive' => 
    array (
      'field' => 'isEmailActive',
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
    'cartitem' => 
    array (
      'field' => 'cartitem',
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
    'cartitem' => 
    array (
      'class' => 'cartitem',
      'other_field' => 'customer',
      'join_self_as' => 'customer',
      'join_other_as' => 'cartitem',
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