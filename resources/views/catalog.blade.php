<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Catalog Flipbook</title>
    <style>
        #flipbook {
            width: 600px;
            height: 400px;
            margin: 40px auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .page {
            width: 600px;
            height: 400px;
            background: white;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 8px;
            overflow: hidden;
        }

        .page img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            max-height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div id="flipbook">
        @foreach ($products as $product)
            <div class="page">
                <h3>{{ $product->name }}</h3>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
                <p>{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/turnjs/turn.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $("#flipbook").turn({
                width: 600,
                height: 400,
                autoCenter: true,
                duration: 1000
            });
        });
        $("#flipbook").turn({
            width: 600,
            height: 400,
            autoCenter: true,
            duration: 1000,
            when: {
                turning: function (event, page, view) {
                    console.log('Turning to page ' + page);
                }
            }
        });


    </script>

</body>

</html>