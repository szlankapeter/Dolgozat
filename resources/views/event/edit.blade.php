<form action="/api/events/{{$events->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="date" name="date" placeholder="Date">
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="org_id" placeholder="Org">
    <input type="submit" value="OK">
</form>