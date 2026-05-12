<!DOCTYPE html>
<html>
<style>
    form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    label {display: block;}

    input, textarea, select {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
<body>

<h2>Create User</h2>

<form method="post" action="{{route('do-login')}}">
    @csrf
    <label for="email">Email</label>
    <input  type="text" id="email" name="email" placeholder="User Email">
    @error('email')
    <span style="color:red;">{{$message}}</span>
    @enderror


    <label for="password">Password</label>
    <input  type="password" id="password" name="password" >
    @error('password')
    <span style="color:red;">{{$message}}</span>
    @enderror

    <input type="submit" value="Submit">
    <a href="{{Route('category.index')}}">Go to login</a>
</form>

</body>
</html>


