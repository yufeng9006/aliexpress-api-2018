<?php
/**
 * TOP API: aliexpress.message.redefining.addmsg request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressMessageRedefiningAddmsgRequest
{
	/** 
	 * 买家账号
	 **/
	private $buyerId;
	
	/** 
	 * 通道ID，即关系ID
	 **/
	private $channelId;
	
	/** 
	 * 内容
	 **/
	private $content;
	
	/** 
	 * 图片地址
	 **/
	private $imgPath;
	
	/** 
	 * 类型(message_center/order_msg)
	 **/
	private $msgSources;
	
	private $apiParas = array();
	
	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setImgPath($imgPath)
	{
		$this->imgPath = $imgPath;
		$this->apiParas["img_path"] = $imgPath;
	}

	public function getImgPath()
	{
		return $this->imgPath;
	}

	public function setMsgSources($msgSources)
	{
		$this->msgSources = $msgSources;
		$this->apiParas["msg_sources"] = $msgSources;
	}

	public function getMsgSources()
	{
		return $this->msgSources;
	}

	public function getApiMethodName()
	{
		return "aliexpress.message.redefining.addmsg";
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
