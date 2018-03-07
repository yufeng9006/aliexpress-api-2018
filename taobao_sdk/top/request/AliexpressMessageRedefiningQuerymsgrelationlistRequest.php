<?php
/**
 * TOP API: aliexpress.message.redefining.querymsgrelationlist request
 * 
 * @author auto create
 * @since 1.0, 2017.08.15
 */
class AliexpressMessageRedefiningQuerymsgrelationlistRequest
{
	/** 
	 * 1
	 **/
	private $currentPage;
	
	/** 
	 * 筛选条件(取值:dealStat/readStat/rank0/rank1/rank2/rank3/rank4/rank5)dealStat时将按未处理筛选，值为readStat时将按未读筛选，值为rank1时将按红色标签进行筛选
	 **/
	private $filter;
	
	/** 
	 * 查询类型
	 **/
	private $msgSources;
	
	/** 
	 * 每页条数,pageSize取值范围(0~100) 最多返回前5000条数据
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setFilter($filter)
	{
		$this->filter = $filter;
		$this->apiParas["filter"] = $filter;
	}

	public function getFilter()
	{
		return $this->filter;
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
		return "aliexpress.message.redefining.querymsgrelationlist";
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
