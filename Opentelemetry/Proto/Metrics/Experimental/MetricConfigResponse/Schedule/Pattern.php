<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/experimental/metrics_config_service.proto

namespace Opentelemetry\Proto\Metrics\Experimental\MetricConfigResponse\Schedule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A light-weight pattern that can match 1 or more
 * metrics, for which this schedule will apply. The string is used to
 * match against metric names. It should not exceed 100k characters.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.experimental.MetricConfigResponse.Schedule.Pattern</code>
 */
class Pattern extends \Google\Protobuf\Internal\Message
{
    protected $match;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $equals
     *           matches the metric name exactly
     *     @type string $starts_with
     *           prefix-matches the metric name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\Experimental\MetricsConfigService::initOnce();
        parent::__construct($data);
    }

    /**
     * matches the metric name exactly
     *
     * Generated from protobuf field <code>string equals = 1;</code>
     * @return string
     */
    public function getEquals()
    {
        return $this->readOneof(1);
    }

    /**
     * matches the metric name exactly
     *
     * Generated from protobuf field <code>string equals = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEquals($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * prefix-matches the metric name
     *
     * Generated from protobuf field <code>string starts_with = 2;</code>
     * @return string
     */
    public function getStartsWith()
    {
        return $this->readOneof(2);
    }

    /**
     * prefix-matches the metric name
     *
     * Generated from protobuf field <code>string starts_with = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartsWith($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMatch()
    {
        return $this->whichOneof("match");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Pattern::class, \Opentelemetry\Proto\Metrics\Experimental\MetricConfigResponse_Schedule_Pattern::class);

