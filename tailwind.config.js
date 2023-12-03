/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        boxShadow:{
            'nv': '4px 4px 12px #0000000A'
        },
        fontFamily:{
            'geologica': ['Geologica',' sans-serif'],
        },
      },
    },
    plugins: [],
  }
