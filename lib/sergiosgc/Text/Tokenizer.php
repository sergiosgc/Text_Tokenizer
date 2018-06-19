<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
namespace sergiosgc;

interface Text_Tokenizer
{
    /**
     * Returns the next token in the stream
     *
     * @return Text_Tokenizer_Token
     */
     public function getNextToken();
}
?>
