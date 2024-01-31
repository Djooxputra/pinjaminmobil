/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/**/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin'),
  ],
}

