<!DOCTYPE html>
<html>
<head>
    <title>Manchester City</title>
</head>
<body style="text-align: center;">
    @include('partials.navbar')

<div style="position: relative; width: 100%; height: 100vh; background-image: url('{{ asset('images/login.jpg') }}'); background-size: cover; background-position: center;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                display: flex; flex-direction: column; justify-content: center; align-items: center;
                background-color: rgba(0, 0, 0, 0.4);">
        
<div class="login-container">
    <form class="login-form" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input style="margin-top: 5%" type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>


       
    </div>
</div>


</body>
</html>
