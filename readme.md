Runescape API
======================

[![Build Status](https://travis-ci.org/zomfshark/runescape-api.png?branch=master)](https://travis-ci.org/zomfshark/runescape-api)

### What is this?

A basic set of JSON APIs that you can use to retrieve information relating to the game [Runescape](http://runescape.com).

Currently this isn't even close to complete, and still under development.

### Setup

_**Please note:** you will need Composer to install the dependencies, I suggest you [install it globally](http://getcomposer.org/doc/00-intro.md#globally)_.

1. Clone this repository `git clone https://github.com/zomfshark/runescape-api.git`
2. Navigate into the new directory (`cd runescape-api`) and install the dependencies (`composer install`)
3. Create a new database
4. Create `database.php` inside the `app/config/live/` and populate it with your database credentials (see example in `app/config/database.php`)
5. Run `php artisan migrate --env=live` to create the database tables
6. Run `php artisan db:seed -env=live` to populate the database with sample data
7. Start hitting the API [endpoints](#endpoints)!

You can, of course, set up your own environment(s) or use the dev environment, check out the [Laravel Docs](http://laravel.com/docs/configuration#environment-configuration) for more information on configuring environments.

### API Documentation

#### Response Format

All responses are in JSON format.

#### Response Codes

- **200:** The request was successful.
- **404:** The resource was not found.
- **500:** A server error occurred

#### Endpoints

##### GET /v1/actions

Retrieves various actions that you can perform to gain experience.

##### GET /v1/actions/{skill}

Retrieves various actions that you can perform to gain experience for a specific skill.

#### Errors

Along with an appropriate HTTP error code, any errors will return a JSON object which will contain an `errors` element.

As an example, this is the response you'd see when querying the `actions` API for a skill which doesn't exist.

    {
      "errors": "No actions found for fishinxg."
    }

While in this example `errors` is a string, it could also be an array of errors.

### TODO

- Add API rates & possibly authentication
- Start adding other endpoints!
- Setup GH pages for Docs?
- Tests :'(
- `api/v1/actions/fishinxg` should return 'skill not found' or something similar? or perhaps better to keep in generic?

### License

This is open-sourced software licensed under the [MIT license](http://beingtomgreen.mit-license.org/).