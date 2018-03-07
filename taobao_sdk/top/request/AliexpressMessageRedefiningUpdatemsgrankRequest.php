<?php
/**
 * TOP API: aliexpress.message.redefining.updatemsgrank request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressMessageRedefiningUpdatemsgrankRequest
{
	/** 
	 * 通道ID(即关系ID)
	 **/
	private $channelId;
	
	/** 
	 * 标签(rank0,rank1,rank2,rank3,rank4,rank5)rank0~rank5为六种不同颜色标记依次为白，红，橙，绿，蓝，紫
	 **/
	private $rank;
	
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

	public function setRank($rank)
	{
		$this->rank = $rank;
		$this->apiParas["rank"] = $rank;
	}

	public function getRank()
	{
		return $this->rank;
	}

	public function getApiMethodName()
	{
		return "aliexpress.message.redefining.updatemsgrank";
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
