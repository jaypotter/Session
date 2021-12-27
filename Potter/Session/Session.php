<?php

namespace Potter\Session;

use Potter\Session\Database\SessionDatabaseTrait;

final class Session extends AbstractSession
{
    use SessionDatabaseTrait;
}