<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;
	public function __construct($request){
		$this->request=$request;
		if ($this->request['controller']==""){
			$this->controller='home';	
			
		}else{
			$this->controller=$this->request['controller'];
			}
		if ($this->request['action']==""){
			$this->action='index';
		}else{
			$this->action=$this->request['action'];
			
		}
 

	}
	public function createController(){
		if (class_exists($this->controller)){
			$parents= class_parents($this->controller);
			if(in_array("Controller",$parents)){
				if(method_exists($this->controller, $this->action)){
					 
					return new $this->controller($this->action , $this->request);
					 
					
				}else{
					echo "<h1>method does not exists</h1>";
					return;
				}
			}else {
				echo "<h1>base controller not found</h1>";
					return;
			}
			
		}else
		{echo "<h1> controller class does not exist</h1>";
					return;}
		
	}
	public function proba(){
		echo "moze";
	}
}
?>