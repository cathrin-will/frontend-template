# Frontend website

> Strapline
## What you"ll need to have installed

* [Sass]:http://sass-lang.com/install
* [Ruby](https://www.ruby-lang.org/en/documentation/installation/ ( Windows only, OSX has ruby already installed ))
* [Node](https://nodejs.org/en/download/)
* [Grunt](http://gruntjs.com/)
* [Bower](http://bower.io/)
* [Sass](http://sass-lang.com/install)

## Getting Started
Once you have the relevant things installed you will have to run

```bash
  npm install
```

To run every task, recommended first time installed

```bash
  grunt all
```

To run most tasks but not some needed during developing stages (modernizr and jshint)

```bash
  grunt
```

To minify all images
```bash
  grunt images
```

To compile sass to css
```bash
  grunt sassy
```

To watch changes you make to js and sass files and compile as you work
```bash
  grunt watch
```

## Browser Support
*
