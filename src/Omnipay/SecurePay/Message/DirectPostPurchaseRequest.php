<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\SecurePay\Message;

/**
 * SecurePay Direct Post Purchase Request
 */
class DirectPostPurchaseRequest extends DirectPostAuthorizeRequest
{
    public $txnType = '0';
}
