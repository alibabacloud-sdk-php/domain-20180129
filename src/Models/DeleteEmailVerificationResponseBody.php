<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationResponseBody\failList;
use AlibabaCloud\SDK\Domain\V20180129\Models\DeleteEmailVerificationResponseBody\successList;
use AlibabaCloud\Tea\Model;

class DeleteEmailVerificationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successList[]
     */
    public $successList;

    /**
     * @var failList[]
     */
    public $failList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'successList' => 'SuccessList',
        'failList'    => 'FailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successList) {
            $res['SuccessList'] = [];
            if (null !== $this->successList && \is_array($this->successList)) {
                $n = 0;
                foreach ($this->successList as $item) {
                    $res['SuccessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failList) {
            $res['FailList'] = [];
            if (null !== $this->failList && \is_array($this->failList)) {
                $n = 0;
                foreach ($this->failList as $item) {
                    $res['FailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEmailVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessList'])) {
            if (!empty($map['SuccessList'])) {
                $model->successList = [];
                $n                  = 0;
                foreach ($map['SuccessList'] as $item) {
                    $model->successList[$n++] = null !== $item ? successList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailList'])) {
            if (!empty($map['FailList'])) {
                $model->failList = [];
                $n               = 0;
                foreach ($map['FailList'] as $item) {
                    $model->failList[$n++] = null !== $item ? failList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
