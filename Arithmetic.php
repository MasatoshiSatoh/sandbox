<?php
/**
 * Created by PhpStorm.
 * User: smasa
 * Date: 2018/12/24
 * Time: 13:09
 */

class Arithmetic
{
    /**
     * 足し算
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    public function add($x, $y) {
        return($x + $y);
    }

    /**
     * 引き算
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    public function subtract($x, $y) {
        return($x - $y);
    }

    /**
     * 掛け算
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    public function multiply($x, $y) {
        return($x * $y);
    }

    /**
     * 割り算
     *
     * @param int $x
     * @param int $y
     * @return int
     */
    public function divide($x, $y) {
        return($x / $y);
    }
}