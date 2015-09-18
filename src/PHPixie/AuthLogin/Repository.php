<?php

namespace PHPixie\AuthLogin;

interface Repository extends \PHPixie\Auth\Repositories\Repository
{
    public function getByLogin($login);
}