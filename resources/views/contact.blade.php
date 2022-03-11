<h1>This is contact page</h1>
<a href="{{ url('/') }}">Go Home Page</a>

<h1>Submit your data</h1>
<form action="{{ route('contact.data') }}" method="POST">
    @csrf
    Name : <input type="text" name="name"><br>
    Phone : <input type="text" name="phone"><br>
    <button type="submit">Submit</button>
</form>