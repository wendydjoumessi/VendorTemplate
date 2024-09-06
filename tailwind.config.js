/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#009DD1',
        'custom-gray': '#F6F6F6',
        'custom-green': '#3CA455',
        'custom-dark': '#525252',
        'custom-gray1': '#BDBDBD',
      
      },
    },
  },
  plugins: [],
}

