<?php

namespace Potter\Session\Database;

use Potter\DBAL\Database\DatabaseInterface;

interface SessionDatabaseInterface
{
    public function getDatabase(): DatabaseInterface;

    public function setDatabase(DatabaseInterface $database): void;
}