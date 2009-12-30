<?php
require_once('Text/Tokenizer.php');
interface Text_Tokenizer_Lookahead extends Text_Tokenizer
{
    /**
     * Returns the lookahead token n in the stream
     *
     * @param int n Position of the lookahead token
     * @return Text_Tokenizer_Token
     */
     public function getLookahead($n);
}
?>
