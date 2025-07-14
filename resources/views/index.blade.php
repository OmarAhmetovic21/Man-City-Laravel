<!DOCTYPE html>
<html>
<head>
    <title>Manchester City</title>
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

        
        <h2 style="margin-top: 2%;">Manchester City highlights</h2>

        <div class="row"> 

        <img style="margin-top: 5%" src="images/treble.jpg" alt="Treble">
        <h3>Treble winners 2022/2023</h3>
        </div>

        <div class="row">

        <img style="margin-top: 5%" src="images/9320.jpg" alt="9320">
        <h3>93:20 and first Premier League title in 44 years</h3>

        </div>

        <div class="row">

        <img style="margin-top: 5%" src="images/centurions.jpg" alt="Centurions">
        <h3>Premier League winners 2017/2018 and 100 points in a Premier League season</h3>

        </div>

        <div class="row">

        <img style="margin-top: 5%" src="images/3-row.jpg" alt="3 in a row">
        <h3>Premier League winners 3 times in a row</h3>

        </div>

        <div class="row">

        <img style="margin-top: 5%" src="images/4-row.jpg" alt="4 in a row">
        <h3>Premier League winners 4 times in a row</h3>

        </div>
    

    @include('partials.footer')


</body>
</html>
