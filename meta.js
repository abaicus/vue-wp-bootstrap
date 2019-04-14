module.exports = {
  helpers: {
    lowercase: str => str.toLowerCase(),
    abbreviate: str => {
      if (str.indexOf('-') > -1) {
        let matches = str.match(/\b(\w)/g);
        return matches.join('')
          .toUpperCase();
      }
      return str.toUpperCase();
    },
    lowercaseAbbrev: str => {
      if (str.indexOf('-') > -1) {
        let matches = str.match(/\b(\w)/g);
        return matches.join('')
          .toLowerCase();
      }
      return str.toLowerCase();
    },
  },
  'prompts': {
    'name': {
      'type': 'string',
      'required': true,
      'label': 'Plugin Slug (Must be Hyphened)',
      'default': 'wordpress-vue-js-bootstrap'
    },
    'niceName': {
      'type': 'string',
      'required': true,
      'label': 'Plugin Nice Name',
      'default': 'WordPress Vue.js Bootstrap'
    },
    'textdomain': {
      'type': 'string',
      'required': true,
      'label': 'Plugin Text Domain',
      'default': 'textdomain'
    },
    'version': {
      'type': 'string',
      'required': true,
      'label': 'The version of the package',
      'default': '0.0.1'
    },
    'description': {
      'type': 'string',
      'required': true,
      'label': 'Project description',
      'default': 'A Vue.js WordPress Plugin'
    },
    'author': {
      'type': 'string',
      'label': 'Author'
    },
    'authorUrl': {
      'type': 'string',
      'label': 'Author URI',
      'default': 'https://themeisle.com'
    },
    'license': {
      'type': 'string',
      'label': 'License',
      'default': 'GPL-2.0+'
    },
    'licenseUrl': {
      'type': 'string',
      'label': 'License',
      'default': 'https://www.gnu.org/licenses/gpl-2.0.html'
    },
    'build': {
      'type': 'list',
      'message': 'Vue build',
      'choices': [
        {
          'name': 'Runtime + Compiler: recommended for most users',
          'value': 'standalone',
          'short': 'standalone'
        },
        {
          'name': 'Runtime-only: about 6KB lighter min+gzip, but templates (or any Vue-specific HTML) are ONLY allowed in .vue files - render functions are required elsewhere',
          'value': 'runtime',
          'short': 'runtime'
        }
      ]
    },
    'lint': {
      'type': 'confirm',
      'message': 'Use ESLint to lint your code?'
    },
    'commitlint': {
      'type': 'confirm',
      'message': 'Setup Commit Lint and Pre-Commit Hooks?'
    }
  },
  'filters': {
    '.eslintrc.js': 'lint',
    '.commitlintrc.js' : 'commitlint'
  },
  'completeMessage': 'To get started:\n\n  cd {{destDirName}}\n  composer install\n  npm install\n  npm run dev'
};
