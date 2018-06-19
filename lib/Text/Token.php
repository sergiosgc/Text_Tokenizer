<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
namespace sergiosgc;

class Text_Tokenizer_Token
{
    // Attributes {{{ 
    /** Token id */
    protected $_id = null;
    /**
     * Token id getter 
     * @return string Token id
     */
    public function &getId() 
    { 
        return $this->_id;
    }
    /** Token value */
    protected $_value = null;
    /**
     * Token value getter
     *
     * @return mixed Token value
     */
    public function &getValue()
    {
        return $this->_value;
    }
    // }}}
    // Constructor {{{ 
    /** 
     * Create a new token. Requires the token numeric id and the token value
     *
     * @param string id
     * @param mixed value
     */
    public function __construct($id, $value)
    {
        $this->_id = $id;
        $this->_value = $value;
    }
    // }}}
}
?>
