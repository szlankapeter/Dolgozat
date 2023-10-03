@foreach($events as $event)
    <form action="/api/events/{{$event->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$event->location}}">
        </div>
    </form>
@endforeach