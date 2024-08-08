/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './src/**/*.html',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        accent: '#61656E',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      fontSize: {
        h2: ['44px', '1.2'], // Taille de 44px et ligne hauteur de 1.2
        h3: ['24px', '1.2'],
        p: ['18px', '1.5'], // Ligne hauteur de 1.5 pour les paragraphes
      },
      fontWeight: {
        medium: '500',
        regular: '400',
      },
    },
  },
  plugins: [],
}


