/** @type {import('tailwindcss').Config} config */
const config = {
  content: [
    "./index.php",
    "./app/**/*.php",
    "./resources/**/*.{php,vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        DMSerifDisplay: ["DMSerifDisplay-Regular", "sans-serif"],
        SourceSansPro: ["SourceSansPro-Regular", "sans-serif"],
      },
      display: ['responsive'],
    },
  },
  plugins: [],
};

export default config;
