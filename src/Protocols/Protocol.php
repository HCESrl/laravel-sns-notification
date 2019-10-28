<?php

namespace NotificationChannels\Sns\Protocols;


use Illuminate\Support\Fluent;
use Illuminate\Support\Str;


/**
 * @property string message
 * @method $this message( string $message )
 */
abstract class Protocol extends Fluent
{

    /**
     * @param string $method
     * @param array  $parameters
     *
     * @return $this
     */
    public function __call ( $method, $parameters )
    {
        return parent::__call ( Str::studly ( $method ), $parameters );
    }

}
