---
title: "Week Three (Working with Dependencies and API Calls)"
date: 2023-02-15
layout: post
---

This week I spent a lot more time reading documentation than reading code.

I first started learning about composer (https://getcomposer.org). Composer is very similar to pip for python. It is a dependency manager for PHP. Installing composer on my laptop was not fun, it was made extra hard due to me having a mac. I had to first install homebrew which I had used in the past but I have not used in a long time. Homebrew is The Missing Package Manager for macOS (or Linux). It handles a lot of the packages that macOS needs to work with other dependencies. Once I got composer installed, I started looking into the different libraries for making API calls in PHP. I found two common options. The first one was cURL this library (https://www.php.net/manual/en/ref.curl.php) has been around for a long time. From the documentation I found, the library seemed to be a tad bit too detailed and did not do a good job of creating a more abstract wrapper. The other option I found was Guzzle (https://docs.guzzlephp.org/en/stable/) this seemed to be a much more modern library and was more similar to requests (python) and axios (javascript).

I ended up using that one! I then found a simple API that returns an image URL for a random dog (https://dog.ceo/api/breeds/image/random). I wrote a function that askes how many images the user would like, the function will get that number of images and store them in the database. My goal for next week is to get those images back from the database and show them using HTML and PHP.
