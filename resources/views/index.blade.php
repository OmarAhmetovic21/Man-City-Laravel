<!DOCTYPE html>
<html>
<head>
    <title>Početna stranica</title>
</head>
<body style="text-align: center;">
    @include('partials.navbar')

<div style="position: relative; width: 100%; height: 100vh; background-image: url('{{ asset('images/header.jpg') }}'); background-size: cover; background-position: center;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                display: flex; flex-direction: column; justify-content: center; align-items: center;
                background-color: rgba(0, 0, 0, 0.4);">
        
        <h1 style="color: white; text-shadow: 1px 1px 4px rgba(0,0,0,0.7); text-align: center;">WELCOME TO MANCHESTER CITY</h1>
        <h2 style="color: white; text-shadow: 1px 1px 4px rgba(0,0,0,0.7); text-align: center;">Treble winners 2022/2023</h2>
    
    </div>
</div>

<div style="position: relative; width: 100%; height: 50vh;">
        
        <h2>Manchester City highlights</h2>
    
</div>

    @include('partials.footer')


</body>
</html>
