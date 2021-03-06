<?php

namespace Oriskami;

class EventQueue extends ApiResource
{
    /**
     * @return string path 
     */
    public static function path()
    {
        return "event_queues";
    }

    /**
     * @param string $id The ID of the login to retrieve.
     * @param array|string|null $opts
     *
     * @return Event
     */
    public static function retrieve($id, $opts = null)
    {
        return self::_retrieve($id, $opts);
    }


    /**
     * @param integer $id
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return Event The created login.
     */
    public static function update($id, $params = null, $opts = null)
    {
        return self::_update($id, $params, $opts);
    }

    /**
     * @param integer $id 
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return Event The deleted login.
     */
    public static function delete($id, $params = null, $opts = null)
    {
        return self::_delete($id, $params, $opts);
    }

    /**
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return array An array of Events.
     */
    public static function all($params = null, $opts = null)
    {
        return self::_all($params, $opts);
    }
}
