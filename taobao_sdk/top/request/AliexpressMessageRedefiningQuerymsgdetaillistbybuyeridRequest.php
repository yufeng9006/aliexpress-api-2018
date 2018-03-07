<?php
/**
 * TOP API: aliexpress.message.redefining.querymsgdetaillistbybuyerid request
 * 
 * @author auto create
 * @since 1.0, 2017.08.15
 */
class AliexpressMessageRedefiningQuerymsgdetaillistbybuyeridRequest
{
	/** 
	 * 买家loginId
	 **/
	private $buyerId;
	
	/** 
	 * 当前页数
	 **/
	private $currentPage;
	
	/** 
	 * 每页条数(pageSize取值范围(0~100) 最多返回前5000条数据)
	 **/
	private $pageSize;
	
	/** 
	 * 卖家loginId(与买家建立关系的账号，即信息所属账号)
	 **/
	private $sellerId;
	
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

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "aliexpress.message.redefining.querymsgdetaillistbybuyerid";
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
