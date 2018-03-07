<?php
/**
 * TOP API: aliexpress.issue.redefining.leaveordermessage request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressIssueRedefiningLeaveordermessageRequest
{
	/** 
	 * 内容
	 **/
	private $content;
	
	/** 
	 * 图片url地址
	 **/
	private $image;
	
	/** 
	 * 订单号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "aliexpress.issue.redefining.leaveordermessage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
