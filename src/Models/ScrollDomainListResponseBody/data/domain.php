<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data;

use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data\domain\dnsList;
use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data\domain\tag;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @description The Domain Name System (DNS) servers of the domain name.
     *
     * @var dnsList
     */
    public $dnsList;

    /**
     * @description The status of real-name verification for the domain name. Valid values:
     *
     *   **FAILED**: Real-name verification for the domain name fails.
     *   **SUCCEED**: Real-name verification for the domain name is successful.
     *   **NONAUDIT**: Real-name verification for the domain name is not performed.
     *   **AUDITING**: Real-name verification for the domain name is in progress.
     *
     * @example NONAUDIT
     *
     * @var string
     */
    public $domainAuditStatus;

    /**
     * @description The ID of the domain name group.
     *
     * @example 1234
     *
     * @var string
     */
    public $domainGroupId;

    /**
     * @description The name of the domain name group.
     *
     * @example test group
     *
     * @var string
     */
    public $domainGroupName;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **1**: The domain name needs to be renewed.
     *   **2**: The domain name needs to be redeemed.
     *   **3**: The domain name is normal.
     *   **4**: The domain name is being transferred out.
     *   **5**: The information about the domain name registrant is being modified.
     *   **6**: Real-name verification is not performed on the domain name.
     *   **7**: Real-name verification for the domain name fails.
     *   **8**: The real-name verification is being reviewed.
     *
     * @example 3
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **New gTLD**
     *   **gTLD**
     *   **ccTLD**
     *
     * @example gTLD
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The email address.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The number of days from the expiration date of the domain name to the current date.
     *
     * @example 10
     *
     * @var int
     */
    public $expirationCurrDateDiff;

    /**
     * @description The time when the domain name expires.
     *
     * @example 2019-02-15 17:30:35
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @description The time when the domain name expires. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1550223035000
     *
     * @var int
     */
    public $expirationDateLong;

    /**
     * @description Indicates whether the domain name expires. Valid values:
     *
     *   **1**: The domain name does not expire.
     *   **2**: The domain name expires.
     *
     * @example 1
     *
     * @var string
     */
    public $expirationDateStatus;

    /**
     * @description The instance ID of the domain name.
     *
     * @example S1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the domain name is a premium domain name.
     *
     * @example false
     *
     * @var bool
     */
    public $premium;

    /**
     * @description The service ID.
     *
     * @example 2a
     *
     * @var string
     */
    public $productId;

    /**
     * @description The registrant of the domain name.
     *
     * @example alibaba cloud
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @description The registration type of the domain name. Valid values:
     *
     *   **1**: individual.
     *   **2**: enterprise.
     *
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @description The time when the domain name was registered.
     *
     * @example 2017-02-15 00:00:00
     *
     * @var string
     */
    public $registrationDate;

    /**
     * @description The time when the domain name was registered. This value is a UNIX timestamp that indicates the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1487088000000
     *
     * @var int
     */
    public $registrationDateLong;

    /**
     * @description The remarks on the domain name.
     *
     * @example test domain
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2yyciz557g3q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource tag.
     *
     * @var tag
     */
    public $tag;

    /**
     * @description The Chinese name of the domain name registrant.
     *
     * @example 阿里云
     *
     * @var string
     */
    public $zhRegistrantOrganization;
    protected $_name = [
        'dnsList'                  => 'DnsList',
        'domainAuditStatus'        => 'DomainAuditStatus',
        'domainGroupId'            => 'DomainGroupId',
        'domainGroupName'          => 'DomainGroupName',
        'domainName'               => 'DomainName',
        'domainStatus'             => 'DomainStatus',
        'domainType'               => 'DomainType',
        'email'                    => 'Email',
        'expirationCurrDateDiff'   => 'ExpirationCurrDateDiff',
        'expirationDate'           => 'ExpirationDate',
        'expirationDateLong'       => 'ExpirationDateLong',
        'expirationDateStatus'     => 'ExpirationDateStatus',
        'instanceId'               => 'InstanceId',
        'premium'                  => 'Premium',
        'productId'                => 'ProductId',
        'registrantOrganization'   => 'RegistrantOrganization',
        'registrantType'           => 'RegistrantType',
        'registrationDate'         => 'RegistrationDate',
        'registrationDateLong'     => 'RegistrationDateLong',
        'remark'                   => 'Remark',
        'resourceGroupId'          => 'ResourceGroupId',
        'tag'                      => 'Tag',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsList) {
            $res['DnsList'] = null !== $this->dnsList ? $this->dnsList->toMap() : null;
        }
        if (null !== $this->domainAuditStatus) {
            $res['DomainAuditStatus'] = $this->domainAuditStatus;
        }
        if (null !== $this->domainGroupId) {
            $res['DomainGroupId'] = $this->domainGroupId;
        }
        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expirationCurrDateDiff) {
            $res['ExpirationCurrDateDiff'] = $this->expirationCurrDateDiff;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->expirationDateLong) {
            $res['ExpirationDateLong'] = $this->expirationDateLong;
        }
        if (null !== $this->expirationDateStatus) {
            $res['ExpirationDateStatus'] = $this->expirationDateStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->registrationDate) {
            $res['RegistrationDate'] = $this->registrationDate;
        }
        if (null !== $this->registrationDateLong) {
            $res['RegistrationDateLong'] = $this->registrationDateLong;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsList'])) {
            $model->dnsList = dnsList::fromMap($map['DnsList']);
        }
        if (isset($map['DomainAuditStatus'])) {
            $model->domainAuditStatus = $map['DomainAuditStatus'];
        }
        if (isset($map['DomainGroupId'])) {
            $model->domainGroupId = $map['DomainGroupId'];
        }
        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpirationCurrDateDiff'])) {
            $model->expirationCurrDateDiff = $map['ExpirationCurrDateDiff'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExpirationDateLong'])) {
            $model->expirationDateLong = $map['ExpirationDateLong'];
        }
        if (isset($map['ExpirationDateStatus'])) {
            $model->expirationDateStatus = $map['ExpirationDateStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RegistrationDate'])) {
            $model->registrationDate = $map['RegistrationDate'];
        }
        if (isset($map['RegistrationDateLong'])) {
            $model->registrationDateLong = $map['RegistrationDateLong'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }

        return $model;
    }
}
