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
        'black-soft': '#1F1F1F',
        'blue-deep': '#0038FF',
        'blueviolet': '#8a2be2',
        'blue-sky': '#F0F0FC',
        'beige': '#E8E3DF',
        'brown-gray': '#9A8585',
        'gray-soft': '#D9D9D9',
        'gray-sky': '#A4B5E1',
        'green-deep': '#17DA13',
        'green-light': '#98FF96',
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

