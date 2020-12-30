<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForUpdatingContactInfoRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var bool
     */
    public $addTransferLock;
    protected $_name = [
        'userClientIp'        => 'UserClientIp',
        'lang'                => 'Lang',
        'domainName'          => 'DomainName',
        'instanceId'          => 'InstanceId',
        'registrantProfileId' => 'RegistrantProfileId',
        'contactType'         => 'ContactType',
        'addTransferLock'     => 'AddTransferLock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->addTransferLock) {
            $res['AddTransferLock'] = $this->addTransferLock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForUpdatingContactInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['AddTransferLock'])) {
            $model->addTransferLock = $map['AddTransferLock'];
        }

        return $model;
    }
}
