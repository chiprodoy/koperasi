<?php

if(! function_exists('prefixActive')){
	function prefixActive($prefixName)
	{
		return	request()->route()->getPrefix() == $prefixName ? 'active' : '';
	}
}

if(! function_exists('prefixBlock')){
	function prefixBlock($prefixName)
	{
		return	request()->route()->getPrefix() == $prefixName ? 'block' : 'none';
	}
}

if(! function_exists('routeActive')){
	function routeActive($routeName)
	{
		return	request()->routeIs($routeName) ? 'active' : '';
	}
}
if(! function_exists('route_from')){
    function route_from($routePatern,object $rowData=null){
        $routepath=explode('/',$routePatern);
        $routeName=$routepath[0];
        $routeParam=[];
        foreach($routepath as $k =>$v){
            $v=strtolower(str_replace(['{','}'],'',$v));
            if($k > 0){
                if($rowData && $rowData->$v) $routeParam[]=$rowData->$v;
                else $routeParam[]=$v;
            }
        }
        return route($routeName,$routeParam);
    }
}
