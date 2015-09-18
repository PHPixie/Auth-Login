<?php

namespace PHPixie;

class AuthLogin
{
    protected $builder;
    
    public function __construct($security)
    {
        $this->builder = $this->buildBuilder($security);
    }
    
    public function providers()
    {
        return $this->builder->providers();
    }
    
    public function builder()
    {
        return $this->builder;
    }
    
    protected function buildBuilder($security)
    {
        return new AuthLogin\Builder($security);
    }
}