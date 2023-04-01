---
title: "Week Seven (Mini-Project)"
date: 2023-03-31
layout: post
---

I was in the mixed group, we had Bash, Rust, PHP, and Terraform. My part of the project was to build a small PHP application that would be deployed. Learning Laravel and PHP came in handy for this project because I was able to build a to-do list app. This app had two API endpoints, one endpoint would add a task to the list and one API would delete a task from the list.

This week I researched how to handle post-form requests in Laravel. (https://dev.to/sanajitjana/form-example-in-laravel-8-45oc) This was a really good resource for information on working with a POST form. Also, I learned about Blade. Blade (https://laravel.com/docs/10.x/blade) is a scripting language for Laravel to render data that is passed in from the backend server.

The biggest challenge in this project was figuring out how to build all the dependencies in an EC2 instance using an Apache server. Composer which is the package management would install different package versions on my local system vs the EC2 instance. Overall it was a fun project and really helped me learn how to deploy a PHP application.
