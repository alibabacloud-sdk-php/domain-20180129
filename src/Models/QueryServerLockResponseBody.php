<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryServerLockResponseBody extends Model
{
    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $domainInstanceId;

    /**
     * @var string
     */
    public $lockInstanceId;

    /**
     * @var int
     */
    public $serverLockStatus;

    /**
     * @var string
     */
    public $lockProductId;
    protected $_name = [
        'startDate'        => 'StartDate',
        'gmtCreate'        => 'GmtCreate',
        'requestId'        => 'RequestId',
        'expireDate'       => 'ExpireDate',
        'domainName'       => 'DomainName',
        'userId'           => 'UserId',
        'gmtModified'      => 'GmtModified',
        'domainInstanceId' => 'DomainInstanceId',
        'lockInstanceId'   => 'LockInstanceId',
        'serverLockStatus' => 'ServerLockStatus',
        'lockProductId'    => 'LockProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainInstanceId) {
            $res['DomainInstanceId'] = $this->domainInstanceId;
        }
        if (null !== $this->lockInstanceId) {
            $res['LockInstanceId'] = $this->lockInstanceId;
        }
        if (null !== $this->serverLockStatus) {
            $res['ServerLockStatus'] = $this->serverLockStatus;
        }
        if (null !== $this->lockProductId) {
            $res['LockProductId'] = $this->lockProductId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryServerLockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainInstanceId'])) {
            $model->domainInstanceId = $map['DomainInstanceId'];
        }
        if (isset($map['LockInstanceId'])) {
            $model->lockInstanceId = $map['LockInstanceId'];
        }
        if (isset($map['ServerLockStatus'])) {
            $model->serverLockStatus = $map['ServerLockStatus'];
        }
        if (isset($map['LockProductId'])) {
            $model->lockProductId = $map['LockProductId'];
        }

        return $model;
    }
}
