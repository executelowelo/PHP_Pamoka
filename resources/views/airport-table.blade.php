<table class="table table-dark table-striped spacing-2rem">
    <tr class="all-text">
   <td>Name</td>
   <td>Country</td>
   <td>Location</td>
   <td>Airlines</td>
   <td>Action</td>
    </tr>
    @foreach($airports as $airport)
        <tr>
            <td>{{$airport->name}}</td>
            <td>{{$airport->country}}</td>
            <td>{{$airport->location}}</td>
            <td>{{$airport->airlines}}</td>
            <td>Action</td>
        </tr>
    @endforeach

</table>