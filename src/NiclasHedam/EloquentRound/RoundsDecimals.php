<?php

namespace NiclasHedam\EloquentRound;

trait RoundsDecimals
{
    public function setAttribute($key, $value)
    {
        if (!$this->hasValidRoundings() || !$this->shouldRound($key, $value)) {
            return parent::setAttribute($key, $value);
        }

        return parent::setAttribute($key, round($value, $this->rounds[$key]));
    }

    protected function hasValidRoundings()
    {
        return property_exists($this, 'rounds') && is_array($this->rounds);
    }

    protected function shouldRound($key, $value)
    {
        return isset($this->rounds[$key]) && is_int($this->rounds[$key]) && !is_null($value);
    }
}
