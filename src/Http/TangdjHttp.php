<?php

namespace Tangdj\Http;

class TangdjHttp
{
    static function __callStatic($method, $args)
    {
        return PendingRequest::new()->{$method}(...$args);
    }
}