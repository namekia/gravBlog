---
title: Creating a Simple Gallery
date: 13:14 01/21/2016
author: Gregory Chambers
summary:
  enabled: true
  size: 0
taxonomy:
    category: blog
    tag: [images, cookbook]
---
Technique to display a bunch of photographs. This takes advantage of Grav's media functionality which allows a page to be aware of the images available in it's folder.

Fist thing is to title this page `gallery.md` instead of `item.md`. Inside the parent folder are a bunch of images. Each image will have an associated `meta.yaml` file for data such as title and caption text.

| Effect | Result |
|--------------------|
|size | 1280 x 720 x72dpi |
| type | jpeg - low|
|quality | 0 |
|blur | 0.1 |
| output | progressive |

Special page created: `templates/gallery.html.twig`
