<?php
class Estatearea extends DataMapper{
    
    public $table = 'estateareas';
    
    public $has_one=array(
        
    );
    public $has_many=array(
        'estate'
    );
    
    function __construct($id = NULL){
        parent::__construct($id);
    }
    
    public $validation = array(
    
    );
    function save($object = '', $related_field = '')
    {
        if (!$this->exists()) {
            $o = new Estatearea();
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
/* End of file estatearea.php */
/* Location: ./application/models/estatearea.php */
?>