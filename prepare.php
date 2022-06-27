<?php
/**
 * Contact +998(94)-289-71-31
 * Telegram @Bekhzodjon
 * Date 27.06.2022
 * Click merchant api code
 */
date_default_timezone_set('Asia/Samarkand');
$timedate = strtotime(date('H:i:s'));
$db = new mysqli('localhost', 'bekzod', '12345', 'bekzod');

$keys = ['key' => 'fortest', 'prepare' => 'fortest'];

if ($_POST['action'] == 0 and $_SERVER['REMOTE_ADDR'] == "55.10.022.300")
{
    $trans_id = $_POST['click_trans_id'];
    $merchant_id = $_POST['merchant_trans_id'];
    $amount = $_POST['amount'];
    $sign_time = $_POST['sign_time'];
    $service_id = $_POST['service_id'];
    $action = $_POST['action'];
    $error = $_POST['error'];

    $db->query("INSERT INTO `clickuz`(`trans_id`, `merchant_id`, `amount`, `sign_time`, `situation`, `status`) VALUES ('$trans_id','$merchant_id','$amount','$sign_time','$error')");
    $row = $db->query("SELECT * FROM users WHERE user_id =" . $merchant_id)->fetch_assoc();
    if (strlen($row['id']) > 0)
    {
        if ($error == 0)
        {
            $array = ['click_trans_id' => $trans_id, 'merchant_trans_id' => $merchant_id, 'merchant_prepare_id' => $keys['prepare'], 'error' => 0, 'error_note' => $_POST['error_note']];
            echo json_encode($array);

        }
    }
    else
    {
        $array = ['click_trans_id' => $trans_id, 'merchant_trans_id' => $merchant_id, 'merchant_prepare_id' => $keys['prepare'], 'error' => - 9, 'error_note' => "404 not found user"];
        echo json_encode($array);
    }
}
else
{
    echo json_encode(['ok' => false, 'message' => "for clickuz url only | @Bekhzodjon"]);
}
?>
