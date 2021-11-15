@component('mail::message')

# Hi, Hendry

## {{ $name }} requested a quote from the {{ config('app.name') }} website.

### There details
    Name: {{ $name }}
    Email: {{ $email }}
    Phone: {{ $phone }}

___

{!! nl2br($message) !!}

___


@endcomponent
