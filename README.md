# Genesis Starter Child Theme - Developer's Edition

GenStarter is a developer-friendly starter child theme for the [Genesis theming framework](http://my.studiopress.com/themes/genesis/) which includes a modular architecture, Sass, gulp, Bourbon, and Neat.  It is your starting child theme for all of your projects to save you time and moola. 

To see the entire lab series which built this child theme, go to: [Let’s Build a Custom Developer’s Genesis Starter Child Theme](https://knowthecode.io/labs-guide/lets-build-custom-developers-genesis-starter-child-theme).

Note:  This is a starter theme meant to be extended and customized.  It is based loosely on the Genesis Sample Child Theme.

## Features

This theme includes the following features:

- Modular programming architecture
- Configuration-based architecture
- Modular CSS via Sass
- Task runner uses gulp
- Uses Bourbon and Neat

### Dependencies

This child theme requires the following dependencies:

- [Genesis framework](http://my.studiopress.com/themes/genesis/)
- [WordPress](https://wordpress.org/download/)

## Installation

1. Open up terminal and navigate to the themes folder.
2. Then type: git clone [https://github.com/KnowTheCode/genstarter-dev-edition](https://github.com/KnowTheCode/genstarter-dev-edition)

### Customization

1. The first step is to rename the theme's folder to whatever you want it to be. 
2. Change the namespace throughout the theme by changing `KnowTheCode\GenStarter` to `YourCompanyOrName\ThemeName`.
3. Update the `style.css` header DocBlock including the theme's name, uri, etc.  Make it yours.
4. Next configure what you want.  See [Configuration](#configuration) below for more instructions.
5. Sass - you will need to change the branding and styles as needed.
6. Structures - customize as needed for your specific project.

### Configuration

The runtime configuration parameters are found in the `config` folder.  Here you'll find configurations for:

- Theme Supports
- New Image Sizes
- Sidebar - unregister and register widget areas
- Theme settings defaults
- Styles - google fonts you want and font icons

You configure what you want for your project in these arrays.  Then they are loaded into the theme during the setup process.  No more hard coding in the source code.  Nope, your theme is configurable.

## Contributors

All feedback, bug reports, and pull requests are welcome.