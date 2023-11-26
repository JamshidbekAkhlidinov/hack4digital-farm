<?php
/*
 *   Jamshidbek Akhlidinov
 *   19 - 8 2023 12:26:15
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace backend\modules\bot\base;

abstract class ErrorPageFrame
{
    abstract public function getMessage():array;
}