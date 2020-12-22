<?php

namespace jacuve\phpmvc;

use jacuve\phpmvc\db\DBModel;


abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}