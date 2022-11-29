/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            'pink': '#FFE8DC',
            'green': '#07691C'
        },
        screens: {
            '3xl': '1920px',
            '4xl': '2560px',
            '5xl': '3840px'
        }
    },
  },
  plugins: [],
}
