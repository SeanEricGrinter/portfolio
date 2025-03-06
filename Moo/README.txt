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