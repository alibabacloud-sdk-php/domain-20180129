<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForDomainRealNameVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $domainNameVerificationStatus;
    protected $_name = [
        'date'                         => 'Date',
        'failReason'                   => 'FailReason',
        'domainNameVerificationStatus' => 'DomainNameVerificationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->domainNameVerificationStatus) {
            $res['DomainNameVerificationStatus'] = $this->domainNameVerificationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['DomainNameVerificationStatus'])) {
            $model->domainNameVerificationStatus = $map['DomainNameVerificationStatus'];
        }

        return $model;
    }
}
