const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  mode: 'jit',
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {

      colors: {
        primary: '#25a4df',
        secondary: '#ffc300',
        light: '#eee',
        dark: '#000814'
      }
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};


      // fontFamily: {
      //   sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      // },
