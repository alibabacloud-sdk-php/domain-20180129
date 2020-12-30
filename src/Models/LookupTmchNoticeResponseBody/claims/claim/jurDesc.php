<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\Tea\Model;

class jurDesc extends Model
{
    /**
     * @var string
     */
    public $jurCC;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'jurCC' => 'JurCC',
        'desc'  => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jurCC) {
            $res['JurCC'] = $this->jurCC;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jurDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JurCC'])) {
            $model->jurCC = $map['JurCC'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
