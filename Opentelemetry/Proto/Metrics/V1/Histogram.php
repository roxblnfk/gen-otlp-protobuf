<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Histogram represents the type of a metric that is calculated by aggregating
 * as a Histogram of all reported measurements over a time interval.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.Histogram</code>
 */
class Histogram extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.HistogramDataPoint data_points = 1;</code>
     */
    private $data_points;
    /**
     * aggregation_temporality describes if the aggregator reports delta changes
     * since last report time, or cumulative changes since a fixed start time.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.AggregationTemporality aggregation_temporality = 2;</code>
     */
    private $aggregation_temporality = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Metrics\V1\HistogramDataPoint[]|\Google\Protobuf\Internal\RepeatedField $data_points
     *     @type int $aggregation_temporality
     *           aggregation_temporality describes if the aggregator reports delta changes
     *           since last report time, or cumulative changes since a fixed start time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.HistogramDataPoint data_points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataPoints()
    {
        return $this->data_points;
    }

    /**
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.HistogramDataPoint data_points = 1;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\HistogramDataPoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Metrics\V1\HistogramDataPoint::class);
        $this->data_points = $arr;

        return $this;
    }

    /**
     * aggregation_temporality describes if the aggregator reports delta changes
     * since last report time, or cumulative changes since a fixed start time.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.AggregationTemporality aggregation_temporality = 2;</code>
     * @return int
     */
    public function getAggregationTemporality()
    {
        return $this->aggregation_temporality;
    }

    /**
     * aggregation_temporality describes if the aggregator reports delta changes
     * since last report time, or cumulative changes since a fixed start time.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.AggregationTemporality aggregation_temporality = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregationTemporality($var)
    {
        GPBUtil::checkEnum($var, \Opentelemetry\Proto\Metrics\V1\AggregationTemporality::class);
        $this->aggregation_temporality = $var;

        return $this;
    }

}

