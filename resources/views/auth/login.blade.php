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
        
        <h1 style="color: white; text-shadow: 1px 1px 4px rgba(0,0,0,0.7); text-align: center;">Login</h1>
       
    </div>
</div>


</body>
</html>
