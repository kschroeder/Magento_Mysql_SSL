<?php

class Eschrade_Db_Pdo_Type_Mysql extends Mage_Core_Model_Resource_Type_Db_Pdo_Mysql
{

    protected function _getDbAdapterClassName()
    {
        return 'Eschrade_Db_Pdo_Mysql';
    }

    
}