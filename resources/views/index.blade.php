<h1>This is my first page on laravel</h1>

student name: {{$name }} <br>
student age: {{$age}} <br>
student email: {{$email}} <br>

@if (strlen($name) > 3)
    {{$name}}
@else
    {{'your name must be more than 3 chars'}}
@endif