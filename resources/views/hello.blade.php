<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .card-container {
            display: flex;
            overflow-x: auto;
            gap: 40px;
            padding: 50px;
            scroll-snap-type: x mandatory;
        }

        .card {
            flex: 0 0 auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 500px;
            scroll-snap-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card h1 {
            font-size: 32px;
            color: #333;
            margin: 0;
        }

        .card p {
            font-size: 20px;
            color: #555;
            margin-top: 20px;
            line-height: 1.8;
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    @if($value > 20)
        <div style="background: #d9534f; color: white; padding: 15px; text-align: center; font-size: 20px;">
            <h1>Value is greater than 20</h1>
        </div>
    @elseif($value < 20)
        <div style="background: #5cb85c; color: white; padding: 15px; text-align: center; font-size: 20px;">
            <h1>Value is less than 20</h1>
        </div>
    @endif

    <h1 style="text-align: center; margin-top: 30px; font-size: 42px; color: #333;">Hello {{$oo}}</h1>

    <p style="text-align: center; margin: 30px; font-size: 20px; color: #666;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptatibus similique debitis sequi, cum autem soluta modi, cupiditate,
        obcaecati repudiandae expedita quas labore reprehenderit blanditiis sed facilis vero deserunt.
        Quae, porro.
    </p>

    <div class="card-container">
        @foreach($employee as $item)
            <div class="card">
                <img src="https://i.pinimg.com/736x/4c/53/42/4c5342dd38e0914230963d73a49faa4f.jpg" alt="Profile">
                <h1>{{$item}}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
            </div>
        @endforeach
    </div>
    
</body>
</html>