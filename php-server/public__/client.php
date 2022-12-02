<?php
declare(strict_types=1);


$checkStrings = [
    '',
    '(()()()()))((((()()()))(()()()(((()))))))',
    '(()(.)()(.)))((((()(.)(.)))(()()()(((()))))))',
    '(()()()()))((((()()()))(()()()(((()))))))',
];
echo '<pre>';
foreach($checkStrings as $checkString){
    try {
        $context = stream_context_create(['http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
           'content' => http_build_query(['string' => $checkString])
        ]]);
        echo $result = file_get_contents('http://balancer', false, $context);

    }catch (\Exception $exception){

    } finally {
        var_dump($http_response_header);
        var_dump(http_response_code());
    }


}