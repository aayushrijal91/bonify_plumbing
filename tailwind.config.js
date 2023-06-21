/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#C62026',
        'dark': '#040505',
        'white': '#ffffff',
        'black': '#000000',
      },
      fontFamily: {
        raleway: ['Raleway', 'sans-serif'],
        faktum: ['Faktum', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

