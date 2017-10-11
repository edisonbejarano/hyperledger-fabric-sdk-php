<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/configtx.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ConfigUpdate is used to submit a subset of config and to have the orderer apply to Configs
 * it is always submitted inside a ConfigUpdateEnvelope which allows the addition of signatures
 * resulting in a new total configuration.  The update is applied as follows:
 * 1. The versions from all of the elements in the read_set is verified against the versions in the existing config.
 *    If there is a mismatch in the read versions, then the config update fails and is rejected.
 * 2. Any elements in the write_set with the same version as the read_set are ignored.
 * 3. The corresponding mod_policy for every remaining element in the write_set is collected.
 * 4. Each policy is checked against the signatures from the ConfigUpdateEnvelope, any failing to verify are rejected
 * 5. The write_set is applied to the Configs and the ConfigGroupSchema verifies that the updates were legal
 * </pre>
 *
 * Protobuf type <code>common.ConfigUpdate</code>
 */
class ConfigUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Which channel this config update is for
     * </pre>
     *
     * <code>string channel_id = 1;</code>
     */
    private $channel_id = '';
    /**
     * <pre>
     * ReadSet explicitly lists the portion of the config which was read, this should be sparse with only Version set
     * </pre>
     *
     * <code>.common.ConfigGroup read_set = 2;</code>
     */
    private $read_set = null;
    /**
     * <pre>
     * WriteSet lists the portion of the config which was written, this should included updated Versions
     * </pre>
     *
     * <code>.common.ConfigGroup write_set = 3;</code>
     */
    private $write_set = null;

    public function __construct() {
        \GPBMetadata\Common\Configtx::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Which channel this config update is for
     * </pre>
     *
     * <code>string channel_id = 1;</code>
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * <pre>
     * Which channel this config update is for
     * </pre>
     *
     * <code>string channel_id = 1;</code>
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;
    }

    /**
     * <pre>
     * ReadSet explicitly lists the portion of the config which was read, this should be sparse with only Version set
     * </pre>
     *
     * <code>.common.ConfigGroup read_set = 2;</code>
     */
    public function getReadSet()
    {
        return $this->read_set;
    }

    /**
     * <pre>
     * ReadSet explicitly lists the portion of the config which was read, this should be sparse with only Version set
     * </pre>
     *
     * <code>.common.ConfigGroup read_set = 2;</code>
     */
    public function setReadSet(&$var)
    {
        GPBUtil::checkMessage($var, \Common\ConfigGroup::class);
        $this->read_set = $var;
    }

    /**
     * <pre>
     * WriteSet lists the portion of the config which was written, this should included updated Versions
     * </pre>
     *
     * <code>.common.ConfigGroup write_set = 3;</code>
     */
    public function getWriteSet()
    {
        return $this->write_set;
    }

    /**
     * <pre>
     * WriteSet lists the portion of the config which was written, this should included updated Versions
     * </pre>
     *
     * <code>.common.ConfigGroup write_set = 3;</code>
     */
    public function setWriteSet(&$var)
    {
        GPBUtil::checkMessage($var, \Common\ConfigGroup::class);
        $this->write_set = $var;
    }

}
