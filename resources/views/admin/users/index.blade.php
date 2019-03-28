@foreach($users as $user)
<li>{!! $user['First_name']!!} {!!$user['Last_name']!!} From {!!$user['Location']!!}</li> 
@endforeach

