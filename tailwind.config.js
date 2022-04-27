module.exports = {
  content: [
    "./src/**/*.{html, js}", 
    "./src/**/*"
  ],
  theme: {
    extend: {
      colors: {
        orange: '#FF7245',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}