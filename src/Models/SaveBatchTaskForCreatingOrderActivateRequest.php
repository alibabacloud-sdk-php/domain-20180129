<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest\orderActivateParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderActivateRequest extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var orderActivateParam[]
     */
    public $orderActivateParam;

    /**
     * @example 123124
     *
     * @var string
     */
    public $promotionNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCoupon;

    /**
     * @example false
     *
     * @var bool
     */
    public $usePromotion;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'couponNo'           => 'CouponNo',
        'lang'               => 'Lang',
        'orderActivateParam' => 'OrderActivateParam',
        'promotionNo'        => 'PromotionNo',
        'useCoupon'          => 'UseCoupon',
        'usePromotion'       => 'UsePromotion',
        'userClientIp'       => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderActivateParam) {
            $res['OrderActivateParam'] = [];
            if (null !== $this->orderActivateParam && \is_array($this->orderActivateParam)) {
                $n = 0;
                foreach ($this->orderActivateParam as $item) {
                    $res['OrderActivateParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
        }
        if (null !== $this->usePromotion) {
            $res['UsePromotion'] = $this->usePromotion;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForCreatingOrderActivateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderActivateParam'])) {
            if (!empty($map['OrderActivateParam'])) {
                $model->orderActivateParam = [];
                $n                         = 0;
                foreach ($map['OrderActivateParam'] as $item) {
                    $model->orderActivateParam[$n++] = null !== $item ? orderActivateParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }
        if (isset($map['UsePromotion'])) {
            $model->usePromotion = $map['UsePromotion'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
