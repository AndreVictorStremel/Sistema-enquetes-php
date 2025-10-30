/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", // <-- ADICIONE ISSO
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}