<?php

class Eschrade_Db_Pdo_Mysql extends Magento_Db_Adapter_Pdo_Mysql
{
    
    public function __construct($config)
    {
        if ($config instanceof Zend_Config) {
            $config = $config->toArray();
        }
        if (isset($config['secure_driver_options']) && is_array($config['secure_driver_options'])) {
            if (!isset($config['driver_options']) || !is_array($config['driver_options'])) {
                $config['driver_options'] = [];
            }
            foreach ($config['secure_driver_options'] as $key => $value) {
                $constant = 'PDO::' . $key;
                $constVal = constant($constant);
                if ($constVal !== null) {
                    $config['driver_options'][$constVal] = $value;
                }
            }
        }
        if (isset($config['secure_driver_options']))
        {
            unset($config['secure_driver_options']);
        }
        parent::__construct($config);
    }
    
}
