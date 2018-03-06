<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/3/6
 * Time: 14:06
 */

class Director
{
    public function traverseDir($dir){
       $filesArr = [];
       //如果能打开目录, 则往下遍历, 不能打开目录则说明错误原因
       if(@$dirHandle = opendir($dir)){
           while($file = readdir($dirHandle)){
               //如果文件名是目录, 则继续递归遍历
               if($file !== ".." && $file !== "."){
                   if(is_dir($dir."/".$file)){
                       $filesArr[$file] = $this->traverseDir($dir."/".$file);
                   }
                   else{
                       $filesArr[] = $file;
                   }
               }
           }
           return $filesArr;
       }
       throw new Exception("当前文件路径不是一个文件夹");
    }
}

$dir = new Director();
print_r($dir->traverseDir("/mnt"));