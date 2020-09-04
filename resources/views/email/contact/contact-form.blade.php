@component('mail::message')
# Introduction
{{$data['to']}}


The body of your message.

{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
{{$data['name']}}
@endcomponent
