<table class="table table-dark table-striped spacing-2rem">
    <tr>
        <td>Name</td>
        <td>Code</td>
        <td>Action</td>
         </tr>
         @foreach($airports as $airport)
             <tr>
                 <td>{{$airport->name}}</td>
                 <td>{{$airport->country}}</td>
                 <td>{{$airport->location}}</td>
                 <td>{{$airport->airlines}}</td>
                 <td><a href="/update/airport/{{$airport->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a>
                 <form action='/airport/delete/{{$airport->id}}' method="POST">
                     @csrf
                     <button type="submit" class="spacing-1rem centered-button btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
</table>

<td>Airlines</td>
<td>Action</td>
 </tr>
 @foreach($airports as $airport)
     <tr>
         <td>{{$airport->name}}</td>
         <td>{{$airport->country}}</td>
         <td>{{$airport->location}}</td>
         <td>{{$airport->airlines}}</td>
         <td><a href="/update/airport/{{$airport->id}}" <button type="submit" class="spacing-1rem centered-button btn btn-warning">Edit</button></a>
         <form action='/airport/delete/{{$airport->id}}' method="POST">
             @csrf
             <button type="submit" class="spacing-1rem centered-button btn btn-danger">Delete</button>
         </form>
     </td>
 </tr>