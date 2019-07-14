# Other Classes

Create your contracts, services and repositories via artisan console.

**Installation:**

Run on your terminal

    $ composer require einnar82/other-classes

Then register the service provider at _config/app.php_.

    RannieOllit\OtherClasses\OtherClassesServiceProvider::class,

Finally publish the vendor files, so that you can customized the namespace of your classes at _config/other-classes.php_.

    $ php artisan vendor:publish --provider="RannieOllit\OtherClasses\OtherClassesServiceProvider" --tag="config"

Then you added the four artisan commands.

| Command         | Namespace            |
| --------------- | -------------------- |
| make:trait      | App\YourTraits       |
| make:contract   | App\MyContracts      |
| make:service    | App\OtherServices    |
| make:repository | App\SomeRepositories |

This will generate a fresh file from your distinct commands.
