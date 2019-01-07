# Mobius

![mobius wordpress theme](https://github.com/mckeever02/mobius/blob/master/screenshot.png)


Wordpress starter theme based on underscores with bootstrap and laravel mix for assets compiling.

Getting Started
---------------

- Download or clone this repo into your wordpress theme directory. 
- Run `npm install` in the mobius theme directory to install dependencies.
- Open `webpack.mix.js` and change `.browserSync('template.test');` to your local site URL for hot reloading

Laravel Mix Commands
---------------

Laravel Mix provides a few helpful commands while you are developing your theme. Here are the main ones you will need:

```
npm run dev
```
Compiles the assets but does not minify them. Useful for seeing your unminified assets.

```
npm run production
```
Compiles and minifies your assets, ready for you to push to production.


```
npm run watch
```
This keeps a watch on your files and if any change, then it runs the dev command automatically.

You can see a full list of the laravel mix commands [here](https://laravel.com/docs/5.4/mix). Note that `.version()` won't work for versioning/cache busting but isn't necessary anyway as this is achieved in functions.php using `filemtime()`.