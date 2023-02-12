<?php
class Recursive
{
    public function do(&$array) {
        foreach ($array as &$value) {
            if (is_array($value)) {
                if(count($value)==0){
                    $value = null;
                }
                $this->do($value);
            }else{
                continue;
            }
        }
        return $array;
    }
}
