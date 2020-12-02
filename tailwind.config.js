module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#FF2C5E',
        main: '#4CA1AF',
      },
      gradientColorStops: {
        main: '#4CA1AF',
        end: '#2C3E50',  
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms')],
}
