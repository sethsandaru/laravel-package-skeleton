# Laravel Package Development Skeleton Template

I decided to make my own repo for Laravel Package Development. In case that you want to use or reference, use this repo :D

## Package Main Structure
- src
    - controllers (depend)
    - models (depend)
    - views (depend)
    - ServiceProvider.php (in repo)
    - Facade.php (in repo)
- tests (Unit test for Laravel/PHP here)

## How to use?
- Clone this project
    - Obviously you have to change the PHP
- Create project by using **Composer**:
```
composer create-project sethsandaru/laravel-package-skeleton <folder-name>
```


**Note**: There will be some keywords in some files. You need to change it for your own cases.

### Keywords
- `:package`: your package name - follow by the naming rule of Composer
- `:namespace`: your package's main namespace
- `:facade`: your package main facade's name.

Change them before coding.

### Composer.json
- Change the `name` to your own package name. Then change the `description`, `keyword`, `authors`,...
- Update the keywords like above.

## What's next?
- Start to code
- Read the Laravel's documentation: [Package Development](https://laravel.com/docs/6.x/packages) for more detail.

## Enjoy this and want to contribute something?
- Fork the project and create a pull request
- Buy me a coffee (below)

## Supporting the project
If you really like this project & want to contribute a little for the development. You can buy me a coffee. Thank you very much for your supporting <3.

<a href="https://www.buymeacoffee.com/xKOM9NB8p" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>

Copyright &copy; 2018 by [Seth Phat](https://sethphat.com) aka Phat Tran Minh!
