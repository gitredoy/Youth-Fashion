<h1> Welcome Mr. {{$first_name.' '.$last_name}}  and thank you for Registering <br> Youth Fasion</h1>
<h2>Your Phone Number is {{$phone_number}}</h2>
<h2>Your Address is {{$address}}</h2>

<p>Please click below to active your account </p>
<a class="btn btn-outline-primary" href="{{route('confirm-mail')}}">Active</a>