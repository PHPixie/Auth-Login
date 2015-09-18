<?php

namespace PHPixie\AuthLogin;

class Builder
{
    protected $security;
    
    protected $providers;
    
    public function __construct($security)
    {
        $this->security = $security;
    }
    
    public function providers()
    {
        if($this->providers === null) {
            $this->providers = $this->buildProviders();
        }
        
        return $this->providers;
    }
    
    protected function buildProviders()
    {
        return new Providers($this->security);
    }
}