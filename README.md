IIF Wordpress Starter theme


#Contenu #

## Theme
Theme Starter IIF 
- documentation: https://imageinfrance.atlassian.net/l/c/uuM2QHUq


#Setup du theme
### Prerequis
- Connaître Sass
- npm installé
- git installé
- WordPress actif
- (optional) livereload plugin installed in your browser


### How to
( npm install package --save-dev)
    $ npm install
    $ gulp

npm install imagemin-keep-folder --save-dev

### Gulp Tasks
- `gulp`: watch js/sass/img directories ; compile sass ; minify js ; optimize images
- `gulp watch`: watch js/sass/img directories
- `gulp sass`: compile sass to style.css
- `gulp lint`: Validate main theme Javascript file (main.js)
- `gulp js`: Minify the js files
- `gulp img`: Compress theme images
- `gulp font`:  Move fonts from assets to dist (including Boostrap Font from npm package)


