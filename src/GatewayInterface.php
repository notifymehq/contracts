<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three LTD <support@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Contracts;

interface GatewayInterface
{
    /**
     * Send a notification.
     *
     * @param string   $to
     * @param string   $message
     * @param string[] $options
     *
     * @return \NotifyMeHQ\Contracts\ResponseInterface
     */
    public function notify($to, $message, array $options = []);
}
