<?php

namespace NiclasHedam\EloquentRound;

trait RoundsDecimals
{
    public function setAttribute($key, $value)
    {
        if (!$this->hasValidRoundings() || !$this->shouldRound($key)) {
            return parent::setAttribute($key, $value);
        }

        return parent::setAttribute($key, round($value, $this->rounds[$key]));
    }

    protected function hasRoundings()
    {
        return property_exists($this, 'rounds');
    }

    protected function hasValidRoundings()
    {
        return $this->hasRoundings() && is_array($this->rounds);
    }

    protected function shouldRound($key)
    {
        return isset($this->rounds[$key]) && is_int($this->rounds[$key]);
    }
}
