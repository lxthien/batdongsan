<?php
Class Level extends DataMapper{
    // table to datamapper
    public $table = "levels";

    //relate with orther datamapper
    public $has_many = array(
        'job'
    );

    // constructor class level
    function __construct($id=NULL){
        parent::__construct($id);
    }


    function save($object = '', $related_field = '')
    {
        if (!$this->exists()) {
            $o = new Level();
            $o->select_max('position');
            $o->get();
            if (count($o->all) != 0) {
                $max = $o->position + 1;
                $this->position = $max;
            } else {
                $this->postion = 1;
            }
        }
        return parent::save($object, $related_field);
    }
}