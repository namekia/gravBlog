---
title: Shortcode Sandbox
date: 03/02/2016 2:58pm
author: Gregory Chambers
header_image: false
taxonomy:
  category: blog
  tag: [grav, plugins, shortcode]
---

![kids swimming](shortcodeKids.jpg)

OK, lets try another one that's a bit more ambitious. This one is called BlueBox. My intent was to be a bit more ambitious with this one. I wanted to call a `.html.twig` as a partial.  However, I ran into an issue when the partial file was not recognized. A nice blue debugger screen was displayed instead. Obviously, I need to study more working `shortcode` examples.

In any case the example below was created by pasting the `html` directly into `BlueBoxShortcode.php`.

[blubox]This is the content that we're going to insert into the nested blue box. Interested to find out what will happen. Probably nothing.[/blubox]

Let's try a built-in core shortcode. The following shortcode will add an underline to some text. The third [u]word[/u] is underlined. OK, now we are going to try a modified shortcode that I put together.

This one will turn the selected text bold and red. The trigger will be... (can't show you). Your chain [bld]refines our vetted dilemma[/bld] of monkeys behind holes.

>>>>Stumbling Block #1 -- code-highlighting the trigger prior to running the shortcode caused it not to fire. Took me hours to figure that out!!

Shortcodes are defined in a `.php` file that is located in the `shortcode-core` plugin folder. For example, the shortcode demonstrated above is: `/user/plugins/shortcode-core/shortcodes/BoldRedShortcode.php`.

