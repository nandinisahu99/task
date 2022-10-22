#  LOGIN PAGE...

# DATABASE TABLE
The database used is MySQL to run create the users table. Run the 'login.sql' file in MySQL database to create users table.

# CONNECTION 
The PHP script to connect to the database is in 'connection.php' to match your server credentials.

# REGISTERATION FORM
The 'registration.php' creates a web form that allows users to register themselves, the script generates error if form input is empty and username is has been already exits.
If there is no error then the  user is redirected to 'login.php'

# LOGIN FORM
The 'login.php' is the login script. When a user submit a form with the input of username and password, these inputs will be verified against the credentials data stored in the database, if there is a match then the user will be granted to visit to another site or page.

# WELCOME PAGE
User is redirected to 'osoc.php' if login is successful.
