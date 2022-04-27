module.exports = {
  content: [
    "./src/**/*.{html, js}", 
    "./src/**/*"
  ],
  theme: {
    extend: {
      
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}