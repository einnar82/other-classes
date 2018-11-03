# Other Classes
Create your contracts, services and repositories via artisan console.

**Installation:**

Run on your terminal 

    $ composer require einnar82/other-classes
  
  Then register the service provider at config/app.php.

    RannieOllit\OtherClasses\OtherClassesServiceProvider::class,

Then you added the four artisan commands.

|Command          | Namespace       |
|   --            |    --           |
| make:trait      | App\Traits      |
| make:contract   | App\Contracts   |
| make:service    | App\Services    |
| make:repository | App\Repositories|

This will generate a fresh file from your distinct commands.



