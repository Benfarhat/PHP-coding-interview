<?php
/*
Let's say we have this array:
[2,4,1,6,5,40,-1]
Find two integers that multiply to 20
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
        for($i = 0; $i < count($datas) -1 ; $i++) {
            for($j = $i+1; $j < count($datas); $j++) {
                if($datas[$i]*$datas[$j]==$this->goal) {
                    $results[] = [$i => $datas[$i], $j => $datas[$j]];
                }
            }
        }
        return $results;
    }
}

$n = new Problem1([2,4,1,6,5,40,-1,10,12,7,3,20,-20,4], 20);
print "<pre>";
print_r($n->resolve());