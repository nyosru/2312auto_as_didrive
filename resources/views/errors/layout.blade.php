<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>


        <style>
            .top_exit{
                z-index:100;position:fixed; top: 10px; right: 10px;
            }
            .top_exit a{
                color: blue;
                text-decoration: underline;
            }
            .bottom_c{
                z-index:100;position:fixed; bottom: 10px; left: 0px; right: 0px; text-align:center;
            }
            .bottom_c a{
                color: #336dec;
                text-decoration: underline;
            }
        </style>


        <div class="top_exit"><a href="{{ route('logout') }}">выйти</a></div>
        <div class="bottom_c"><a href="https://php-cat.com">php-cat.com</a></div>


    </body>
</html>
