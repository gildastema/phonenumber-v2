<?php

namespace Gildastema\Phonenumber;

class Phonenumber
{
    const ORANGE = 10;
    const MTN = 11;
    const NEXTTEL = 12;
    const CAMTEL = 13;
    const UNKOWN = -1;
    /**
     * get operator from phone
     *
     * @param string $phone
     * @return integer
     */
    public  function getOperator(string $phone): int
    {
        $phone = self::getPhoneWithoutPrefix(trim($phone));

        if(strlen($phone) !== 9) return self::UNKOWN;
        if ($this->startsWith($phone, '69')) {
            return self::ORANGE;
        }
        if (
            $this->startsWith($phone, '655') || $this->startsWith($phone, '656') || $this->startsWith($phone, '657')
            || $this->startsWith($phone, '658') || $this->startsWith($phone, '659')
        ) {
            return self::ORANGE;
        }
        if ($this->startsWith($phone, '67'))
            return self::MTN;
        if (
            $this->startsWith($phone, '650') || $this->startsWith($phone, '651') || $this->startsWith($phone, '652')
            || $this->startsWith($phone, '653') || $this->startsWith($phone, '654') || $this->startsWith($phone, '680') || $this->startsWith($phone, '681')
            || $this->startsWith($phone, '682')
        ) {
            return self::MTN;
        }
        if ($this->startsWith($phone, '66'))
            return self::NEXTTEL;
        return self::UNKOWN;
    }
    /**
     * Undocumented function
     *
     * @param string $phone
     * @return string
     */
    public  function getPhoneWithoutPrefix(string $phone): string
    {
        if (strlen($phone) == 12) {
            return substr($phone, 3,9);
        }
        if (strlen($phone) == 11) {
            return '6' . str_replace('237', '', $phone);
        }
        if (strlen($phone) == 9) {
            return $phone;
        }
        if (strlen($phone) == 8)
            return '6' . $phone;
        return $phone;
    }


    private function startsWith($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
}
