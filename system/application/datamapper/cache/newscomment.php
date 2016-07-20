<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$cache = array (
  'table' => 'newscomments',
  'fields' => 
  array (
    0 => 'id',
    1 => 'name',
    2 => 'article_id',
    3 => 'active',
    4 => 'title',
    5 => 'content',
    6 => 'email',
    7 => 'image',
    8 => 'created',
    9 => 'updated',
  ),
  'validation' => 
  array (
    'name' => 
    array (
      'label' => 'Tên của bạn ',
      'rules' => 
      array (
        0 => 'trim',
        'max_length' => 200,
      ),
      'field' => 'name',
    ),
    'title' => 
    array (
      'label' => 'Tiêu đề',
      'rules' => 
      array (
        0 => 'trim',
        1 => 'required',
        'max_length' => 200,
      ),
      'field' => 'title',
    ),
    'email' => 
    array (
      'label' => 'Địa chỉ email',
      'rules' => 
      array (
        0 => 'required',
        1 => 'valid_email',
      ),
      'field' => 'email',
    ),
    'content' => 
    array (
      'label' => 'Nội dung',
      'rules' => 
      array (
        0 => 'trim',
        1 => 'required',
      ),
      'field' => 'content',
    ),
    'news' => 
    array (
      'label' => 'Tin',
      'rules' => 
      array (
        0 => 'required',
      ),
      'field' => 'news',
    ),
    'id' => 
    array (
      'field' => 'id',
      'rules' => 
      array (
        0 => 'integer',
      ),
    ),
    'article_id' => 
    array (
      'field' => 'article_id',
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
    'image' => 
    array (
      'field' => 'image',
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
    'article' => 
    array (
      'class' => 'article',
      'other_field' => 'newscomment',
      'join_self_as' => 'newscomment',
      'join_other_as' => 'article',
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