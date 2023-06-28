<?php

namespace app\core;

abstract class UserModel extends Dbmodel
{
    abstract public function getDisplayName(): string;
}