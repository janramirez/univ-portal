# simple-php-framework

## A minimal PHP Framework using the Model-View-Controller model
**with sample User Registration and Sign-in/Sign-out features and basic view templates.

#### app/
###### This folder is where all functions, methods, configurations, etc. live

The model, view, controller functions are located here. Everything here is processed on the server-side.
###### models
Classes, Functions and methods that interact with the database.

###### controllers
The controller tells which **model or **view to render.

###### views
The views are the HTML codes that will be sent to the client/browser and is what the user sees.
Unless the styling for a view is inline, it should be located on the public folder and not on the app folder.

##### core/
This folder contains declarations, global variables, configurations, or functions that are core to running the app. These files are the must-haves in order to ensure the app runs as intended.

#### public/
###### This folder is where all client-faceing codes live
The public folder contains all assets (e.g. stylesheets, scripts, and media/images)

### index.php
The index.php file is the main and the only file that will be rendered on the browser.
In this minimal framework, it's purpose is that of a router - it routes requests from the user to the controller on the back-side.
The controller will then decide which model or view (or both) to send back to the user.

### .htaccess
This file sets the rules that let's all request go to the router (index.php) only but also set exclusions on direct access to files and directories.

### robots.txt
This file is responsible for suggesting files to exclude from web crawlers.


## Sample flow using the framework

### The router
When a user visits the site, because of the conditions set on the .htaccess file, it goes directly to the index.php file (or the router).
Depending on what url the user has typed in (for example https://mywebsite.com/), the router will "get" the URL, and send it to the Controller...
### The controller
...where it will deconstructed and/or processed. The controller analyzes the deconstructed URL then loads the file/s required. If the URL only needs to render a view, then the controller will load that view and sends it back to the user. 

### The model
If the URL needs some data to be presented, the controller sends the "processed" request to the model where data will be queried from the database or computed (or whatever else needs to be done depending on the request.) and sent back to the controller. 

### The view
The controller then provides this data to the respective view for its presentation. The view is then rendered, and styled depending on how the data will be presented to the user.