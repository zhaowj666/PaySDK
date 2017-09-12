<?php
namespace Yurun\PaySDK\Weixin\Notify;

use \Yurun\PaySDK\Weixin\Notify\Base;
use \Yurun\PaySDK\Weixin\Reply\PayMode1 as ReplyPayMode1;

abstract class PayMode1 extends Base
{
	/**
	 * 返回数据
	 * @var \Yurun\PaySDK\Weixin\Reply\PayMode1
	 */
	public $replyData;

	public function __construct()
	{
		parent::__construct();
		$this->replyData = new ReplyPayMode1;
	}
}