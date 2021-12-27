<?php

namespace Potter\Session;

trait SessionTrait
{
    final public function start(): void
    {
        session_start();
    }
}