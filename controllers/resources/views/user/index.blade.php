<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users list: </h1>
    {{-- @if($users->isEmpty())
        <h3>The user list is empty</h3>
    @else
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name}}</li> 
        @endforeach
    </ul>
    @endif --}}
    <ul>
        @forelse($users as $user)
            <li>{{ $user->name }} -- {{ $user->age}} years old</li>
        @empty
            <h3>The user list is empty</h3>
        @endforelse
    </ul>
</body>
</html>