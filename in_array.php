<?php 
ini_set('display_errors', 1);
/*function filterComma($value)
    {
        return preg_replace('#,#', '', $value);
    }

var_dump(filterComma('122,2'));
var_dump(in_array('', ['ffff','ff']));

*/
$filter = [[
            'name' => 'Callback',
            'options' => [
              'callback' => ['$this', 'filterComma'],                            
            ]
        ]];
$f = array(
                        ['name' => 'StripTags'],
                        ['name' => 'StringTrim'],
                        ['name' => 'Null', 'options' => array('type' => 'ToNull::TYPE_STRING')],
                    );
var_dump(array_merge($filter, $f));
 ?>