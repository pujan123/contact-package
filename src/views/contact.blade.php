<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us for more information</h1>
    <form action="{{ route('contact') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <input type="text" name="name" placeholder="Your Name">
            </div>

            <div class="col-md-6">
                <input type="email" name="email" placeholder="Your Email">
            </div>

            <div class="col-md-12">
                <textarea name="message" placeholder="Your Message"></textarea>
            </div>

        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>