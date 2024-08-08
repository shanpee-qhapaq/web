<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPを用いた簡単な電卓</title>
</head>
<body>
    <h1>簡単な電卓</h1>
<?php
    if (isset($_POST['submit'])) {
        // 入力値を取得
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';

            // 演算の実行
            switch ($operator) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'エラー: 0で割ることはできません';
                    }
                    break;
                default:
                    $result = '不正な操作が選択されました';
                    break;
            }

            // 結果を表示
            echo "<h2>結果: $result</h2>";
        }
    ?>
</body>
</html>
