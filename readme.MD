# Wordpress starter theme

- Create Wordpress project using [Local by Flywheel](https://localbyflywheel.com/)
​
- Log in into wp-admin (projectURL/wp-admin)

- Block the robots (``` Settings -> Reading -> check search engine visibility ```)
​
- Download starter theme into folder: ``` Local Sites -> project-name -> app -> public -> wp-content -> themes ``` folder and rename it
​
- Activate new theme in the admin panel ``` Appearance -> Themes ``` and delete default themes (leave one default theme just for backup)

- Delete all widgets from the right side of ``` Appearance -> Widgets ```
​
- Delete ``` Hello World ``` post from ``` Posts ```
​
- Delete ``` Sample Page ``` from ``` Pages ``` and create new Page ``` Homepage ```

- Set ``` Homepage ``` page as the Front Page in ``` Settings -> Reading ```

- Delete tagline in ``` Settings -> General ```

- Set Permalinks on the ``` Post name ``` option, ``` Settings -> Permalinks ```

- Create primary navigation in ``` Appearance -> Menus ```

- Install plugin [ACF PRO](https://www.advancedcustomfields.com/my-account/) (credentials on vivify passbolt) if needed

- Install multilingual plugin [WPML](https://wpml.org/account/) (credentials on vivify passbolt) if needed
​
- For migrating and syncing database between environments use these plugins:  [github-updater](https://github.com/afragen/github-updater), [wp-sync-db](https://github.com/wp-sync-db/wp-sync-db), [wp-sync-db-media-files-master](https://github.com/wp-sync-db/wp-sync-db-media-files)
​
- In the theme root folder change ``` screenshot.jpg ``` with screenshot of the project
​
- In the theme root folder run ``` npm install ```

- For compiling the css, run ``` gulp sass ```, for watching the changes ``` gulp watch ```
​
- Create ``` mu-plugins ``` folder in ``` wp-content ``` folder for registration of the custom post types
​
### Manual for environments syncing

- On all environments (local, stage, production) install 3 plugins for DB syncing already mentioned above. ``` Tools -> Migrate db ```.  In ``` Settings ``` tab add permissions for ``` push ``` and ``` pull ``` (check both checkboxes on every environment).
- From the tab ``` Connection info ``` from stage i.e., copy API URL. Then, on local i.e., check ``` Push ``` and past copied URL. With this, we'll copy local base to the stage. Optionally, check ``` Media files ``` if we want to copy media's as well.
- For copying files between environments we'll use git.
- After creating custom fields with [ACF PRO](https://www.advancedcustomfields.com/my-account/), in ``` Custom fields -> Tools ```, generate PHP code, copy and paste it in the theme file ``` inc -> custom-fields.php ```. Be aware that every change done on the custom fields needs new generating and copying the same code.  
- Enjoy ;) 
