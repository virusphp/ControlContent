<?php
if(!function_exists('fieldError')){
/**
* field validation when page receiving response
*
* @param string $name
* @return string
*/
function fieldError($name){
return view('errors.fieldError', compact('name'))->render();
}
}

if(!function_exists('fieldStyle')){
/**
* field style. eg. has-error
*
* @param string $name
* @return string
*/
function fieldStyle($name){
return view('errors.fieldStyle', compact('name'))->render();
}
}