<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星管理アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星一覧</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->englishname }}</td>
                <td>{{ $item->radius }}</td>
                <td>{{ $item->weight }}</td>
                <td><a href="/items/{{ $item->id }}">詳細</a></td>
                <td><a href="/items/{{ $item->id }}/edit">編集</a></td>
                <td>
                    <form action="/items/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/items/create">新規登録</a>
</body>

</html>
