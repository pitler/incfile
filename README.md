IncFile Challenge


- I create the artisan command, it can be called php artisan send:post
- Must change your .ENV to define email and database credentials, also change QUEUE_CONNECTION parameter to  QUEUE_CONNECTION=database
- Create queue:table and queue:failed tables and migrate them.
- To start thw jobs  php artisan queue:work

How this works:

The command send:post add to the queue a new job
Then we start the jobs with   php artisan queue:work
It will try to send the post request to the fake url (app/Jobs/SendPostJob.php)
If we get a 200 repsonse, we can do whatevver we want 
If it failed we create a Notification to send an email to the admin to tell them that some post requests failed









