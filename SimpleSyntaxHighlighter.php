<?php 
/*
*************************************************
*************************************************
Author: Dharmendra Kumar

Description: SimpleSyntaxHighlighter is a PHP class that can highlight syntax as well as word given by user. 

*************************************************
*/
class SimpleSyntaxHighlighter{

public $syntax;
public $color;
public $match;
private $string;

function HighlightThis($match,$syntax,$color='Yellow'){

if(!empty($match) && !empty($syntax))
 return $this->string=preg_replace("/$match/", '<span style="background:'.$color.'">'.$match.'</span>', $syntax);

}



}