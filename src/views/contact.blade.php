<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
    </head>
    <body>
        <h1>Contact Us any time</h1>
        <form action="{{url('contact')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name Please">
            <input type="email" name="email" placeholder="Your Email Please">
            <textarea name="message" cols="10" rows="7" placeholder="Your Query"></textarea>
            <input type="submit" value="Send">
        </form>
    </body>
</html>