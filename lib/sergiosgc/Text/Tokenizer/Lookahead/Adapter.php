<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
namespace sergiosgc;

class Text_Tokenizer_Lookahead_Adapter implements Text_Tokenizer_Lookahead
{
    protected $regularTokenizer;
    protected $lookahead = array();
    protected $eof = false;
    public function __construct(Text_Tokenizer $regularTokenizer)
    {
        $this->regularTokenizer = $regularTokenizer;
    }
    public function getNextToken()
    {
        if (count($this->lookahead) == 0) {
            $result = $this->regularTokenizer->getNextToken();
            if ($result === false) return new Text_Tokenizer_Token('', '');
            return $result;
        }
        $result = $this->lookahead[0];
        $this->lookahead = array_values(array_slice($this->lookahead, 1));
        return $result;
    }
    public function getLookahead($n)
    {
        $n = (int) $n;
        $n--;
        if (!array_key_exists($n, $this->lookahead)) {
            if ($this->eof) return false;
            while (!array_key_exists($n, $this->lookahead)) {
                $token = $this->regularTokenizer->getNextToken();
                if ($token === false) {
                    $this->eof = true;
                    $this->lookahead[] = new Text_Tokenizer_Token('', '');
                    return new Text_Tokenizer_Token('', '');
                } else {
                    $this->lookahead[] = $token;
                }
            }
        }
        return $this->lookahead[$n];
    }
}
?>
