<?php
$data["my"] = ["title"=>"标题拉","hits"=>168,"content"=>"网站内容啦"];
$cls = new stdClass();
foreach ($data["my"] as $key =>$v){
    $cls->$key = $v;
}
print_r($cls);
/*
function a() {
}
include  "test2.php";

class b extends  CC{
    public function f() {
    }
}

function function_dump($funcname) {
    try {
        if(is_array($funcname)) {
            $func = new ReflectionMethod($funcname[0], $funcname[1]);
            $funcname = $funcname[1];
        } else {
            $func = new ReflectionFunction($funcname);
        }
    } catch (ReflectionException $e) {
        echo $e->getMessage();
        return;
    }
    $start = $func->getStartLine() - 1;
    $end =  $func->getEndLine() - 1;
    $filename = $func->getFileName();
    echo "function $funcname defined by $filename($start - $end)\n";
}
function_dump('a');
function_dump(array('b', 't'));
//$b = new b();
//function_dump(array($b, 'f'));*/
?>