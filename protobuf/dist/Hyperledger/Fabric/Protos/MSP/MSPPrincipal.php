<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: msp/msp_principal.proto

namespace Hyperledger\Fabric\Protos\MSP;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MSPPrincipal aims to represent an MSP-centric set of identities.
 * In particular, this structure allows for definition of
 *  - a group of identities that are member of the same MSP
 *  - a group of identities that are member of the same organization unit
 *    in the same MSP
 *  - a group of identities that are administering a specific MSP
 *  - a specific identity
 * Expressing these groups is done given two fields of the fields below
 *  - Classification, that defines the type of classification of identities
 *    in an MSP this principal would be defined on; Classification can take
 *    three values:
 *     (i)  ByMSPRole: that represents a classification of identities within
 *          MSP based on one of the two pre-defined MSP rules, "member" and "admin"
 *     (ii) ByOrganizationUnit: that represents a classification of identities
 *          within MSP based on the organization unit an identity belongs to
 *     (iii)ByIdentity that denotes that MSPPrincipal is mapped to a single
 *          identity/certificate; this would mean that the Principal bytes
 *          message
 *
 * Generated from protobuf message <code>common.MSPPrincipal</code>
 */
class MSPPrincipal extends \Google\Protobuf\Internal\Message
{
    /**
     * Classification describes the way that one should process
     * Principal. An Classification value of "ByOrganizationUnit" reflects
     * that "Principal" contains the name of an organization this MSP
     * handles. A Classification value "ByIdentity" means that
     * "Principal" contains a specific identity. Default value
     * denotes that Principal contains one of the groups by
     * default supported by all MSPs ("admin" or "member").
     *
     * Generated from protobuf field <code>.common.MSPPrincipal.Classification principal_classification = 1;</code>
     */
    private $principal_classification = 0;
    /**
     * Principal completes the policy principal definition. For the default
     * principal types, Principal can be either "Admin" or "Member".
     * For the ByOrganizationUnit/ByIdentity values of Classification,
     * PolicyPrincipal acquires its value from an organization unit or
     * identity, respectively.
     *
     * Generated from protobuf field <code>bytes principal = 2;</code>
     */
    private $principal = '';

    public function __construct() {
        \GPBMetadata\Msp\MspPrincipal::initOnce();
        parent::__construct();
    }

    /**
     * Classification describes the way that one should process
     * Principal. An Classification value of "ByOrganizationUnit" reflects
     * that "Principal" contains the name of an organization this MSP
     * handles. A Classification value "ByIdentity" means that
     * "Principal" contains a specific identity. Default value
     * denotes that Principal contains one of the groups by
     * default supported by all MSPs ("admin" or "member").
     *
     * Generated from protobuf field <code>.common.MSPPrincipal.Classification principal_classification = 1;</code>
     * @return int
     */
    public function getPrincipalClassification()
    {
        return $this->principal_classification;
    }

    /**
     * Classification describes the way that one should process
     * Principal. An Classification value of "ByOrganizationUnit" reflects
     * that "Principal" contains the name of an organization this MSP
     * handles. A Classification value "ByIdentity" means that
     * "Principal" contains a specific identity. Default value
     * denotes that Principal contains one of the groups by
     * default supported by all MSPs ("admin" or "member").
     *
     * Generated from protobuf field <code>.common.MSPPrincipal.Classification principal_classification = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrincipalClassification($var)
    {
        GPBUtil::checkEnum($var, \Hyperledger\Fabric\Protos\MSP\MSPPrincipal_Classification::class);
        $this->principal_classification = $var;

        return $this;
    }

    /**
     * Principal completes the policy principal definition. For the default
     * principal types, Principal can be either "Admin" or "Member".
     * For the ByOrganizationUnit/ByIdentity values of Classification,
     * PolicyPrincipal acquires its value from an organization unit or
     * identity, respectively.
     *
     * Generated from protobuf field <code>bytes principal = 2;</code>
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Principal completes the policy principal definition. For the default
     * principal types, Principal can be either "Admin" or "Member".
     * For the ByOrganizationUnit/ByIdentity values of Classification,
     * PolicyPrincipal acquires its value from an organization unit or
     * identity, respectively.
     *
     * Generated from protobuf field <code>bytes principal = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkString($var, False);
        $this->principal = $var;

        return $this;
    }

}

