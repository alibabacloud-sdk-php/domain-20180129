<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckProcessingServerLockApplyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $exists;
    protected $_name = [
        'requestId' => 'RequestId',
        'exists'    => 'Exists',
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
        if (null !== $this->exists) {
            $res['Exists'] = $this->exists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckProcessingServerLockApplyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Exists'])) {
            $model->exists = $map['Exists'];
        }

        return $model;
    }
}
