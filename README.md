# Cajo
# Company Oriented Project 2

total hours worked : 104

# Weekly Report By Harjit

# Week 1: 17.01.2017 - 20.01.2017
1)  The project started from this week. I have got the basic website to start with. Since it is in php, I will need some time to understand and work on it. I had to setup server and database on my machine. Even the sample I got from the website need to be installed first before using. I had to figure out how to install it as there were some specified ways to install it 

2)  I have just setup the project and I have to start it from next week. This week just had 3 days and it was very short to start.

3)  Have to go through some tutorials before starting the project as I am not used to php. The website that the company asked me to get reference from is very vast.

4)  Kickoff meeting and looking through the company slides for my tasks for the project (1 hour),
    Tutorials for php, server and database (2 hours),
    Preparing all the documents before starting the project (2 hours),
    Setting up server and database (2 hours),
    Downloading the project and installing (3 hours)

# Week 2: 21.01.2017 - 27.01.2017
1)  The slide was misleading as it was written that the company has decided to use the existing website opencart and I spent all my time figuring how the website actually worked and I was confused where I actually had to implement the function that I was supposed to do. Then Juha said that I to develop it myself not referencing the website opencart. I started the development by first making the preview page for the website at first. It allows user to upload a photo to the browser and the website provides a preview of the image provided. This doesnot interact with the database yet. 

2)  Next week I will start working on the image processing for the previewed picture.

3)  There was a misunderstanding with the company that I am doing this project with. According to the presentation that they sent me it said that they are going to use the commercially available website Opencart but later when I inquired exactly what they needed it turned out that they'll use the website once I finished my part of the project.

4)  understanding the architecture of opencart (3 hours),
    Making basic architecture wiht image preview (4 hours)

# Week 3: 28.01.2017 - 03.02.2017
1)  I had to use Iagemagick to edit pictures in php. It is a free php plugin specially for image manipulation. This week there was a deadline for the demo of the other project that I am doing and one guy that I was working with couldn't continue with the project so I had to focus more on that project. Still I was able to make some improvements on this project. I have the basic portal working now where user can add photos of their choice to the website. The buttons for cropping, resizing and others are yet not working. I have written some code for the cropping functionality but it still has some errors. I will be able to look at it next week only.

2)  Next week I will start implementing the cropping and resizing functionality.

3) The other project had to be the main focus this week. There was a deadline for the demo and one guy working with me had to leave the project. In this project I had problem uploading the image into the browser at first. It was due to I was using form inputs where I could have just written a function for click of the button.

4) image preview improvements (2 hours),
   cropping functions (2 hours),
   error with the  div I used as the cropping tool and fixes (3 hours)

# Week 4: 04.02.2017 - 10.02.2017
1) Using the div element to get the cropped picture was getting really hard so I looked for another way to do it and I found JCrop. It is a library which we can import to our code and use the function for cropping the file. Now I just have to use it to replace the original picture with the cropped picture in the browser itself before sending it to the database. The Jcrop function is confisuing and the version that I had imported says it is not compatible and I couldnot find a way to resolve it so without wasting further time I thought of doing it with the earlier version. When going through the normal approach with a division, I had trouble with using php in a javascript file so it gave me a lot of errors. The JQuery libraries that I imported had to be imported in the body part of the main index file. Otherwise the external js could not find the libraries at all. Showing the cropped file on the image div in browser itself is still having issues when loading. For some reason I am not able to call the javascript for the image source in the php file. 

2) Finding a way to save the cropped file into the database.
   Then finding a way to stick it into the image source instead of downloading. 

3)  The other project had to be the main focus this week. There was a deadline for the demo and one guy working with me had to leave the project. In this project I had problem uploading the image into the browser at first. It was due to I was using form inputs where I could have just written a function for click of the button.

4) image preview improvements (2 hours),
   cropping functions (2 hours),
   error with the  div I used as the cropping tool and 	fixes(3 hours)
   
# Week 5: 11.02.2017 - 17.02.2017
1) Continued to work on the saving of image cropping method. I was able to download the cropped image but it is still can't set the cropped part that user wants to keep. It is just showing blank picture instead of the cropped picture. The division used for cropping the image is zooming the image automatically before cropping which is not entirely providing the needed result. It works fine when the browser is zoomed to 75%. I have not messed around with the css which is why I am finding it hard to get the reason for that. Also, the cropping works only when the name of the image segment is specified in the crop.php file. If I try to use the image name from the browser it shows blank picture. Although the width and height is captured, the picture is always dark. I have to find a way to connect the image div with the php code in crop.php.

2) Moving on to Image resizing functionality

3) Blank cropped picture, failing to combine with the cropped image. Error with calling js inside of php file. It doesnot recognize the javascript commands properly. The auto zooming is giving a hard time. It doesn't work properly when the browser is in 100% zoom. The cropped image is blank or black when the name is not specified.

4) combining and saving the cropped image (3 hours),
   The zoom issue with the browser (3 hours),
   specifying the image name for cropping (2.5 hours)

# Week 6: 18.02.2017 - 24.02.2017
1) This week Lab assignments in school and tests made it difficult to work. No progress in the project this week
2) Next week I am going to work on turning image into grayscale.
3) Time issues
4) No work this week.

# Week 7: 25.02.2017 - 03.03.2017
1) This week I worked on image resizing functionality. There are different options given in the browser for resizing. Example, 200x200, 300x300 and 400x400. User selects a value and image is resized according to that. First there was a problem getting value from the dropdown menu because the value that I set in the option was a string and the value that I needed for the image resizing function was an integer. There is still an issue that even if I set different values for the resizing function it always set the image to same size. Also this week I implemented the grayscale function for the image. It was not much problem or difficult but it took me quite a while because I was using a black and white image for image manipulation and the grayscale function even though it was working fine, I couldn't see it because the image was already in grayscale. This confused me and it took me a lot of time to figure it out. 

2) I am going to start working on the 3D functionality for the image manipulation next week. I will need to watch tutorials and gain prior knowledge about three.js before implementing it because the company suggested I use this library but I have no idea how it works.

3) dropdown value gain issues. The colour of the image used created an issue. image cropping issues still, not giving the desired output.
   
4) resize function intro (2 hours),
   implementation of resize method (3 hours) ,
   selected value from option getting issues (2 hours),
   grayscale image function (2 hours),
   resolving black and wsite image confusion (3 hours)

# Week 8: 04.03.2017 - 10.03.2017
1) This week I started work on the 3D image feature. I had to go through the documentation of three.js which is kind of new javascript library and I am not familiar with it yet. The tutorials gave me an idea where to start the work from. Then the documentation helped me implementing each function. First I was able to create a shape that had to be displayed on the canvas or scene as it is called in three.js. Then the shape or mesh needed a texture which I would use the image for. I first used the image on the home directory to put on the mesh. 

2) The 3D image has to be further designed to make user able to move it around. I am going to work on it next week.

3) A new area was introduced and I had to start from basic for that watching tutorials and documentations.

4) Three.js documentation (2 hours),
   youtube tutorials for three.js (3 hours),
   scene and mesh implementation (3 hours),
   image control for texture ( 1 hour)

# Week 8: 11.03.2017 - 17.03.2017
1) The image from the input was really difficult to insert into texture at first. The src value had to be converted into dataURL to be displayed inside the canvas. Then once it was appended to the container div, the user may change the picture again and I was using appendChild for inserting the canvas which would make a new canvas everytime the user clicked the button. It had to be replaced everytime when the user changes the picture. 

2) Making the crop feature smooth.
3) The crop feature has some problems. It doesnot crop with exact starting point, height and width.
4) Inserting image from local to the mesh manual (2 hours)
   Inserting the uploaded image to the mesh texture (4 hours)
   Wrapping the plane with the image and making it repeat (3 hours)
   Replacement of canvas each time the user changes the picture (3 hours)
   Orbit contol for 3D viewing (3 hours)
   
# Week 9: 18.03.2017 - 24.03.2017
1) The 3D image viewing is fully working now and updated itself with each change in input file. The crop function is not working as desired. I have added two functions to the crop button so that when the user clicks the button the first time, it shows the crop tool. Then, adjusting it as needed, the second click actually crops the image. This was very hard to figure out. Also, I had to make it in a loop so that if the crop tool is there it has to crop the image and if the crop tool is not there, first crop tool has to be shown to adjust the image. The cropping function is further modified to make a popup modal. First when the user clicks the crop button, the popup appears with the image and the crop tool. After adjusting the tool user can click the button on the modal to crop the picture. 

2) The image inside the 3D canvas comes inverted and it needs to be fixed. I am also going to add zooming in feature for the 3D canvas. The image is not fully wrapped into the plane so that needs to be added as well.
3) The multiple function to single button was difficult. Rendering image into a div had to be shown separate from the image element. The canvas and the image should not be visible at the same time. The image is not wrapped around the plane properly. It is plain black at the back. 
4) 3D canvas polishing (2 hours)
   crop button multiple functions (3 hours)
   visibility adjustment for image and canvas (3 hours)
   3D further updates (3 hours)
   popup modal (3 hours)
   
# Week 10: 25.03.2017 - 31.03.2017
1) The image inverting prooblem is fixed by the right values with X,Y and Z for the plane. Adding Trackball controls allowed me to use the trackball from the mouse for zooming in and out. Adjusting the rotation speed and zoom speed is the additional options thats added. The cropping function was working but not fluently. The tool suggested by company didn't work for me for some reason so I decided to use another tool called Jcrop. First I had to go through the basics for this. It was very easy to add this as I didn't have to modify my code very much. The Jcrop first gave me the error when I tried to get the image source from crop.php to display in the main image container. I had to use GET method for that and apparently this method doesnot support large files. One option was to maximize the limit for the GET method so that I can pass the image source but I thoght it would harm other applications. So I made so that it saves the modified image in the server and then gets it from there once the page is refreshed. This finally helped my tackle the problem. The website works fine now. Some bugs present but can be fixed in no time.

2) It is done now. Maybe improve designs if needed
3) The Zoom was not working before, and the direction values was giving problems for inverting the plane. The crop function was not accurate which forced me to use a tool called Jcrop.
4) image invert issue (3 hours)
   Trackball.js understanding and insert (2 hours)
   Zoom function (3 hours)
   Jcrop initial understanding (3 hours)
   implementation of Jcrop for cropping (3 hours)
   modal design modifications final( 2 hours)
   
	
	
 

 
