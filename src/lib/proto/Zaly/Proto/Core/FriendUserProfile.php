<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/user.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.FriendUserProfile</code>
 */
class FriendUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * friend user profile
     *
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     */
    private $profile = null;
    /**
     * true:mute false:not mute
     *
     * Generated from protobuf field <code>bool mute = 2;</code>
     */
    private $mute = false;
    /**
     * relation between to user
     *
     * Generated from protobuf field <code>.core.FriendRelationType relation = 3;</code>
     */
    private $relation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zaly\Proto\Core\PublicUserProfile $profile
     *           friend user profile
     *     @type bool $mute
     *           true:mute false:not mute
     *     @type int $relation
     *           relation between to user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\User::initOnce();
        parent::__construct($data);
    }

    /**
     * friend user profile
     *
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     * @return \Zaly\Proto\Core\PublicUserProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * friend user profile
     *
     * Generated from protobuf field <code>.core.PublicUserProfile profile = 1;</code>
     * @param \Zaly\Proto\Core\PublicUserProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\PublicUserProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * true:mute false:not mute
     *
     * Generated from protobuf field <code>bool mute = 2;</code>
     * @return bool
     */
    public function getMute()
    {
        return $this->mute;
    }

    /**
     * true:mute false:not mute
     *
     * Generated from protobuf field <code>bool mute = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setMute($var)
    {
        GPBUtil::checkBool($var);
        $this->mute = $var;

        return $this;
    }

    /**
     * relation between to user
     *
     * Generated from protobuf field <code>.core.FriendRelationType relation = 3;</code>
     * @return int
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * relation between to user
     *
     * Generated from protobuf field <code>.core.FriendRelationType relation = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRelation($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\FriendRelationType::class);
        $this->relation = $var;

        return $this;
    }

}

