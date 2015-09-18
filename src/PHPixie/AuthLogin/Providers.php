<?php

namespace PHPixie\AuthLogin;

class Providers extends \PHPixie\Auth\Providers\Builder\Implementation
{
    protected $security;
    
    public function __construct($security)
    {
        $this->security = $security;
    }
    
    public function buildPasswordProvider($domain, $name, $configData)
    {
        return new Providers\Password(
            $this->security->password(),
            $domain,
            $name,
            $configData
        );
    }
    
    public function name()
    {
        return 'login';
    }
}