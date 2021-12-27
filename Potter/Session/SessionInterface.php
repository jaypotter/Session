<?php

namespace Potter\Session;

use Potter\Session\Database\SessionDatabaseInterface;

interface SessionInterface extends SessionDatabaseInterface
{
    public function start(): void;
}