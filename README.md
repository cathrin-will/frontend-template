# Frontend website

> Strapline
## What you"ll need to have installed

* [Ruby](https://www.ruby-lang.org/en/documentation/installation/) - Windows only, OSX has ruby already installed
* [Node](https://nodejs.org/en/download/)
* [Grunt](http://gruntjs.com/)
* [Sass](http://sass-lang.com/install)

## Getting Started
Once you have the relevant things installed you will have to run

```bash
	npm/yarn install
```
[yarn](https://yarnpkg.com/en/docs/install) is much faster than npm and can be additionally installed

To update npm packages https://www.npmjs.com/package/npm-check-updates
```bash
	npm-check-updates -u
```

To run every task, recommended first time installed.

```bash
	grunt all
```

## Grunt Commands

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

To html/js lint
```bash
	grunt lint
```

To watch changes you make to js and sass files and compile as you work
```bash
	grunt watch
```

To open site in browser and refresh as you code
- probably will need tweaking for indicidual set ups. Check out [browsersync](https://www.browsersync.io/) for documentation
```bash
	grunt browser
```

## Browser Support
*

