# Laravel API Only Demo

A [Laravel](https://laravel.com) demo application which is modified to serve an API only.

The necessary steps are well documented by
 [commits](https://github.com/s3huber/laravel-api-only-demo/commits/main) and
 [issues](https://github.com/s3huber/laravel-api-only-demo/issues?q=is%3Aissue).

## Why

When I was starting to work at [Blockpit](https://blockpit.io) I was confronted with a Laravel codebase which was
 actually serving only API requests, but for historical reasons also contained all the Blade related parts.

After reading this
 [tweet about an API only option](https://twitter.com/taylorotwell/status/1483892844968427532)
 for the Laravel installer from [Taylor Otwell](https://twitter.com/taylorotwell)
 the idea for this project was born.

The goal is to get more familiar with bootstrapping a Laravel application in general.
 How does the default authentication mechanism work?
 [How about Sanctum?](https://github.com/s3huber/laravel-api-only-demo/issues/8)
 And most importantly, how hard is it to handle a request of an already authenticated user without 
 accessing the database (at least not for authentication).

## License

The Laravel framework as well as this personal demo project are open-sourced licensed under the
 [MIT license](https://opensource.org/licenses/MIT).
