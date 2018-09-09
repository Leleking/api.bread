@component('mail::message')
# Introduction

Thank you for signing up to A1 Bread. Please click the button below or click this link to finish your registration.
<a href="http://test.com">click here</a>

@component('mail::button', ['url' => '','color'=>'red'])
Click Here
@endcomponent

Thanks,<br>
A1 Bread
@endcomponent
