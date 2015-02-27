<?php
namespace Monad;

trait LiftTrait 
{
    /**
     * Converts values returned by regular function to monadic value.
     *
     * @param callable $transformation
     * @return MonadInterface
     */
    public function lift(callable $transformation)
    {
        return static::create($this->bind($transformation));
    }
}