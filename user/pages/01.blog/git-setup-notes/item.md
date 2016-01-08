---
title: GitHub Code Notes 01asasas
date: 11:30 01/06/2016
author: Gregory Chambers
taxonomy:
    category: blog
    tag: [javascript, cms, grav, github]
---

> Copies of code to be pasted into Git Bash for Setup and Usage of GitHub for Site Development

===

** Open a SSH connection to remote s1nga server -- gravBlog **

In git Bash:

```$ ssh s1ngaco@s1nga.com```

then (RIGHT CLICK) copy/paste password: m4k*XUabuT2%
This will open the connection.

then

```
$ cd ~/public/gravBlog
$ git pull
```
someting like the following will be returned

```
remote: Counting objects: 14, done.
remote: Compressing objects: 100% (10/10), done.
remote: Total 14 (delta 8), reused 10 (delta 4), pack-reused 0
Unpacking objects: 100% (14/14), done.
From https://github.com/namekia/gravBlog
   4909e57..6f1a5c6  master     -> origin/master
Updating 4909e57..6f1a5c6
Fast-forward
 user/pages/01.blog/sunshine-in-the-hills/item.md | 4 ++--
 1 file changed, 2 insertions(+), 2 deletions(-)
```
**this is the manual process of uploading changes from the GitHub account to the remote server**

```
~/public_html/___github-refresher.php
```

```
<?php
date_default_timezone_set('America/Chicago');
ignore_user_abort(true);
set_time_limit(0);

$repo          = '/home/s1ngaco/public_html/gravBlog';
$branch        = 'master';
$output        = array();

// update github Repo
$output[] = date('Y-m-d, H:i:s', time()) . "\n";
$output[] = "GitHub Pull\n============================\n" . shell_exec('cd '.$repo.' && git pull origin '.$branch);

// redirect output to logs
file_put_contents(rtrim(getcwd(), '/').'/___github-log.txt', implode("\n", $output) . "\n----------------------------\n", FILE_APPEND);
```

to test:

```
$ php ___github-refresher.php
From https://github.com/namekia/gravBlog.git
 * branch            master     -> FETCH_HEAD
```
