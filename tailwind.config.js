/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      colors: {
        'brand-colour': 'oklch(49.88% 0.1131 206.47)',
        'secondary-colour': 'oklch(91.33% 0.0302 128.12)',
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
};

export default config;
