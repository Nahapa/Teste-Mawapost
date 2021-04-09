module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'layout': {
          'body': '#F1F1F1',
          'sidebar': '#F6F6F6',
        },
        'theme': {
          'primary': '#FBB345',
          'secondary': '#52442C',
          'striped': '#FBB34511',
        }
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ['even', 'odd'],
    },
  },
  plugins: [],
}
