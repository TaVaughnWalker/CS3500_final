# Project Requirements
## Project outline
Project is due by **April 21** by 11:59 PM<br>
The project is an extension / transformation of our midterm project.  This means that we are doing something
on Taylor Swift and we can include old content and or reuse old content.  The reason for the complete restructure of
the project is so that it will work well with PHP and not be a pain to setup and configure.
<br>
We have to design an SQL database for this website meaning that we also have to find a usecase for a database
within this website.
<br>
The website should have response design and adapt to different display sizes such as mobile and other smaller displays
but still work for desktop.  This is done with `@media` in CSS styles.
<br>
We must use the following tech HTML5, CSS, Bootstrap, Javascript, JQuery, AJAX, PHP, and, mySQL database.
<br>

## Project requirements
### HTML / CSS (10%)
> "Overall, your website should have a name, a simple logo, and follow a design theme. Develop features appropriate to the design theme of your website. Your website visually pleasing and be intuitive for the users. Your website should implement a responsive design. Make the best use of the Bootstrap framework and CSS Design."
### Javascript / JQuery (20%)
> "Use javascript and/or jQuery, to make your webpages both dynamic and interactive by performing client-side tasks like: (1) adding event listeners to user actions to dynamically display or change, add or delete your web contents; (2) adding animations to your website."
### PHP (20%)
> "Upload your website to a web hosting service, so that your website can be accessed by typing an URL. Your website should have a Landing Page (named index.php) which is the first page the non-registered users will see after typing the URL for your website."
### PHP and Databases (10%)
> "Use PHP and database technologies (MySQL) to handle user requests from the server-side by dynamically display, or add, change or delete some of your web contents."
### Add one of the following features (10%)
> Error Handleing (Form validation and error handling)
> Web security (User authentication)
> Integration of some form of API
### Project Contribution Activity Log (30%)
> Two activity log submissions 15% each
### Bonus Points (1.5% Extra Credit)
> (.5%) Demonstrate mastery and outstanding implementation of HTML 5,  CSS 3, Javascript, PHP and MySQL. 
> (.25%) Use of AJAX for asynchronous server requests.
> (.25%) Significant incorperations of web design principles.

# Setup Instructions
## **Git Install**
### MacOS
TODO: Setup Later
### Linux
*Might be installed by default depending on your linux distro*
`$ apt-get install git`
### Windows
TODO: Setup Later

## **XAMPP Install**
### MacOS (Web)
Download the macos version 8.2.0 from [here](https://www.apachefriends.org/download.html)
<br>
Run the installer that was downloaded.

### MacOS (Brew)
*This may not work as macos may not be able to validate the installer in that case use web install.*
`$ brew install --cask xampp`

### Linux (Web)
Download the linux version 8.2.0 from [here](https://www.apachefriends.org/download.html)<br>
`$ cd Downloads`<br>
`$ chmod +x xampp-linux-x64-8.2.0-0-installer.run`<br>
`$ sudo ./xampp-linux-x64-8.2.0-0-installer.run`

### Windows (Web)
Download the windows version 8.2.0 from [here](https://www.apachefriends.org/download.html)
<br>
Run the installer file that was downloaded.

## **PHP Install**
### MacOS (Web)
TODO: Write Later

### MacOS (Brew)
*This should work if there are any issues use the web install.*
`$ brew install php`

### Linux (Web)
TODO: Write Later

### Windows (Web)
TODO: Write Later


<br>

## **MySQL Install**
### MacOS
TODO: Write Later

### Linux
TODO: Write Later

## Windows
TODO: Write Later

<br>

# Git
## Native support
Code editors like VSCode and Atom natively support git repos and you can use their GUI tools
in order to make this process easier.

## Cloning the repo
Input this command into the terminal<br>
`$ git clone https://github.com/JadonZufall/CS3500_team4/`<br>

## Commiting changes
Input the following commands into a terminal<br>
Add all changes other users have made to the repo<br>
`$ git pull`<br>
See all the files that you have changed sense your last commit.<br>
`$ git status`<br>
You will then be prompted by all the files that have modifications or have been changed<br>
*Do this for every file that you have changed.*<br>
`$ git add filename_here.txt`<br>
Now commit the changes that you have added with a description about them.<br>
*You only need to do this once for each commit not per file.*
`$ git commit -m "Describe your changes in this commit here."`<br>
Now push the changes to the github repo.<br>
*You may run into some problems with authentication ask Jadon about them.*<br>
`$ git push`<br>

# CSS
## Global CSS style
The global style sheet (`style.css`) should be included on every page, if it contains a style that is messing up
your webpage then it should be overridden else where.  This file should be included after Bootstrap is included
but before any other CSS file.

## Adding global CSS
Use the following line if the HTML file is in the root directory <br>
`<link rel="stylesheet" href="css/style.css">`<br>
<br>
Otherwise you have to navagate upwards to the file this is done by putting `../` before the path for as many times
as you need to navagate upwards.<br>
For an html file inside of a single sub directory.<br>
`<link rel="stylesheet" href="../css/style.css">`<br>
<br>
For an html file inside of two sub directorys.<br>
`<link rel="stylesheet href="../../css/styles.css>`

## Overriding global CSS
To override the global CSS just make sure that you include your CSS after the global CSS or write inline style
to override it.


<br>

# JQuery
## Including JQuery
JQuery should be included on every page using the following include statement
<br>
`<script src="js/JQuery.js"></script>`
<br>
<br>
This should be included before any other javascript is included, if you are within a sub directory meaning a file
where most pages are likely stored it may have to be included like the following statement.
<br>
`<script src="../js/JQuery.js"></script>`
<br>
<br>
Basically the style sheet is linked to the html file you are currently working on relative to where the file is and
the `..` is going up one file.


<br>

# PHP
## PHP vs HTML file
A `.php` file can contain html code as you can see in `index.php` but php code is started when the tag `<?php` is put
in the file and stopped when `?>` is put in the file.  Some `.php` files may not contain a `?>` closing tag this is
because the entire file is exspected to run as PHP code, if the PHP is closed then any lines (including empty lines)
follwing the code will be added as HTML content messing up the webpage.

## PHP includes
Files in the `includes` file contain the suffix `.inc.php` this just means that the php code will be included in another
php file else where.  This is useful when writing php code that will be used in more then one spot.

<br>

# SQL
## SQL database in PHP
Use the `dbh.inc.php` and include it in your code this will allow you to access the local database if it is created and
accessable. (TODO: write later)


<br>

# Project File Structure
## Directorys
`./css` Contains css style sheets that are required in the project. <br>
`./html` Contains basic html views that don't require php.<br>
`./img` Contains any images that you require on a page. <br>
`./includes` Contains PHP files that are to be included elsewhere. <br>
`./js` Contains javascript files and JQuerry. <br>
`./sql` Contains SQL schema and other code.<br>
## Files
`./.gitignore` Contains files that git will ignore but will be on your local machine.<br>
`./README.md` Contains the git readme file exsplaing all this information.<br>
`./index.php` File that contains the first page that the user sees.<br>
`./header.php` TODO: Write exsplaination later <br>
`./activity_log.txt` For final project write activity and commits here. <br>


<br>

# Project Tools
## JS
`./js/utils.js` Contains javascript functions that may be useful elsewhere.<br>
TODO: Write util functions here later.

## PHP
`./includes/dbh.inc.php` Contains database interface for PHP.<br>
TODO: Write guide on php SQL ref.
