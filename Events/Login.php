<?php

/**
 * Lenevor Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.md.
 * It is also available through the world-wide-web at this URL:
 * https://lenevor.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Lenevor.com so we can send you a copy immediately.
 *
 * @package     Lenevor
 * @subpackage  Base
 * @link        https://lenevor.com
 * @copyright   Copyright (c) 2019 - 2025 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace Syscodes\Components\Auth\Events;

/**
 * The authentication user.
 */
class Login
{
    /**
     * The authentication guard name.
     * 
     * @var string $guard
     */
    public $guard;
    
    /**
     * Indicates if the user should be "remembered".
     * 
     * @var bool $remember
     */
    public $remember;

    /**
     * The authenticated user.
     * 
     * @var \Syscodes\Components\Contracts\Auth\Authenticatable $user
     */
    public $user;

    /**
     * Constructor. Create a new Validated class instance.
     * 
     * @param  string  $guard
     * @param  \Syscodes\Components\Contracts\Auth\Authenticatable  $user
     * @param  bool  $remember
     * 
     * @return void
     */
    public function __construct($guard, $user, $remember)
    {
        $this->user     = $user;
        $this->guard    = $guard;
        $this->remember = $remember;
    }
}