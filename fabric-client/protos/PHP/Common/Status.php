<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Common;

/**
 * <pre>
 * These status codes are intended to resemble selected HTTP status codes
 * </pre>
 *
 * Protobuf enum <code>common.Status</code>
 */
class Status
{
    /**
     * <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * <code>SUCCESS = 200;</code>
     */
    const SUCCESS = 200;
    /**
     * <code>BAD_REQUEST = 400;</code>
     */
    const BAD_REQUEST = 400;
    /**
     * <code>FORBIDDEN = 403;</code>
     */
    const FORBIDDEN = 403;
    /**
     * <code>NOT_FOUND = 404;</code>
     */
    const NOT_FOUND = 404;
    /**
     * <code>REQUEST_ENTITY_TOO_LARGE = 413;</code>
     */
    const REQUEST_ENTITY_TOO_LARGE = 413;
    /**
     * <code>INTERNAL_SERVER_ERROR = 500;</code>
     */
    const INTERNAL_SERVER_ERROR = 500;
    /**
     * <code>SERVICE_UNAVAILABLE = 503;</code>
     */
    const SERVICE_UNAVAILABLE = 503;
}
