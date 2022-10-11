<table class="table table-dark table-striped spacing-2rem">
    <tr>
    <td>Name</td>
    <td>Code</td>
    <td>action</td>
    </tr>
   @foreach($countries as $countrie)
    <tr>
         <td>{{$countrie->name}}</td>
         <td>{{$countrie->code}}</td>
         <td>
            <a href="/update/countrie/{{$countrie->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a> <form action='/countries/delete/{{$countrie->id}}' method="POST"> 
                @csrf
                <button type="submit" class="spacing-1rem centered-button btn btn-danger">Delete</button>
         </form>
        </td>
    </tr>
 @endforeach

</table>
