<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody\registrantProfiles;
use AlibabaCloud\Tea\Model;

class QueryRegistrantProfilesResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPageNum;

    /**
     * @example true
     *
     * @var bool
     */
    public $nextPage;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $prePage;

    /**
     * @var registrantProfiles
     */
    public $registrantProfiles;

    /**
     * @example 94053D79-7455-4F71-BF06-20EB2DEDE6BD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 9
     *
     * @var int
     */
    public $totalItemNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum'     => 'CurrentPageNum',
        'nextPage'           => 'NextPage',
        'pageSize'           => 'PageSize',
        'prePage'            => 'PrePage',
        'registrantProfiles' => 'RegistrantProfiles',
        'requestId'          => 'RequestId',
        'totalItemNum'       => 'TotalItemNum',
        'totalPageNum'       => 'TotalPageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }
        if (null !== $this->registrantProfiles) {
            $res['RegistrantProfiles'] = null !== $this->registrantProfiles ? $this->registrantProfiles->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }
        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRegistrantProfilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }
        if (isset($map['RegistrantProfiles'])) {
            $model->registrantProfiles = registrantProfiles::fromMap($map['RegistrantProfiles']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }
        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
