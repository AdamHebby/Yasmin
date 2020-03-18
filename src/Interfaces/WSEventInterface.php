<?php
/**
 * Yasmin
 * Copyright 2017-2019 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Yasmin/blob/master/LICENSE
 */

namespace CharlotteDunois\Yasmin\Interfaces;

/**
 * WS Event interface.
 *
 * @internal
 */
interface WSEventInterface
{
    /**
     * Constructor.
     */
    public function __construct(\CharlotteDunois\Yasmin\Client $client, \CharlotteDunois\Yasmin\WebSocket\WSManager $wsmanager);

    /**
     * Handles events.
     *
     * @return void
     */
    public function handle(\CharlotteDunois\Yasmin\WebSocket\WSConnection $ws, $data): void;
}
