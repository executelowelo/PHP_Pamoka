@include('Partials.header')

<body>
    <form action="/add/airlines" method="POST">
        @csrf
        Name :<input type="text" name="name">
        code :<input type="text" name="code">
        <button href="/airlines"  type="submit">Add</button>
    </form>

</body>
</html>

<!--
methods

get data - get
create - post 
update - put
delete - delete

-->