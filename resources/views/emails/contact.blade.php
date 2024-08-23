@component('mail::message')
# Contact Form Submission

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**I am:** {{ ucfirst($data['type']) }}

**Country Code:** {{ $data['country_code'] }}

**Phone:** {{ $data['phone'] }}

**Message:**

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
