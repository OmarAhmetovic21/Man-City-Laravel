<!DOCTYPE html>
<html>
<head>
    <title>Manchester City</title>
</head>
<body style="text-align: center;">
    @include('partials.navbar')

    <div style="position: relative; width: 100%; height: 100vh; background-image: url('{{ asset('images/header2.jpg') }}'); background-size: cover; background-position: center;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                display: flex; flex-direction: column; justify-content: center; align-items: center;
                background-color: rgba(0, 0, 0, 0.4);">
        
        <h1 style="color: white; text-shadow: 1px 1px 4px rgba(0,0,0,0.7); text-align: center;">About us</h1>
    
    </div>
</div>

<div class="row-about">
    <p style="line-height: 2em; text-align:left; font-size: 130%">        
        Manchester City Football Club is a professional football club based in Manchester, 
        England, that competes in the Premier League, the top flight of English football. 
        Founded in 1880 as St. Mark's (West Gorton), they became Ardwick Association Football Club
        in 1887 and Manchester City in 1894. <br>
         The club's home ground is the City of Manchester Stadium 
        in east Manchester, to which they moved in 2003, having played at Maine Road since 1923. 
        Manchester City adopted their sky blue home shirts in 1894, the first season with the current name.<br>
        Over the course of its history, the club has won nine Premier League titles, seven FA Cups, 
        eight League Cups, six FA Community Shields, one UEFA Champions League, one European Cup Winners' Cup, 
        one UEFA Super Cup and one FIFA Club World Cup. <br>
        Manchester City is also the only club the win the league title with 100 points which is also,
        the highest points total in Premier League history earning them the nickname "Centurions".
        And finally, Manchester City is the second English club to win the treble (FA Cup, Premier League and 
        Champions League).
      </p>
</div>

@include('partials.footer')



</body>
</html>
