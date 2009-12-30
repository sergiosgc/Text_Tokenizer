<?php
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
