<?php

/**
 * 操作日志列表
 * @author auto create
 */
class TpOperationLogDto
{
	
	/** 
	 * 操作类型
	 **/
	public $action_type;
	
	/** 
	 * 子订单ID
	 **/
	public $child_order_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * id
	 **/
	public $id;
	
	/** 
	 * 操作备注
	 **/
	public $memo;
	
	/** 
	 * 操作者
	 **/
	public $operator;
	
	/** 
	 * 订单ID
	 **/
	public $order_id;	
}
?>