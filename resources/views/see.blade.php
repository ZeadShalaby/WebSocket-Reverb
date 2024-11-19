<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WepTest</title>
</head>

<body>
    <h1>See Channel : {{ Auth::id() }}</h1>
    @vite('resources/js/app.js')
</body>

<script>
    // let timeout = 200;
    // setTimeout(() => {
    //     window.Echo.channel('testchannel')
    //         .listen('TestEvent', (e) => {
    //             console.log(e);
    //         })
    // }, timeout);


    let timeout = 400;
    setTimeout(() => {
        window.Echo.private('private-channel.user.{{ Auth::id() }}')
            .listen('PrivateEvent', (e) => {
                console.log(e);
            })
    }, timeout);
</script>

</html>
