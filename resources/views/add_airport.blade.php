@include('Partials.header')
<body>
    
    <form action="/add/airport" method="POST">
        @csrf
        Name :<input type="text" name="name">
        Airline :<input type="text" name="airline">
        Country :<input type="text" name="country">
        location: <input type="text" name="location">
        <button href="/airport"  type="submit">Add</button>
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