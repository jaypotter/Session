<?php

namespace Potter\Session;

use Potter\DBAL\Database\DatabaseInterface;

abstract class AbstractSession implements SessionInterface
{
    abstract public function getDatabase(): DatabaseInterface;

    abstract public function setDatabase(DatabaseInterface $database): void;
}