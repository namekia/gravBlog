---
title: grav CLI commands with GitBash
date: 11:19 01/22/2016
author: Gregory Chambers
taxonomy:
    category: blog
    tag: [git, cli]
---

### Compendium of useful GRAV CLI commands

To get a list of all the commands available in Grav, you can run the command:<br>
```$ bin/grav list```

To get help for a specific command, you can prepend help to the command:<br>
```$ bin/grav help install```

Clear cache (localhost)<br>
```bin/grav clear-cache```

**Watch SCSS folder for changes to: `_custom.scss`**

A _separate_ gitBash CLI needs to be opened from within the theme root directory *NOT the site root directory*.
Watch scss folder for changes: <br>
`$ scss --watch scss:css-compiled`


Style overrides or additions should be made in the _custom.scss file<br>
`$/user/themes/gregTheme/scss/template/_custom.scss`

**NOTE: THE INFORMATION BELOW IS NOT CORRECT. WILL NEED TO BE RE-WRITTEN AT A LATER DATE**

**Creating a new project**
Navigate to htdocs and create a new folder with project name. Open that folder and right-click inside. Choose "Git Bash Here".<br>
`$ bin/grav new-project ~/webroot/zzTestNewProject`
