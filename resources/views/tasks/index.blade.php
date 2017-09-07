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
                <ul>

                  @foreach($tasks as $task)

                      <li><a href="/tasks/{{ $task->id}}">
                        {{ $task->body}}</a></li>
                  @endforeach
                    <ul>
                </div>
            </div>

        </div>
    </body>
</html>
