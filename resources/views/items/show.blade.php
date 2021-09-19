<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet-App</title>
</head>
<body>
    <h1>惑星情報</h1>
    @if ($item !== null)
    <div class="item-field">
        <strong>名前 : {{ $item->name }}</strong>
        <strong>名前(英語) : {{ $item->englishname }}</strong>
        <strong>半径 : {{ $item->radius }}</strong>
        <strong>重量 : {{ $item->weight }}</strong>
    </div>

    @else
    <p>id = {{ $id }} の惑星情報は存在しません。</p>
    @endif
    <a href="/items">戻る</a>
</body>
</html>
