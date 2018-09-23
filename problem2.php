<?php
/*
Let's say we have this array:
[2,4,1,6,5,40,-1]
Find THREE integers that multiply to 20
*/

class Problem1
{
    private $datas = [];
    private $goal = null;

    public function __construct($datas, $goal) {
        $this->datas = $datas;
        $this->goal = $goal;
    }

    public function resolve() {
        $datas = $this->datas;
        $results = [];
        for($i = 0; $i < count($datas) -2 ; $i++) {
            for($j = $i+1; $j < count($datas)-1; $j++) {
                for($k = $j+1; $k < count($datas); $k++) {
                    if($datas[$i]*$datas[$j]*$datas[$k]==$this->goal) {
                        $results[] = [$i => $datas[$i], $j => $datas[$j], $k => $datas[$k]];
                    }
                }
            }
        }
        return $results;
    }
}
$input = [];
$limit = 40;
for($i=0; $i<$limit; $i++)
    $input[] = mt_rand(-20, +20);


$n = new Problem1($input, 20);
print "<pre>";
print_r($n->resolve());