            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>
                @vite('resources/js/app.js')
                  {{-- <script src="{{ asset('resources/js/app.js') }}" ></script> --}}
                <script>
                    setTimeout(()=>{
                        window.Echo.channel('testing')
                        .listen('.App\\Events\\TestEvent',(e) => {
                            console.log(e)
                        })

                    },200)
                </script>

            </body>
            </html>
