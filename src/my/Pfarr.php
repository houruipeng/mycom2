<?php
namespace pf\arr;
use pf\arr\build\Base;
class Pfarr {
    protected $pf_array_link;
    protected function driver()
    {
        $this->pf_array_link = new Base();
        return $this;
    }
    public function __call($method, $params)
    {
        if ($this->pf_array_link === null) {
            $this->driver();
        }
        if (method_exists($this->pf_array_link, $method)) {
            return call_user_func_array([$this->pf_array_link, $method], $params);
        }
    }
    public static function single()
    {
        static $pf_array_link;
        if ($pf_array_link === null) {
            $pf_array_link = new static();
        }
        return $pf_array_link;
    }
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([static::single(), $name], $arguments);
    }
}
