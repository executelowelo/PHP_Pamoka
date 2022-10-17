<table class="table table-dark table-striped spacing-2rem">
    <tr>
   <td>Name</td>
   <td>Country</td>
   <td>actions</td>

    </tr>
    @foreach($airlines as $airline)
    <tr>
            <td>{{$airline->name}}</td>
            <td>{{$airline->country}}</td>
            <td> 
                <a href="/update/airline/{{$airline->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a>
                <form action='/airlines/delete/{{$airline->id}}' method="POST">
                    @csrf
                    <button type="submit" class="spacing-1rem centered-button btn btn-danger">Delete</button>
                </form>
            </td>
            
    </tr>
    @endforeach
</table>

