<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRコンセプトメーカー</title>
    </head>
    <body>
        <h1>PRコンセプトメーカー</h1>
        <form action="process.php" method="POST">
            <label for="product">商材：</label>
            <input type="text" id="product" name="product" required><br><br>

            <label for="purpose">目的：</label>
            <select id="purpose" name="purpose" required>
                <option value="">選択してください</option>
                <option value="認知向上/価値観醸成">認知向上/価値観醸成</option>
                <option value="エンゲージメント/関与">エンゲージメント/関与</option>
                <option value="購買/登録/問合せ向上">購買/登録/問合せ向上</option>
            </select><br><br>

            <label for="target">ターゲット：</label><br>
            <input type="checkbox" id="target1" name="target[]" value="4〜12歳">4〜12歳
            <input type="checkbox" id="target2" name="target[]" value="13〜19歳">13〜19歳
            <input type="checkbox" id="target3" name="target[]" value="20〜34歳 女性">20〜34歳 女性
            <input type="checkbox" id="target4" name="target[]" value="35〜49歳 女性">35〜49歳 女性
            <input type="checkbox" id="target5" name="target[]" value="50歳以上 女性">50歳以上 女性
            <input type="checkbox" id="target6" name="target[]" value="20〜34歳 男性">20〜34歳 男性
            <input type="checkbox" id="target7" name="target[]" value="35〜49歳 男性">35〜49歳 男性
            <input type="checkbox" id="target8" name="target[]" value="50歳以上 男性">50歳以上 男性<br><br>

            <label for="message">伝えたい事：</label>
            <select id="message" name="message" required>
                <option value="">選択してください</option>
                <option value="価格・特徴・効果などの内的情報">価格・特徴・効果などの内的情報</option>
                <option value="ニーズ・市場・社会概況などの外的情報">ニーズ・市場・社会概況などの外的情報</option>
            </select><br><br>

            <input type="submit" value="質問する">
        </form>
    </body>
</html>