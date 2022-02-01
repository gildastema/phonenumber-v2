<?php

namespace Gildastema\Phonenumber;

class PhoneFaker
{
    /**
     * @param $operator
     * @return string
     * @throws \Exception
     */
    public function generate($operator = null, $prefix=null) : string
    {
        if ($operator === Phonenumber::MTN){
            $phone = $this->randomElement(['67', '68', '650', '651', '652', '653', '654']);

        }elseif ($operator === Phonenumber::ORANGE){
            $phone = $this->randomElement(['69', '655', '656', '657', '658', '659']);
        }else{
            $phone = $this->randomElement(['69', '655', '656', '657', '658', '659', '67', '68', '650', '651', '652', '653', '654']);
        }

        $p = $prefix ?? '';
        if (strlen($phone) === 3){
            return  $p.$phone.random_int(100000,999999);
        }else{
            return $p.$phone.random_int(1000000,9999999);
        }
    }

    private function  randomElement(array $data)
    {
        $len = sizeof($data);
        return $data[ random_int(0, $len -1) ];
    }
}