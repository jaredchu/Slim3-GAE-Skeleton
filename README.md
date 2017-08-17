# Slim3 GAE Skeleton
Slim 3 skeleton working with Google App Engine include cron configuration.

[![Packagist](https://img.shields.io/packagist/v/jaredchu/slim3-gae-skeleton.svg)](https://packagist.org/packages/jaredchu/slim3-gae-skeleton)
[![Packagist](https://img.shields.io/packagist/dt/jaredchu/slim3-gae-skeleton.svg)](https://packagist.org/packages/jaredchu/slim3-gae-skeleton)
[![Packagist](https://img.shields.io/packagist/l/jaredchu/slim3-gae-skeleton.svg)](https://packagist.org/packages/jaredchu/slim3-gae-skeleton)

## Installation
`$ composer create-project --no-interaction --stability=dev jaredchu/slim3-gae-skeleton my-app`

## Deploy

1. Install [gcloud](https://cloud.google.com/sdk/downloads) then run init command in project directory:

`$ gcloud init`

2. Deploy your project:

`$ gcloud deploy`

3. Browse to **http://[YOUR_PROJECT_ID].appspot.com**

4. Remember to run this command after update `cron.yaml`:

`$ gcloud app deploy cron.yaml`

## Run locally
1. `$ cd my-app`
2. `$ php -S 0.0.0.0:8888 -t . index.php`
3. Browse to http://localhost:8888

## Key directories
- `app`: application code 
- `app/Controllers`: contains controller classes
- `app/Enums`: contains enum classes
- `app/Schedules`: contains schedule classes

## Key files
- `index.php`: Entry point to application, route configuration
- `app.yaml`: Google App Engine main configuration
- `cron.yaml`: Google App Engine cron configuration

## Contributing
1. Fork it!
2. Create your feature branch: `$ git checkout -b feature/your-new-feature`
3. Commit your changes: `$ git commit -am 'Add some feature'`
4. Push to the branch: `$ git push origin feature/your-new-feature`
5. Submit a pull request.

## License
[MIT License](https://github.com/jaredchu/Slim3-GAE-Skeleton/blob/master/LICENSE)
