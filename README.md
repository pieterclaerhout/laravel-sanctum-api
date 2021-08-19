# Laravel Sanctum tester

[Docs](https://laravel.com/docs/8.x/sanctum)

```shell
$ hp artisan token:create --help
Description:
  Create a new token for the given user ID

Usage:
  token:create [options]

Options:
      --user-id[=USER-ID]
      --token-name[=TOKEN-NAME]
      --abilities[=ABILITIES]
  -h, --help                     Display help for the given command. When no command is given display help for the list command
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi|--no-ansi           Force (or disable --no-ansi) ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --env[=ENV]                The environment the command should run under
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

```shell
php artisan token:list --help
Description:
  List the tokens token for the given user ID

Usage:
  token:list [options]

Options:
      --user-id[=USER-ID]
  -h, --help               Display help for the given command. When no command is given display help for the list command
  -q, --quiet              Do not output any message
  -V, --version            Display this application version
      --ansi|--no-ansi     Force (or disable --no-ansi) ANSI output
  -n, --no-interaction     Do not ask any interactive question
      --env[=ENV]          The environment the command should run under
  -v|vv|vvv, --verbose     Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```
