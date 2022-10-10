@include('Partials.header')

<body>
    <form action="/update/airline/{{$airline->id}}" method="POST">
        @csrf
        Name :<input type="text" name="name" value="{{$airline->name}}">
        code :<input type="text" name="code" value="{{$airline->code}}">
        <button href="/airlines"  type="submit">Update</button>
    </form>

</body>
</html>
