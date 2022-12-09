# Spikeball_Website

A functional and interactive website for the Spikeball Club to store club related information.

As president of the Etown SpikeBall Club, Aiden wanted to create a site that would allow both club members and cabinet members to view information about the club, club members, and club events while also giving admin priviledges to club members including adding, editing, and deleteing club members and events.

---

Run setup.sql in MySQL on a local machine. This will create a new database called "spikeballdb" with the required tables.

After creating the database, you will need to add your credentials in either of the two following ways:

Creating environmental variables: INSTANCE_UNIX_SOCKET, CLOUDSQL_USER, CLOUDSQL_PASSWORD, CLOUDSQL_DB
Manually edit connect.php
If you decide to manually edit config.php, you will need to set $servername equal to your database host name, $username and $password equal to your database username and password, $database equal to the name of your database,
Run composer install

The following request formats begin with mainPage/photoAPI/

Update Session
Request Type: POST

Request Format: photoAPI.php with permanent POST parameter random.

Returned Data: JSON decoded image url as .JPG

Description: Loads two random photos from clubAlbum.json and displays them on the main page
