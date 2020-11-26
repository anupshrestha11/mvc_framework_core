<?php


namespace anup\phpmvc;


use anup\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
abstract  public function getDisplayName():string;
}