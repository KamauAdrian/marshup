@component('mail::message')
#  welcome {{$user->name}}

Thank you for _signing_ up with destiny.**We really Appreciate** you having trust on us. Let us know if we can do something to improve your experience with us

@component('mail::panel')
    The Email address you signed up with is {{$user->email}}
@endcomponent

@component('mail::button', ['url' => 'http://www.localhost/marshup/public'])
view my blog
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
