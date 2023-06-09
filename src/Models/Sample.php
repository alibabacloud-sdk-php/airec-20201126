<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta;
use AlibabaCloud\Tea\Model;

class Sample extends Model
{
    /**
     * @example 2021-12-07T12:28:52.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-07T12:28:52.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var meta
     */
    public $meta;

    /**
     * @example 1638880131873
     *
     * @var string
     */
    public $sampleId;

    /**
     * @example 样本状态 Unready 未完成配置  Ready   配置完成  Generating 样本生成中  Success  样本生成成功  Failed 样本生成失败  Formatting 格式化中  Formatted 格式化完成  FormatFailed 格式化失败  Applied 已应用到模型中
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'meta'        => 'Meta',
        'sampleId'    => 'SampleId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->sampleId) {
            $res['SampleId'] = $this->sampleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Sample
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['SampleId'])) {
            $model->sampleId = $map['SampleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
