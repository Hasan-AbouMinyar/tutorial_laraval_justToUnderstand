<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if($value > 20)
        <div style="background: red; color: white; padding: 10px;">
            <h1>Value is greater than 20</h1>

        </div>
    @elseif($value < 20)
        <div style="background: green; color: white; padding: 10px;">
            <h1>Value is less than 20</h1>
        </div>
      
    @endif

    <h1>Hello {{$oo}}</h1>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Voluptatibus similique debitis sequi, cum autem soluta modi, cupiditate, 
         obcaecati repudiandae expedita quas labore reprehenderit blanditiis sed facilis vero deserunt.
          Quae, porro.
        </p>
    
</body>
</html>