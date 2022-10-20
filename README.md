
## Installation
You can install the package via composer:

`composer require magnetism/units`

You can publish and run the migrations with:

`php artisan vendor:publish --provider="Magnetism\Units\UnitServiceProvider" --tag="migrations"`
`php artisan migrate`