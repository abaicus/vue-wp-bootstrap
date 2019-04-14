# Vue WordPress Plugin Boilerplate

### Usage

This is a project template for [@vue/cli](https://cli.vuejs.org).

``` bash
$ npm install -g @vue/cli
$ npm install -g @vue/cli-init
$ vue init abaicus/vue-wp-bootstrap my-project
$ cd my-project
$ composer install
$ npm install
$ npm run dev
```

### What's Included
- `docker-compose up`: the template comes with a preconfigured `docker-compose` file that will run a full WordPress instance. If you want to use that, you might want to look into that one first. 

- `npm run dev`: WebPack, SCSS, Eslint watching.

- `npm run build`: WebPack, SCSS build for production.

- `npm run lint`: Lint `.js` and `.vue` files with ESLint.
- `npm run pre-commit`: PHPCBF, PHPCS, Lint and add to git. This is ran automatically on commit if you initialize the project with commit lint.

### Customizations
You will likely need to do some tuning to suit your own needs:

- Install additional libraries that you need, e.g. `vue-router`, `vue-resource`, `vuex`, etc...
