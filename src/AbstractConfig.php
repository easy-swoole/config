<?php


namespace EasySwoole\Config;


abstract class AbstractConfig
{
    const RUN_MODE_DEV = 'dev';
    const RUN_MODE_PRODUCE = 'produce';

    private $runMode;

    function __construct(string $runMode)
    {
        $this->runMode = $runMode;
    }

    public function runMode(string $runMode = null)
    {
        if($runMode !== null){
            $this->runMode = $runMode;
        }
        return $this->runMode;
    }

    abstract function getConf($key = null);
    abstract function setConf($key,$val):bool ;
    abstract function load(array $array):bool ;
    abstract function merge(array $array):bool ;
    abstract function clear():bool ;
}