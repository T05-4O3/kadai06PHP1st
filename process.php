<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// フォームデータを受け取る
$product = $_POST['product'];
$purpose = $_POST['purpose'];
$targets = $_POST['target'];
$message = $_POST['message'];

// 質問の形を組み立てる
$question = "{$product}について、ターゲットである" . implode(", ", $targets) . "に、{$purpose}を伝えるためのコンセプトを教えてください。";

// OpenAI APIへのリクエストを準備する
$data = array(
    'model' => 'gpt-3.5-turbo',
    'max_tokens' => 128,
    'messages' => array(
        array('role' => 'system', 'content' => 'You are a video advertising industry art director.'),
        array('role' => 'user', 'content' => $question)
    )
);

// cURLを使用してAPIリクエストを送信する
$ch = curl_init('https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' // OpenAI APIキー
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

// APIからの応答を取得して表示する
$result = json_decode($response, true);
if (isset($result['choices'])) {
    $answer = $result['choices'][0]['message']['content'];
    echo $answer;
} else {
    echo 'APIからの応答にエラーがありました。';
}

echo '<pre>';
echo print_r($data, true);
echo '</pre>';

?>