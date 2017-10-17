<?php
/**
 * Yasmin
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: MIT
*/

namespace CharlotteDunois\Yasmin\Structures;

class VoiceState extends Structure { //TODO: Implementation
    protected $channel;
    
    protected $id;
    protected $user;
    
    function __construct($client, $guild, $voice) {
        parent::__construct($client);
        $this->guild = $guild;
        
        $this->id = $voice['user_id'];
    }
    
    function __get($name) {
        if(\property_exists($this, $name)) {
            return $this->$name;
        }
        
        switch($name) {
            case 'guild':
                return $this->channel->guild;
            break;
        }
        
        return null;
    }
    
    function __toString() {
        return '<@'.($this->nickname ? '!' : '').$this->id.'>';
    }
}
