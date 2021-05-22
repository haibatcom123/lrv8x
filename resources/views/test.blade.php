<form action="{{ route('create') }}" method="post" >
@csrf
Name &nbsp <input type="text" id="name" name="name" required>
<br>
<br>
Address &nbsp <input type="text" id="address" name="address" required>
<br>
<br>
Email &nbsp <input type="text" id="email" name="email" required>
<br>
<br>
Content &nbsp <input type="text" id="content" name="content" required>

<br>
<br>
<input type="submit"  name="create" value="Create">
</form>