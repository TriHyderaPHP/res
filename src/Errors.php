<?php

namespace Trihydera\Res;

/**
 * Contains preset error messages and status codes.
 */
class Errors
{
    /**
     * Array of preset error messages and status codes.
     *
     * @var array
     */
    public const PRESETS = [
        '' => ['Something went wrong', '200'],
        'Parameter' => ['Parameter {0} not found', '200'],
        'Method' => ['Method not allowed', '400'],
        'NotFound' => ['Not found', '404'],
        'InternalError' => ['Internal server error', '500'],
        'Authorization' => ['Authorization failed', '403']
    ];
}
