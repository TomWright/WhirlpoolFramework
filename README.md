Whirlpool Framework
===================

Introduction
------------
Whirlpool framework is a lightweight MVC framework based on a few different composer packages.

Installation
---------------
### Installing the framework
The best way to install the framework is through composer. The following command will install the framework to /new/project/location

    composer create-project whirlpool/whirlpool /new/project/location

### Setting up the environment
By default, whirlpool expects all web requests to go to the index.php file in the public directory. I suggest setting
the "public" directory as your web/document root.

Getting Started
---------------
### Routing
Routes are located at `application/routes.php`. You can set up routes in here that map to a specific controller and method.
If no method is specified the default will be used which can be found in `config/routing.php`.
For more help with creating routes please see [Aura.Router](https://github.com/auraphp/Aura.Router)

### Controllers
Controllers are located at `application/controllers`. Each method that can be an action should be followed by "Action".
Each controller should end with the text "Controller" and the file name must match the controller name. A BaseController
is provided with Whirlpool and it is recommended that your controllers extend `Whirlpool\BaseController`.

### Models
The models are located at `application/models`. The `Whirlpool\BaseModel` extends Eloquent so extending from it will
give you access to all the wonderful things that Eloquent provides. For help with Eloquent see the [documentation](http://laravel.com/docs/4.2/eloquent)

### Autoloading More Directories
You are able to specify more directories from which Whirlpool will auto-load from in the config/autoload file.
The 'directory' array will add directories for standard requests, and the 'subdomainDirectory' will add directories for requests that come in on a subdomain.
For example..
    
    return [
    
        'directories' => [
            '/repositories/',
        ],
    
        'subdomainDirectories' => [
    
        ],
    
    ];
    
This allows you to create classes in `application/repositories` and have them autoloaded.

### Views
Views are handled with [Twig](http://twig.sensiolabs.org/). When your controller extends from `Whirlpool\BaseController` you
will have access to the twig object via `$this->twig`. A shortcut to display views has also been provided in the form of
`$this->displayView($viewName [, array $data = array()]);`.

### Database Configuration
In order to use Models you need to have a database connection. The credentials for this connection can be set in `config/database.php`.
An example configuration file can be found at `config/example_database.php`.

### Multiple Databases
You can interact with multiple databases in a way that is very similar to Laravel as we are using Eloquent. All you need
to do is ensure that the new database credentials have been set up in `config/database.php` with a name of your choosing.
You can set the name for that connection by either specifying it in the array key, or setting 'name' => 'my-second-connection'.

Once the name is set simply open a model and set the connection name.

    protected $connection = 'my-second-connection';
    
You are also able to do the following, where User is a model.

    $user = new User();
    $user->setConnection('my-second-connection');

Subdomains
----------

Subdomains can be a useful way to separate logic for different sections of your applications.
You can use `Request::subdomain()` to get the active subdomain. Please note that there is a list of subdomains to ignore
in `config/general.php`.

### Get going with subdomains
All you have to do to start using a subdomain is to create a folder in `application/subdomains`. Inside this new folder
you will need to create the folders `controllers`, `models` and `views`. This folder will be used as the main application
folder when the specified subdomain is active, and the `application/models` folder will act as a fallback.

Hooks
----------
### Introduction to hooks
There are several hooks that you can manipulate in order to run custom code at a fixed point in the applications life cycle.

Hooks should be created in `config/hooks.php` in the following format:

    return [
        'hook-name' => function ($argument1, $argument2) {
            // This code will be run when the hook is triggered
        },
    ];
    
### List of default hooks
| Hook Name                        | Arguments           | Timing                                               |
| -------------------------------- | ------------------- | ---------------------------------------------------- |
| whirlpool-initialized            | whirlpool           | Once Whirlpool::init() has been executed.            |
| whirlpool-load-action            | path                | When an action is about to be loaded.                |
| whirlpool-loaded-action          | action              | When an action has just been loaded.                 |
| whirlpool-execute-action         | action              | When an action is about to be executed.              |
| whirlpool-controller-initialized | controller, action  | When the main controller has just been instantiated. |
| whirlpool-executed-action        | response            | When an action has just been executed.               |
| whirlpool-class-not-found        | class               | When the Whirlpool autoloader cannot find a class.   |

### Dependency Injection
You can use dependency injection in your classes very easily. Just include a type hint to your class constructor!

    class SomeObject()
    {
        public function output()
        {
            echo "Hello World.";
        }
    }
    class MyController {
        public function __construct(SomeObject $ob)
        {
            $ob->output();
        }
    };
    $controller = Whirlpool::make('MyController');