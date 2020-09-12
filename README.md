# Todo App

This application will help the user to track his/her daiy task.

## Getting Started

Open cmd & use command <strong>cd folder/to/clone-into/</strong> ```(You can use any directory you want)```

Next Command

<strong>git clone</strong> https://github.com/anikrahman0/Todo-App.git

Or

You can download the project directly using the link: https://github.com/anikrahman0/Todo-App.git


### Prerequisites

You must have installed <strong>PHP 7.4.2</strong> or latest and <strong>Composer dependency manager</strong> in your system to run the project.

### Installing

Installing <strong>XAMPP</strong> or other local server will give you the latest version of <strong>PHP</strong>.

Link for downloading <strong>XAMPP</strong>: https://www.apachefriends.org/download.html

Link for downloading <strong>Composer</strong>: https://getcomposer.org/download/



## Deployment

[Watch full environment setup for the project](https://www.youtube.com/watch?v=H3uRXvwXz1o)

There are two ways to run or serve the project on local server.

* **Method #1**

    * Using cmd goto the project folder using below command

       <strong>E:\Project> cd todo</strong>

    * Then run command php artisan serve

       <strong>E:\Project\todo> php artisan serve</strong>
       
    It will show message like: Laravel development server started: http://127.0.0.1:8000   
    
    * Create <strong>database todolist</strong>
    
    * Run command <strong>php artisan migrate</strong>  to migrate tables to the database
    
       <strong>E:\Project\todo> php artisan migrate</strong>

    

* **Method #2** 
    
    * After downloading or getting the project files copy all the files and paste is in <strong>C:\xampp\htdocs</strong> 
    
    * Then go to project folder <strong> C:\xampp\htdocs\todo </strong> and go to the  public folder <strong> C:\xampp\htdocs\todo\public </strong> 
    
    * Copy the <strong>index.php</strong> and <strong>.htaccess</strong> file and paste it to the project folder <strong> C:\xampp\htdocs\todo </strong>
    
    * Open XAMPP control and run services <strong>apache</strong> and <strong>mysql</strong> and on browser <strong>localhost/todo</strong> will serve the project
    
    * If bootstrap or any styling resources failed to load then [See Video](https://www.youtube.com/watch?v=U4PqNQHWIgw) to solve the problem.
    
    
 
## Built With

* [Laravel](https://laravel.com/docs/7.x/installation) - The Laravel web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Author

* **Md. Anik Rahman** - Initial work : https://github.com/anikrahman0


## License

This project is licensed under the MIT License.


