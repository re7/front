# re7 front

This repository contains sources of the **re7** frontend application. It's a
community driven project, that should remain completely open source.

To let it be modular, this application should only access to data through
services. It's just a frontend application, providing an interface to all these
API at a single place.

## Technical overview

Nothing right now.

## Requirements

Before installing this project, be sure you have these tools on your system:

```
php >= 5.5
php-curl
nodejs
npm
```
On debian, you should take care of also having:

```
nodejs-legacy
```

## Installation

The first step is to clone this repository:

```
git clone git@github.com:re7/front.git
```

Then, go into this folder and get composer:

```
curl -sS https://getcomposer.org/installer | php
```

Finally, you should install vendors (PHP and npm) and assets:

```
php composer.phar install
sudo npm install
sudo npm install -g gulp
gulp install
```

## Special thanks

We would like to give a special thank to everyone who worked on this project. By
developing features, integrating style, or even by thinking about our
problematics. To all of you: **Huge kisses! <3**
