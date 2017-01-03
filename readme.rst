###################
Framework Used
###################

This website is build using codeigniter. An essential knowledge of codeigniter is required.

*******************
Prerequisites
*******************

A working development environment: Linux,Window.
A working PHP environment version 5.0.3 or higher.
A good working knowledge of the PHP programming language
A working target database

**************************
Installation Instructions
**************************

CodeIgniter is installed in four steps:

    Unzip the package.
    Upload the CodeIgniter folders and files to your server. Normally the index.php file will be at your root.
    Open the application/config/config.php file with a text editor and set your base URL. If you intend to use encryption or sessions, set your encryption key.
    If you intend to use a database, open the application/config/database.php file with a text editor and set your database settings.

If you wish to increase security by hiding the location of your CodeIgniter files you can rename the system and application folders to something more private. If you do rename them, you must open your main index.php file and set the $system_path and $application_folder variables at the top of the file with the new name you’ve chosen.

For the best security, both the system and any application folders should be placed above web root so that they are not directly accessible via a browser. By default, .htaccess files are included in each folder to help prevent direct access, but it is best to remove them from public access entirely in case the web server configuration changes or doesn’t abide by the .htaccess.

If you would like to keep your views public it is also possible to move the views folder out of your application folder.

After moving them, open your main index.php file and set the $system_path, $application_folder and $view_folder variables, preferably with a full path, e.g. ‘/www/MyUser/system‘.

One additional measure to take in production environments is to disable PHP error reporting and any other development-only functionality. In CodeIgniter, this can be done by setting the ENVIRONMENT constant, which is more fully described on the security page.

That’s it!

*******************
Model-View-Controller
*******************

CodeIgniter is based on the Model-View-Controller development pattern. MVC is a software approach that separates application logic from presentation. In practice, it permits your web pages to contain minimal scripting since the presentation is separate from the PHP scripting.

    The Model represents your data structures. Typically your model classes will contain functions that help you retrieve, insert, and update information in your database.
    The View is the information that is being presented to a user. A View will normally be a web page, but in CodeIgniter, a view can also be a page fragment like a header or footer. It can also be an RSS page, or any other type of “page”.
    The Controller serves as an intermediary between the Model, the View, and any other resources needed to process the HTTP request and generate a web page.

CodeIgniter has a fairly loose approach to MVC since Models are not required. If you don’t need the added separation, or find that maintaining models requires more complexity than you want, you can ignore them and build your application minimally using Controllers and Views. CodeIgniter also enables you to incorporate your own existing scripts, or even develop core libraries for the system, enabling you to work in a way that makes the most sense to you.

************
The main folders
************

There are two main folders — application, system
The system folder contains all of the inner-workings of CI. All of the files that will help power our web application are contained within this folder, and thanks to the CI team, we have access to all of this functionality right away, without have to write it ourselves.

The application folder is the one we’ll be spending most of our time in. It’s where all of the code specific to our app will live, including all of its models, controllers, and views.

*******
Passwords for user
*******
user name: 0005001 password:12345
user name: 0005002 password:12345
user name: admin password:12345

*********
Resources
*********

-  `User Guide <http://www.codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <http://www.codeigniter.com/irc>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_, thank you.

***************
Acknowledgement
***************

Kindly contact at rizwantajkhattak@hotmail.com