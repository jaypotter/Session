<?php

namespace Potter\Session\Database;

use Potter\DBAL\Database\DatabaseInterface;

trait SessionDatabaseTrait
{
    private DatabaseInterface $database;

    final public function getDatabase(): DatabaseInterface
    {
        return $this->database;
    }

    final public function setDatabase(DatabaseInterface $database): void
    {
        $this->database = $database;
    }
}