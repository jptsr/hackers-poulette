module.exports = {
  content: [
    "./src/**/*.{html, js}", 
    "./src/**/*"
  ],
  theme: {
    extend: {
      fontFamily: {
        boletta: ["bellotaregular", "cursive"],
        bolettabold: ["bellotabold", "cursive"],
      },
      margin: {
        'm-y-form': '80px',
      },
      padding: {
        'p-x': '40px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}