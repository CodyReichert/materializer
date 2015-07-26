Materializer WP
A set of Material Design Components for WordPress


Author: Cody Reichert
Email: codyreichert@gmail.com



Thanks for installing! Let me show you around:

Documentation
- All of the documentation can be found at http://codyreichert.github.io/materializer
- Or, if you've got the full package - in the docs/ folder of this directory


Code
- materializer.php, in this directory, is the entry point for the
  plugin. Everything stems from there.
- shortcodes.php initializes the MaterializerShortcodes class (from
  which all of Materializers' shortcodes extend into their class), and
  requires all of the files in components/.
- The components/ directory contains a file for each set of shortcodes
  (eg, buttons.php).
- The scripts/ directory contains two subdirectories: dist/ and src/
  - src contains the actual source files (scss and javascript)
  - dist contains the compile source files (css and js). The compiled
    files are not obfuscated in any way.  They are just minified to
    maintain fast page loads. The unminified versions are bundled with
    the plugin
  - The static/src directory is setup with npm for dependencies and webpack
    for development, which also handles the compilation for dist/


Dependencies
- Materialize.css is the main framework this is built on. It's license
  is MIT (which is a GPL-compliant license), so you can feel free to
  modify and redistribute - but please retain the included copyright
  notice


Support
- Please use the support method that was included whenever you purchased the plugin.


Thank you for installing, have a great ride!

- Cody Reichert
