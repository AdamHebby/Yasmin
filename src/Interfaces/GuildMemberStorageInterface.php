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
 * Something all guild member storages implement. The storage also is used as factory.
 */
interface GuildMemberStorageInterface extends StorageInterface
{
    /**
     * Returns the current element. From Iterator interface.
     *
     * @return \CharlotteDunois\Yasmin\Models\GuildMember
     */
    public function current();

    /**
     * Fetch the key from the current element. From Iterator interface.
     *
     * @return string
     */
    public function key();

    /**
     * Advances the internal pointer. From Iterator interface.
     *
     * @return \CharlotteDunois\Yasmin\Models\GuildMember|false
     */
    public function next();

    /**
     * Resets the internal pointer. From Iterator interface.
     *
     * @return \CharlotteDunois\Yasmin\Models\GuildMember|false
     */
    public function rewind();

    /**
     * Checks if current position is valid. From Iterator interface.
     *
     * @return bool
     */
    public function valid();

    /**
     * Returns all items.
     *
     * @return \CharlotteDunois\Yasmin\Models\GuildMember[]
     */
    public function all();

    /**
     * Resolves given data to a guildmember.
     *
     * @param  \CharlotteDunois\Yasmin\Models\GuildMember|\CharlotteDunois\Yasmin\Models\User|string|int $guildmember string/int = user ID
     * @return \CharlotteDunois\Yasmin\Models\GuildMember
     * @throws \InvalidArgumentException
     */
    public function resolve($guildmember);

    /**
     * Determines if a given key exists in the collection.
     *
     * @param  string $key
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function has($key);

    /**
     * Returns the item at a given key. If the key does not exist, null is returned.
     *
     * @param  string $key
     * @return \CharlotteDunois\Yasmin\Models\GuildMember|null
     * @throws \InvalidArgumentException
     */
    public function get($key);

    /**
     * Sets a key-value pair.
     *
     * @param  string                                     $key
     * @param  \CharlotteDunois\Yasmin\Models\GuildMember $value
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function set($key, $value);

    /**
     * Factory to create (or retrieve existing) guild members.
     *
     * @param    array $data
     * @return   \CharlotteDunois\Yasmin\Models\GuildMember
     * @internal
     */
    public function factory(array $data);
}
