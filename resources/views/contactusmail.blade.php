@component('mail::message')

@if($type == 'user')
#Hello {{$name}},

Your mail has been delivered successfully, you will get a reply as soon as possible.


@else

#Hi Admin,

You have a new mail from {{$name}}
<br>
Phone Number: {{$phone_no}}
Email Address: {{$email}}
Message: {{$message}}


@endif

Thanks && Regards,<br>
Scrabble Connect Team. 
@endcomponent
