<?php
/**
 * TOP API: aliexpress.postproduct.redefining.getproductgrouplist request
 * 
 * @author auto create
 * @since 1.0, 2017.08.14
 */
class AliexpressPostproductRedefiningGetproductgrouplistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "aliexpress.postproduct.redefining.getproductgrouplist";
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
