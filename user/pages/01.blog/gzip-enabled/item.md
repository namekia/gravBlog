---
title: Enable GZIP Compression
date: 17:39 01/09/2016
author: Gregory Chambers
taxonomy:
    category: blog
    tag: [grav, something]
---

 There was an issue when gzip compression was enabled on production server. This caused the localhost server (MAMP) to throw an error.
Solution:
create a configuration file just for localhost.
user/localhost/config/system.yaml
![something](gzipSnag.jpg)
