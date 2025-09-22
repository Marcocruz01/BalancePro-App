/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: ["./views/**/*.php", "./src/**/*.{php,js}"],
  theme: {
    extend: {
      fontFamily: {
        manrope: ['DM Sans', 'sans-serif'],
      }
    },
  },
  plugins: [],
}