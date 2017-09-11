<?php
namespace NiclasHedam\EloquentRound;

trait RoundsDecimals
{
    public function setAttribute($key, $value)
    {
        if (!isset($this->rounds) || !is_array($this->rounds)) {
            return parent::setAttribute($key, $value);
        }


        if (isset($this->rounds[$key]) && !is_int($this->rounds[$key])) {
            throw new \Exception('Rounds has to be mapped $key => int');
        }

        return parent::setAttribute($key, round($value, $this->rounds[$key]));
    }
}
