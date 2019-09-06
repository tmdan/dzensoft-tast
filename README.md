# Test task
#### to initialize the project on the local computer, run the commands one by one

                
----

- clone the repository

`git clone https://github.com/tmdan/dzensoft-tast.git dzensoft.test`

- install dependencies

`composer install`

- create a new database, call it dzensoft.test, and import the file dzensoft_test.sql from the dev folder

- If you have taken the previous step, you can skip this one. run the commands in the console one by one

`php artisan migrate` and `php artisan db:seed`

- After all these steps, follow the link site.com/admin - to get into the administration system. Test login is user@admin.com and test password is password.  

PS. to create a new user using the console enter the command:

`php artisan voyager:admin your@email.com --create`

## video result here you can watch it - https://youtu.be/DXMyArk4KZM.

### End
