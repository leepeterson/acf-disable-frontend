# Disable ACF on Frontend

Disable ACF functions on the front-end of WordPress in order to provide a performance boost.

## Contents

Disable ACF on Frontend includes the following files:

* This README.md file
* A `.gitignore` file

## Installation

1. [Clone this repository](https://github.com/leepeterson/acf-disable-frontend.git)
2. Copy the `acf-disable-frontend` directory into your `wp-content/plugins` directory
2. Navigate to the *Plugins* dashboard page
3. Locate the menu item that reads *Disable ACF on Frontend*
4. Click on *Activate*

This will activate Disable ACF on Frontend. Because this plugin has no interface or options, nothing will be added to the WordPress Dashboard

### GitHub Updater

Disable ACF on Frontend includes native support for the [GitHub Updater](https://github.com/afragen/github-updater) which allows you to provide updates to your WordPress plugin from GitHub.

## License

Disable ACF on Frontend is licensed under the GPL v2.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Important Notes

### Licensing

Disable ACF on Frontend is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

### Includes

Note that if you include your own classes, or third-party libraries, there are three locations in which said files may go:

1. `plugin-name/includes` is where shared functionality should be placed between `public` and `admin`
2. `plugin-name/admin/includes` is where dashboard-specific classes and dependencies should be placed
3. `plugin-name/public/includes` is where public-specific classes and dependencies should be placed
