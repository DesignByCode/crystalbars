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
    fontFamily: {
      'sans': ['Poppins', 'sans-serif'],
    },
    extend: {

      colors: {
        primary: {  DEFAULT: '#26A4DF',  '50': '#EDF8FC',  '100': '#D7EEF9',  '200': '#ABDCF2',  '300': '#7EC9EC',  '400': '#52B7E5',  '500': '#26A4DF',  '600': '#1B85B6',  '700': '#15648A',  '800': '#0E445D',  '900': '#072431'},
        secondary: '#ffc300',
        dark: '#000814'
      }
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};


// fontFamily: {
//   sans: ['Nunito', ...defaultTheme.fontFamily.sans],
// },
