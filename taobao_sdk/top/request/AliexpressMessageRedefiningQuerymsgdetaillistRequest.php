<?php
/**
 * TOP API: aliexpress.message.redefining.querymsgdetaillist request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressMessageRedefiningQuerymsgdetaillistRequest
{
	/** 
	 * 通道ID，即关系ID
	 **/
	private $channelId;
	
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 类型(message_center/order_msg)
	 **/
	private $msgSources;
	
	/** 
	 * 每页条数,pageSize取值范围(0~100) 最多返回前5000条数据
	 **/
	private $pageSize;
	
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

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "aliexpress.message.redefining.querymsgdetaillist";
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
