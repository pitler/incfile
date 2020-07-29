IncFile Challenge


- I create the artisan command, it can be called php artisan send:post<br/>
- Must change your .ENV to define email and database credentials, also change QUEUE_CONNECTION parameter to  QUEUE_CONNECTION=database<br/>
- Create queue:table and queue:failed tables and migrate them.<br/>
- To start thw jobs  php artisan queue:work<br/>

How this works:

The command send:post add to the queue a new job<br/>
Then we start the jobs with   php artisan queue:work<br/>
It will try to send the post request to the fake url (app/Jobs/SendPostJob.php)<br/>
If we get a 200 repsonse, we can do whatevver we want <br/>
If it failed we create a Notification to send an email to the admin to tell them that some post requests failed<br/>









