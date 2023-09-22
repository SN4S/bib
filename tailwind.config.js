/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {
    extend: {
        aspectRatio: false,
    },
  },
  plugins: [require('@tailwindcss/aspect-ratio'),],
}

