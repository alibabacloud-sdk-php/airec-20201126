<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2020-04-23T06:08:48.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description meta
     *
     * @var meta
     */
    public $meta;

    /**
     * @example DRAFT
     *
     * @var string
     */
    public $status;

    /**
     * @example 1666854602398
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'meta'        => 'meta',
        'status'      => 'status',
        'taskId'      => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
