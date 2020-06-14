<?php
namespace lulubin\qrcode\formats;

use yii\base\BaseObject;

abstract class FormatAbstract extends BaseObject
{
    /**
     * @return string the formatted string to be encoded
     */
    abstract public function getText();

    /**
     * @return string the string representation of the object
     */
    public function __toString()
    {
        return $this->getText();
    }
}