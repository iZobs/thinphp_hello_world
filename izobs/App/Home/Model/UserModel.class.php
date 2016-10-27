<?php
/**
 * Created by PhpStorm.
 * User: izobs
 * Date: 2016/10/25
 * Time: 20:53
 */

namespace Home\Model;


use Think\Model;

class UserModel extends Model
{
    public function getPerson(){
        return "hello world";
    }
}