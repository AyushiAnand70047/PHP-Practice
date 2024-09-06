<?php
// line
echo "The current line number is ".__LINE__."<br/>";
// file
echo "Current PHP script name is ".__FILE__."<br/>";
//dir
echo "Current directory is ".__DIR__."<br/>";
// function
function hello(){
    $greetings = "Hello Everyone";
    echo "$greetings The current function is ".__FUNCTION__;
}
hello();
?>