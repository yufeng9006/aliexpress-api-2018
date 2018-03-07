<?php

/**
 * result
 * @author auto create
 */
class Result
{
	
	/** 
	 * 消息详情
	 **/
	public $content;
	
	/** 
	 * 图片地址
	 **/
	public $file_paths;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 消息ID
	 **/
	public $id;
	
	/** 
	 * 消息类别(product/order/member/store)不同的消息类别，typeId为相应的值，如messageType为product,typeId为productId,对应summary中有相应的附属性信，如果为product,则有产品相关的信息
	 **/
	public $message_type;
	
	/** 
	 * 发送者名字
	 **/
	public $sender_name;
	
	/** 
	 * 附属信息
	 **/
	public $summary;
	
	/** 
	 * 相关类型ID
	 **/
	public $type_id;	
}
?>