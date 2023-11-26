<?php

namespace backend\modules\bot\base;

use yii\base\Model;

abstract class BotMessageFrame extends Model
{
    public bool $is_admin = false;

    public string $messageType = 'text';

    abstract public function getMessage();

    public function getUrl()
    {
        return true;
    }

    public function getOptions()
    {
        return [
            'parse_mode' => 'html',
        ];
    }
}