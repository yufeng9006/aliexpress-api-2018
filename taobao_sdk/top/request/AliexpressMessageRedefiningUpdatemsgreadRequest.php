<?php
/**
 * TOP API: aliexpress.message.redefining.updatemsgread request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressMessageRedefiningUpdatemsgreadRequest
{
	/** 
	 * 通道ID，即关系ID
	 **/
	private $channelId;
	
	/** 
	 * 查询类型
	 **/
	private $msgSources;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
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
		return "aliexpress.message.redefining.updatemsgread";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelId,"channelId");
		RequestCheckUtil::checkNotNull($this->msgSources,"msgSources");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
