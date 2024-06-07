/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        laravel: '#f6993f',
        'custom-blue': '#201658',
        'custom-sea': '#98ABEE',
        'custom-beige': '#F9E8C9',
      },
    },
  },
  plugins: [],
};