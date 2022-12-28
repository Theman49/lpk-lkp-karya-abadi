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
        'primary': '#10A19D',
        'secondary': '#EB6440',
        'black': '#121212',
        'grey-1': '#C6CCD2',
        'grey-2': '#DDDDDD',
      },
    },
  },
  plugins: [],
}
