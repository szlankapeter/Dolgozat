<form action="/api/events" method="post">
    {{csrf_field()}}
    <input type="date" name="date" placeholder="Date">
    <input type="text" name="location" placeholder="Location">
    <input type="text" name="org_id" placeholder="Org">
    <input type="submit" value="OK">
</form>