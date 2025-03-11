I will  use this to record my notes and thought rocess of how I would re-create moo.com.au

These notes are intended to be a casual recording of my thought process, not necessarily professional, as I am not necessarily professional.
Despite saying this I have gone back and edited my notes.

I am not aiming to re-create the site exactly, but rather demonstrating how I would go about creating a site like this.

I have highlighted some key points in the job description, and have some things I must investigate or address:

Investigatables:

Block Theme architechture - Literally never heard of it, will need to Google.
Word Press Block Editor - Presumably related to Block Theme architechture. I will take a look at this after outlining my initial plan.
HTML, JS, CSS, jQuery, PHP - What I did for 3 and a half years at Yellowfin, easy as. PHP I don't heaps of experience in, but syntax aside, programming is programming.
3rd part APIs - I wrote like half of the Yellowfin REST API, so I think I'm good here.
Responsive Websites - Seems rather vague. I noticed that Moo has what appear to be some sort of microservices implementation on the landing page, maybe this refers to that?
                    - Other than that I can only guess that it means you shouldn't be writing loops in loops in loops, which is just good fundamentals.
Understanding of browser testing and debugging - F12 all day, breakpoints, logs, other much more fancy debugging tools are really just basic IDE knowledge.
Best practices for optimisation of websites - Will have to research this one to be honest, but I am assuming it's got something to do with KISS.
Experience maintaining WordPress websites - Nope. But I did maintain branches and work BAU at Yellowfin as we pushed out patches for the release versions of our web app.
Relevant qualifications - I do have a BaCompSci, but I feel as though my 3 and a half ish year at Yellowfin were far more instructive.
Basic cPanel experience - What the heck is cPanel.

Step 1:
Layout the architechture of the site with html pages

Step 2:
Block out basic design with divs

Step 3:
Steal assets from Moo's websites

Step 4:
Make my copy look like the original

Step 5:
Add fancy things to show off what I can do.
- I'll be honest, the splash image annoyed me. I want to have a go at making the cow only respond to onHover when you hover in the splash cutout (Not sure how to refer to that)
- I'm thinking there's probably a way to make a div adhere to a particular geometry, and I want to try and figure it out
- Hopefully I don't get too distracted by this and actually apply for the job

The Basic Plan does have some holes. I will research Block Theme and Word Press Block Editor first.

Post-Investigation 1:
Astoundingly, my time as a martial arts instructor was actually usefull to this project. I have actually used Black Themes before!
My employer wanted to use my web dev skill to redesign his website.

I find raw web dev fun. Filling out HTML structure and creating something from scratch is enjoyable. Hopefully Block Editor is not too far removed.

Looking at Word Press Block Editor documentation is bringing back some core dev memories. I have to install Node! It's been a while since I've heard "nvm".

I forgot how tedious setting up environments can be. You know it's getting serious when I need to put music on. Spotify and coffee must power 90% of the software industry.

Post-Investigation 2:

Environment is set up and I have a headache. I don't know why, but I seem to be cursed to have an absolute nightmare of a time creating any dev environment.

WordPress seems cool! Some very smart person found a very nice way to solve a lot of the problems that we ran into at Yellowfin.

I am guessing that instead of creating a bunch of divs and adding JS and CSS as needed to get what you want, now you can create a blocka s a plugin and re-use the same thing anywhere.
Or even better, use everyone else's stuff and only create your own when you absolutely need to. Or perhaps you have an in-house library of plugins that you use?
Library is a good word for it, it does remind me of C++ libraries - why make the same thing twice?

I'm going to map out some blocks I might need to create a copy of Moo's website, and then see if there are any free plugins to do most of the work, and then I can get to the important part.
Adding new functionality to that onHover for the cow splash image.

Post Investigation 3:

I know I said I set up my environment, but of course I was wrong. I guess it's better to catch issues early than late, but the environment setup curse is real.

I accidentlly deleted all my notes! Fortunately I am accustomed to making silly mistakes, and I know how to fix them. Git is a wonderful tool, and regular commits save lives. Using this method I likely would have completely walked back the previous commit, as restoring
files this way essentially erases their git history. But this is just for fun, so meh.

I am now going to investigate what plugins I might need to re-create moo.com. Finally.

Post Investigation 4:

I may have misunderstood plugins! I believe the popular ones available to the general public are common dependencies that everyone probably uses, similar to something like Typescript or JQuery. You don't need to use JS with either, but it does make things way easier.

I can see how it would also speed up development. I would imagine Moo probably uses a combination of publicly available plugins to save some time on the big stuff, and then relies on an internal library of plugins to get the rest of the job done.

Seeing as I don't have access to those libraries, and I have no idea what the workflow would be like, I am goig to mock up some plugins that would make the Moo.com website as re-usable as possible.

Public Plugins and Mockups 1:

Elementor seems to be a good idea. It can create headers and footers (And potentially more, I haven't looked), and some one has already made it.

Something to make navigation links.

Something to make social links.

Image containers for the header.

Some static text elements for the majrirty of the page.

An animated text. Seems to be actually adding and removing text.

The chat bot/helper thingo.

A table of links to various website/marketing stuff.

Testimonials.

Stylised columns of images.

A carousal of clients.

Blogs links.

Da Plan:

I wasn't going to inspect Moo.com, but it was too tempting. I am completely unfamiliar with their style of website design, so I am just going to go with what I know. I'm assuming that
if I were to work for Moo they would give some kind of design document/style guide/dev guide that would instruct me on good vs bad practices.


Step 1:

Use Element to create a footer and a header.

Block out every segment with divs.

Step 1.1:

That was a pain to figure out, but I now know how to install plugins on Local hosted wordpress site.

Unfortunately all the nice stuff that Element offers cost MONEY. Am I old if I remember a world were useful features made by developers were free to be used by other developers? Oh well.

I guess I do this the hard way.

Step 2:

The hard way is rather frustrating. I am not sure if this would be of any value for demonstrating my skills as a developer. The workflow for wordpress seems difficult to penetrate to a
developer new to WP. I have mocked up some design on the Local site, and it seems promising. Adding some styles I am confident that I can achieve the website design that is similar to Moo.

The issue is that this approaches the problem from a design angle. I don't really want to demonstrate that I can do design - I am just messing around with the WP canvas. I think it's valuable
to understand the pain of designers, but not so great for showing off.

I will switch to designing a plugin that allows me to add custom elements to the page in WP. That's probably super easy, right?

Step 2.1:

I've messed around with Element some more. The free editor is definitely WAY better than the WP editor, but it's stil very limiting. I'm certin there's some process/workflow that I'm missing.

I'll need to investigate a better way to add styles.

I also wonder if I should be creating this in a theme. Moo may have created their own theme and used that to design their site.

Need to set that aside for now, I've allowed myself to get distracted. How do I create a custom block that emulates some of the behaviour I can see on the Moo?

Also I should take a break.

Step 3:

I have started writing a plugin to animate the typeing text on the Moo landing page. I am making decent progress, but the knowledge gaps are tripping me up.

This is defeinitely what I would prefer to do, rather than design with the default wordpress canvas. This feels more familiar and I can understand what I'm doing and make some progress.

Did googling get harder over the last 3 years? I feel like a lot of these problems I could have found a solution to much easier a decade ago.

Omg I didn't start node. Every time.

Now that I can actually code and debug I am having fun. I might finish up this plugin and then mock up some CSS for the website. I think making the entire website will ruin my weekend.

I need to remember for next time that I looking to figure out how to add/render new elements to the WP editor using React. Sounds easy.

Step 4:

I am going to figure out how to use React today. I will also take a deeper look into how to use themes, as it may be a good idea to change the base of my html from the theme.

Ok that is definitely not that easy. Will probably need to take an actual course and more deeply understand how the whole pipeline of WP works before I go ahead and make a more
educated decision about that.

The job description on mentions jQuery, and I know jQuery. I will use jQuery for now and get the editor to appear as I would like.

Might be worth adding a settings page that allows me to control some aspects of the Typer Text animations.

I should also research what the view.js is actually used for. Is this what is seen on the client side? How do I pass the data to the view.js?

Sometimes it's good to re-read documentation, and by sometimes I mean like once a day. Edit can set the attributes, and uses React to update how it looks. Save uses the attributes to
generate some HTML. View renders the HTML(citation needed). This makes more sense to me.

I have strayed from the path and attempted to render with React despite knowing that this would be unlikely given the short timeframe. I have been reminded that
I should stay in my lane. Back to jQuery for now.

Ok doing this with jQuery feels disgusting, but I do have this working. Some points:
- I don't think this should be done with jQuery, it should be done with React
- There needs to be a better way for me to pass information within the JS, rather than reading data from DOM element attributes

I can put that aside for now however, and move on to seeing if I can pass this data from the Edit to the Save to the View

Ok double take again. It really does seem like React + PHP is the way forwards here. It seems like I would need to use PHP to store any user entered data anyway, and the blocks are set up
to use React. Makes me wonder where Moo uses jQuery.