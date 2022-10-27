<?php

namespace Zsgogo\Test\utils;

class StrUtil {

    /**
     * @param string $string
     * @return false|string
     */
    public function md5s(string $string){
        if ($string == "") return false;
        return md5(md5($string));
    }

}