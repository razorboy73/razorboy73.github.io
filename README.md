razorboy73.github.io
====================

Notes/Direction to designer


I was going to include two different version, but rather I have just renamed the front page of the site from index.html to
 - rallyvanity.html
 - rallyvanity-onboarding.html
  - except for the configuration of the form field capture, these two version of the home page should be the same
  so to enter the site - either go to one of the above pages
  for the links at the bottom of the page - once we have finalized the the 
  - there are notes for direction/requirements directly in the content of the page
  
  
Page layouts we require
1. home page - rallyvanity/rallyvanity-onboarding
2. not a priority right now - inner content marketing pages - should be similar to the home page and for 
4. Inner admin information page - the links at the bottom of the page
3. landing page templates


rallyvanity.html
--------------
 - this home page is going to be used to capture email addresses
 - after the user signs up, they go here => thanksforsigningup.html and we follow up with an email
 - the form capture on the front page is already configured for mail chimp

 
rallyvanity-onboarding.html
-----------------------
 - this version of the the site includes a multipage on boarding sequence that allows users to create an instance of rally
 - the user will progress through the following pages to create an instance of rally
    rallyvanity-onboarding.html - enter an email and user name
    confirmemail.html - email confirmation - this has a button to simulate clicking a confirmation link from your email
    signup.html - administrative items
    team.htm - sends off invitations to team mates - from here the adminstrator would be taken to their instance
 
Landing pages
----------------
 - also on an ongoing basis, we will be testing various landing page designs and messaging - my poorly designed mock ups can be seen at:
   coming-soon.html
   landingtemplate2.html
 
 

Color Schemes to use in website - they match with new web app
====================
Primary Colors
grey - 95/94/93 - 5F5E5D
Red - 226/74/55
Secondary
grey - 180/113/98
Red 232/113/98 #E87162

Blues

Blue -  #418ac9.
Blue Hover  which is slightly darker: #347dbc.

Design and implementation approach
==================
I think it will be easier to work on the images in advance and slot them in to 
this prototype site.

The prototype site you have been delivered has all the copy that will be going 
into the final site

Deployment
============
This site is going to interface with a Django back end via an api and is going to serve as
the starting point for clients to create an instance of r/ally for their organization

Site Map
===========
home page
 - thanksforsigningup
 - confirmemail.html - once multitenancy is active
 - signup.html
 - team.html
  - the user would then end up loggedin to the responsive web version of the application

Images
=========
In the mock up there are many images that are serving as place holders that need
to be improved
Any images that we need developed


nav bar
===========
center the logo in the white space - too far over to the left margin

