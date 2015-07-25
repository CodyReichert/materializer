#+TITLE: Materializer WP
#+AUTHOR: Cody Reichert
#+EMAIL: codyreichert@gmail.com
#+DESCRIPTION: A fully-featured set of Material Design components for WordPress

Materializer WP is a fully-featured set of Material Design components,
packed up in a WordPress plugin, and ready to be used on any website.

The plugin is 'short-code based', so you can use all of the features
easily on any post, page, or custom post type. There over 25 different
short-codes and components that take care of all the hard work, and
allow you to turn any blog or website into a Material Design
wonderland.

* Getting Started

** Installation
   To install the plugin:

   - Download the `.zip` file.
   - In your Wordpress Dashboard, navigate to "Plugins -> Add New"
   - Select "Upload Plugin", and choose this plugins zip file from your
      computer. Hit "Install Now".
   - Once installed, simply press "Activate Plugin", and you're ready to
      go!

** Quick Start
   As a quick example of what's possible, here is how you would set up
   a [[https://www.google.com/design/spec/components/cards.html][Material Design Card]]:


   #+BEGIN_SRC emacs-lisp
     [card title="A Cool Card!" text="text-darken-3 grey" title_color="blue"]
     I am a very simple card. I am good at containing mall bits of
     information. I am convenient because I require little markup to use
     effectively.
     [link text="blue" to="/"]Go Home[/link]
     [/card]
   #+END_SRC

   [[file:./screenshots/materializer-card.png]]

   In this example, we have a =[card][/card]= shortcode, with a few
   attributes. A title, the text color, and the title color. Inside of
   the shortcode we have a couple more things: The card's text, and
   action links (which also have a text color attribute, and a =to=
   attribute which links to the home page).
   
   And a Material Design card is as easy as that. Cards are a great
   way to have useful information and actions pop out at your visitor,
   while keeping a slick design.


* Features

** Shortcodes
   There are over 25 different shortcodes and components to choose
   from. All of the shortcodes contain "attributes" that allow several
   different ways to build one component.

   Below is a list of all the currently available components, click on
   one to view an example, and see how to customize it.

   *Cards*
   - [[Basic Card][Basic Card]]
   - [[Image Card][Image Card]]
   - [[Revealing Card][Revealing Card]]

   *Buttons*
   - [[Raised Button][Raised Button]]
   - [[Floating Button][Floating Button]]
   - [[Fixed Action Button][Fixed Action Button]]
   - [[Flat Button][Flat Button]]
   - [[Large Button][Large Button]]

   *Collapsibles*
   - [[Collapsible][Collapsible]]

   *Collections*
   - [[Collection][Collection]]
   - [[Link Collection][Link Collection]]

   *Dropdowns*
   - [[Dropdown][Dropdown]]

   *Images*
   - [[Material Box Image][Material Box Image]]
   - [[Responsive Image][Responsive Image]]
   - [[Circular Image][Circular Image]]

   *Pagination*
   - [[Pagination][Pagination]]

   *Loading Icons*
   - [[Linear Loader][Linear Loader]]
   - [[Fixed Linear Loader][Fixed Linear Loader]]
   - [[Circular Loader][Circular Loader]]
   - [[Flashing Circular Loader][Flashing Circular Loader]]

   *Tables*
   - [[Striped Table][Striped Table]]
   - [[Hoverable Table][Hoverable Table]]
   - [[Centered Table][Centered Table]]
   - [[Bordered Table][Bordered Table]]
   - [[Responsive Table][Responsive Table]]

   *Viedos*
   - [[Responsive Video][Responsive Video]]
   - [[HTML5 Video][HTML5 Video]]

** Color Pallette
   
   There is a built in Material Design Color pallette that be used
   with every short-code. You're not stuck with the default color
   scheme, so you can integrate Materializer into your existing
   website seamlessly.

   ...more info coming soon!

* Shortcode Details
** Cards
*** Basic Card<<Basic Card>>
    
    Available Attributes:
    - title: The title of the card (optional)
    - title_color: The color of the title (optional)
    - color: The backgrund color of the card (optional)
    - text: The text color of the card (optional)
    - Links: Nested Action Link short-codes (optional)
    
    Example:
    #+BEGIN_SRC text
      [card title="A Cool Card!" text="text-darken-3 grey" title_color="blue"]
      I am a very simple card. I am good at containing mall bits of
      information. I am convenient because I require little markup to use
      effectively.
      [link text="blue" to="/"]Home[/link]
      [/card]
    #+END_SRC

   [[file:./screenshots/materializer-card.png]]


   A Basic Card can also be refitted to be a more simple Card Panel:

    Example:
    #+BEGIN_SRC text
    [card color="teal" text="white"]
    This is a simple panel card, these are really great for just
    blocking together small bits of markup on a nice eye-catching
    color
    [/card]
    #+END_SRC

   [[file:./screenshots/materializer-card-panel.png]]


*** Image Card<<Image Card>>

    Available Attributes:
    - img: The link to an image for display on the card
    - color: The background color of the card (optional)
    - text: The text color of the card (optional)
    - Links: Nested Action Link short-codes (optional)

    #+BEGIN_SRC text
      [card_img img="/wordpress-logo.png"]
      I am a very simple image card. I am good at containing images with
      action links.
      [link text="blue" to="/"]Home[/link]
      [/card_img]
    #+END_SRC

   [[file:./screenshots/materializer-card-img.png]]


*** Revelealing Card<<Revealing Card>>
   
    A Revealing Card is like a Basic Card that can be opened to
    display more information.
    
    Available Attributes:
    - title: The title of the card (optional)
    - title_color: The color of the title (optional)
    - color: The backgrund color of the card (optional)
    - text: The text color of the card (optional)
    - img: The link to an image for display on the card
    - links: Nested Action Link short-codes (optional)
    
    Example:
    #+BEGIN_SRC text
    [card_revealtitle="A Revealing Card"]
    I am a very cool revealing card. I am good at containing content, with
    more content inside.
    [link text="blue" to="/"]Go Home[/link]
    [card_open]And here is some more content inside with some other really cool stuff.[/card_open]
    [/card_reveal]
    #+END_SRC

    Closed: 
    [[file:./screenshots/materializer-card-reveal-inner.png]]
    Open:
    [[file:./screenshots/materializer-card-reveal-outer.png]]


** Buttons
*** Raised Button<<Raised Button>>
*** Floating Button<<Floating Button>>
*** Fixed Action Button<<Fixed Action Button>>
*** Flat Button<<Flat Button>>
*** Large Button<<Large Button>>
** Collapsibles
*** Collapsible<<Collapsible>>
** Collections
*** Collection<<Collection>>
*** Link Collection<<Link Collection>>
** Dropdowns 
*** Dropdown<<Dropdown>>
** Images
*** Material Box Image<<Material Box Image>>
*** Responsive Image<<Responsive Image>>
*** Circular Image<<Circular Image>>
** Pagination
*** Pagination<<Pagination>>
** Loading Icons
*** Linear Loader<<Linear Loader>>
*** Fixed Linear Loader<<Fixed Linear Loader>>
*** Circular Loader<<Circular Loader>>
*** Flashing Circular Loader<<Flashing Circular Loader>>
** Tables
*** Striped Table<<Striped Table>>
*** Hoverable Table<<Hoverable Table>>
*** Centered Table<<Centered Table>>
*** Bordered Table<<Bordered Table>>
*** Responsive Table<<Responsive Table>>
** Videos
*** Responsive Video<<Responsive Video>>
*** HTML5 Video<<HTML5 Video>>

