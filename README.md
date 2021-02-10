<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Todo List App</h1>
    <br>
</p>

This todolist task app is implemented using the Yii2 Advanced template.
The following steps below is for setting up the project after cloning the repository.
## Installation:

```composer install```


### Database Migration
Create a mysql database named `todo`, then run the following command from the project root:

```./yii migrate```

## Serve
From the project root, start the local PHP server:

```php -S localhost:8000```

### Basic usage
Using postman, a list of all tasks can be retrieved with:

```http://localhost:8000/api/web/tasks``` 

### Available Endpoints
The following are the list of endpoints.

```GET /tasks: get all tasks```

```
POST /tasks: create a new task

{
    "title": "Sample task",
    "body": "Lorem ipsom content of sample task"
}
```

```GET /tasks/1: return the details of the tasks with id of 1```

```
PUT /tasks/1: update the task 1

{
    "completed": 1
}
```

```DELETE /tasks/1: delete the task with id of 1```

DIRECTORY STRUCTURE
-------------------

```
api
    config/              contains api configurations
    controllers/         contains api controller classes
    models/              contains api model classes
    runtime/             contains files generated during runtime
    web/                 contains the entry script and Web resources
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
