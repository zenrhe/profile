<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

            <div class="container">
                <div>
                  {{ $task->body }}
                </div>
            </div>

        </div>
    </body>
</html>
