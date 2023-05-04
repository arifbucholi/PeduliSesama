<html>
<body>
{{--@TODO: Update view sesuai template--}}
<form method="post" action="{{route('donations.donate')}}">
    @csrf
    <button type="submit">submit</button>
</form>
</body>
</html>
