<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends  Controller
{
	private $total;   		 				//数据表中总记录数
	private $pageCount;		 				//总页数
	private $pageRows; 						//每页显示行数
	private $pageCurr;						//当前在第几页
	private $url;							//请求url
	public $limit;   		 				//SQL语句使用limit从句,限制获取记录个数
	private $listNum = 5; 					//列表中个数
	private $nav = array(
						'first'=> "首页", 
						'prev' => "上一页", 
						'next' => "下一页", 							
						'last' => "末页"
					); 			
		
	//构造函数接受初始化参数
	function __construct($_total=0,$_pageRows=15,$_queryString=''){
		$this->url = $this->getUrl($_queryString);
		$this->total = $_total;
		$this->pageRows = $_pageRows;
		$this->pageCount = ceil($this->total / $this->pageRows);
		$this->pageCurr = $this->getCurrentPage();			
		$this->limit = $this->getLimit();
	
	}
		
	//初始化当前页
	private function getCurrentPage(){
		if(!empty($_GET["page"])){
			$_page = (int) $_GET["page"];	//通过类型转换过滤非法输入
			if($_page > $this->pageCount){
				$_page = $this->pageCount;
			}elseif($_page<1){
				$_page = 1;
			}
		}elseif($this->total>0){
			$_page = 1;
		}else{
			$_page  = 0;
		}
		
		return  $_page;
	}
	
	/*返回具体limit范围的算法*/
	private function getLimit(){
		if($this->pageCurr > 0)
			$_limit =  ($this->pageCurr-1)*$this->pageRows.", {$this->pageRows}";
		else
			$_limit =  0;			
		return $_limit ;
	}
	
	/*显示分页功能*/
	function showPage(){
		$arr = func_get_args();
	
		$html[0] = "<i>共 {$this->total} 条记录 </i>";
		$html[1] = "<i>本页从第 {$this->fromTo()} 记录</i> ";
		$html[2] = "<i>{$this->pageCurr}/{$this->pageCount}</i>";
		$html[3] = $this->getPrev();
		$html[4] = $this->getList();
		$html[5] = $this->getNext();
		$html[6] = $this->goPage();
	
		$_str = '<div id="page">';
		if(count($arr) < 1)
			$arr = array(0,1,2,3,4,5,6);
			
		for($i = 0; $i < count($arr); $i++)
			$_str .= $html[$arr[$i]];
	
		$_str .= '</div>';
		
		return $_str;
	}
	
	//本页是从X条开始到Y条结束
	private function fromTo(){
		if($this->total==0){
			$_start =0;
			$_end=0;
		}else{
			$_start = ($this->pageCurr-1)*$this->pageRows+1;
			$_end = min($this->pageCurr*$this->pageRows,$this->total);
		}
	
		return $_start.' 到 '.$_end;
	}
	
	//上一页
	private function getPrev(){
		if($this->pageCurr > 1) {
			$_str = "<a href='{$this->url}page=1'>{$this->nav['first']}</a>";
			$_str .= "<a href='{$this->url}page=".($this->pageCurr-1)."'>{$this->nav['prev']}</a>";		
			return $_str;
		}		
	}

	//下一页
	private function getNext(){
		if($this->pageCurr != $this->pageCount) {
			$_str = "<a href='{$this->url}page=".($this->pageCurr+1)."'>{$this->nav['next']}</a>";
			$_str .= "<a href='{$this->url}page=".($this->pageCount)."'>{$this->nav['last']}</a>";
			return $_str;
		}
	}
	//获取页面列表
	private function getList(){
		$_nav = "";			
		$_num = floor($this->listNum/2);
		/*当前页前面的列表 */
		for($i = $_num; $i >= 1; $i--){
			$_page = $this->pageCurr-$i;

			if($_page >= 1)
				$_nav .= "<a href='{$this->url}page={$_page}'>{$_page}</a>";
		}
		
		/*当前页的信息 */
		if($this->pageCurr >= 1)
			$_nav .= "<span>{$this->pageCurr}</span>";
		
		/*当前页后面的列表 */
		for($i=1; $i <= $_num; $i++){
			$_page = $this->pageCurr+$i;
			if($_page <= $this->pageCount)
				$_nav .= "<a href='{$this->url}page={$_page}'>{$_page}</a>";
			else
				break;
		}
		$_nav  .= '';
		return $_nav;
	}
	
	//跳转到某页
	private function goPage(){
		if($this->pageCount > 1) {
				return '<input id="input1" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>'.$this->pageCount.')?'.$this->pageCount.':this.value;location=\''.$this->url.'page=\'+page+\'\'}" value="'.$this->pageCurr.'" onkeyup= "value=value.replace(/[^\d]/g,\'\')"><input id="submitButton" type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>'.$this->pageCount.')?'.$this->pageCount.':this.previousSibling.value;location=\''.$this->url.'page=\'+page+\'\'">';
			}
	}
	
	
	//获取当前url,主要是对全局变量$_SERVER的分析
	private function getUrl($_query){	
		$_uri = $_SERVER["REQUEST_URI"];	
		$_url = strstr($_uri,'?') ? $_uri :  $_uri.'?';	 
		
		if(is_array($_query))
			$_url .= http_build_query($_query);
		else if($_query != "")
			$_url .= "&".trim($_query, "?&");
			
		$arr = parse_url($_url);
		if(isset($arr["query"])){
			parse_str($arr["query"], $arrs); 
			unset($arrs["page"]);
			$_url = $arr["path"].'?'.http_build_query($arrs);
		}			
			
			
		if(strstr($_url, '?')) {
			if(substr($_url, -1)!='?')
				$_url = $_url.'&';
		}else{
			$_url = $_url.'?';
		}
		return $_url;
	}
		
}