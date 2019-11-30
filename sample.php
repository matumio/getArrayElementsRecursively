<?php
require('./getArrayElementsRecursively.php');
$json_string = '{"Description":"SampleJson","Copyright":"Copyright(C)2018mio.yokohamaAllRightsReserved.","Status":"200","CompressType":"","Feature":[{"Id":"0106001","Name":"name","Property":{"first":{"second":{"third":{"target":"3rd","fifth":{"sixth":{"Target":"6th"},"Target":"5th"}}},"Target":"1st"}}}],"Dictionary":{"Genre":[{"Id":"01","Name":"name","bool":"True","Level":1},{"Id":"0106","Name":"name","bool":false,"Level":2}]}}';
$json_array = json_decode($json_string ,true);
getArrayElementsRecursively($json_array);
?>