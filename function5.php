<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    function sum2($left, $right){
        return $left+$right;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum2(2,4));
    // email('egoing@egoing.net', sum2(2,4));
    // upload('egoing.net', sum2(2,4));
</body>
</html>