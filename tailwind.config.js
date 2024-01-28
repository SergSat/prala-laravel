import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pr-black-soft': '#1F1F1F',
        'pr-blue': '#0038FF',
        'pr-blueviolet': '#8a2be2',
        'pr-blue-sky': '#F0F0FC',
        'pr-beige': '#E8E3DF',
        'pr-brown-gray': '#9A8585',
        'pr-gray-soft': '#D9D9D9',
        'pr-gray-sky': '#A4B5E1',
        'pr-green': '#17DA13',
        'pr-green-light': '#98FF96',
      },
      blur: {
        xs: '2px',
      },
    },
  },
  plugins: [
    typography,
    forms,
    aspectRatio,
  ],
}

