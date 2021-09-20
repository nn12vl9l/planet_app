<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報</title>
</head>
<body>
    <h1>惑星情報</h1>
    <p>
        <b>名前:{{ $item->name }}</b>
    </p>
    <p>
        <b>名前(英語):{{ $item->englishname }}</b>
    </p>
    <p>
        <b>半径:{{ $item->radius }}</b>
    </p>
    <p>
        <b>重量:{{ $item->weight }}</b>
    </p>
    <p>
        <a href="/items/{{ $item->id }}/edit">編集</a>
    </p>
    <a href="/items">戻る</a>

</body>
</html>
