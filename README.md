
# RoleChanger🔒

In this project I design a dashboard where an administrator can create, edit, delete and assign roles to any user.

just by logging in as an administrator you will be able to see the dashboard, users without roles and permissions will not be able to access or assign roles.👽


## Starting🚀

You will only have to download the project or clone it to be able to edit the code in case you want to modify it, take it, it is totally free

```
$ git clone https://github.com/JosephCrespin/RoleChanger.git
  
 
 Then you have to change your env. to:
 
 DB_DATABASE=authentication
 DB_USERNAME=none
 DB_PASSWORD=none
 
 now you can run the migration with:
 
./vendor/bin/sail artisan migrate --seed
  
```

- Tip✨
you can make an alias to save a few letters:

```
alias sail="./vendor/bin/sail"
```


### Requirements 📋

-  you need a code editor either VScode, Sublime Code, etc.
-  Laravel 8 / Jetstream
-  PHP 7.4
-  composer 1.10.15
-  Docker

## Demo 

- Here we see how the administrator can access the dashboar:
![DemoOne](DemoOne.gif)

- the administrator can delete, edit, and create roles with many permissions within.
![DemoTwo](DemoTwo.gif)

- Now the administrator can pass the admin role and the other roles created to a user, thus passing him privileges and permissions.
- as a normal user and without roles you will not be able to access the dashboar
![DemoThree](DemoThree.gif)

## Built With 🛠️

* [PHP/LARAVEL](https://laravel.com) 
* [Laravel-Jetstream](https://jetstream.laravel.com/2.x/introduction.html)
* [LiveWire](https://laravel-livewire.com) 
* [AdmiLTE](https://github.com/jeroennoten/Laravel-AdminLTE/wiki)
* [Spatie](https://spatie.be/) 


---
 with ❤️ by [JosephCrespin](https://github.com/JosephCrespin) 😊
