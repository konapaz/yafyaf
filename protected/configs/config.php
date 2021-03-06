<?

return array(
    'mode' => 'DEBUG', //DEBUG or NORMAL
    'name' => 'Personal Blog',
    
    'default_controller' => 'MainController',
    
    // autoloading classes and modules
    'modules'=>array(
            'News',
             ),

    'libs'=>array(
            'Auth',
            'Cookie',
            'Multilang',
            'Sessions',
            'PureValidator',
            ),
    
    'lang'=>array(
            'gr', //The first lang is the default.
            'en'
             ),
    
    'db'=>array(
          'host'=>'localhost',
          'uname'=>'root',
          'pass'=>'',
          'db_name'=>'yaf_blog',
          ),
    
);
    
?>