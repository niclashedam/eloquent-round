<?php
namespace NiclasHedam\EloquentRound;

trait RoundsDecimals
{
    public function setAttribute($key, $value)
    {
        if (!property_exists($this, 'rounds')) {
            return parent::setAttribute($key, $value);
        }

        if (!is_array($this->rounds)) {
            throw new \Exception('Rounding has to be mapped in an array: [\'key\' => int]');
        }

        if (!isset($this->rounds[$key])) {
            return parent::setAttribute($key, $value);
        }

        if (isset($this->rounds[$key]) && !is_int($this->rounds[$key])) {
            throw new \Exception('Rounding has to be mapped in an array: [\'key\' => int]');
        }

        return parent::setAttribute($key, round($value, $this->rounds[$key]));
    }
}
