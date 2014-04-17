(Prime) Quick Style for phpBB 3.1
==========

Extension for phpBB 3.1 to let visitors quickly switch board styles.

![Screenshot](screenshot.png)

#### Ported Prime Quick Style for phpBB 3.0, by Ken F. Innes IV ([primehalo](http://www.absoluteanime.com/admin/mods.htm))


## Features
- Adds a drop-down selector to the header, which detects a selection change and triggers a board style change through the UCP.
- Automatically redirects back to the original page being viewed after style has changed.
- Works for guests too, but uses a special cookie instead.

#### Requirements
- >= phpBB 3.1-dev
- >= PHP 5.4

#### Languages supported
- English
- Spanish
- Indian

#### To do list
- Choose a better template event to include it in the header. The current position is not ideal. Especially for responsive layout.

## Installation
You can install this on the latest copy of the develop branch (phpBB 3.1-dev) by following the steps below.

**Manual:**

1. If there is not yet an `./ext/primehalo/quickstyle/` folder tree starting from your board root, create one.
2. Copy the entire contents of this repo into that folder you just created (You can leave out the *.md files, screenshot.png, .gitignore, and the .git folder).
3. Go to `ACP -> Customise -> Manage extensions -> Extensions`
4. Click Enable.

**Git:**

1. From the board root run the following git command:
`git clone https://github.com/paybas/QuickStyle.git ext/primehalo/quickstyle`
2. Go to `ACP -> Customise -> Manage extensions -> Extensions`
3. Click Enable.

## Uninstallation
In the ACP -> Customise -> Manage Extensions -> Extensions module, you can click one of the following:
- **Disable:** This keeps the Extension data and schema intact but prevents it from running. The whole thing kinda falls apart. The administration area will be unavailable. When you re-enable the extension, all functionality will become active again.
- **Delete data:** This destroys any data added by the extension, and reverts any schema changes it made. You can re-enable the extension, but all the settings of this extension will be gone.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2014 - PayBas